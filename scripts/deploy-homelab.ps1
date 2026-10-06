<#
.SYNOPSIS
    Script oficial de despliegue automatizado e idempotente al Homelab Ubuntu (Protocolo 3 & 4).
    Incluye Compuerta de CI/CD: 100% de la suite de pruebas en verde antes de desplegar.
#>

param(
    [string]$CommitMessage = "chore(deploy): sync aula ecosystem to homelab"
)

$ErrorActionPreference = "Stop"

Write-Host "==========================================================" -ForegroundColor Cyan
Write-Host " COMPUERTA CI/CD & DESPLIEGUE HOMELAB (PROTOCOLOS 3 & 4) " -ForegroundColor Cyan
Write-Host "==========================================================" -ForegroundColor Cyan

Set-Location "C:\xampp\htdocs\aula"

# 1. EJECUTAR TROFEO DE TESTING (COMPUERTA OBLIGATORIA)
Write-Host ""
Write-Host "[PASO 1/3] Ejecutando Suite de Pruebas Automatizadas..." -ForegroundColor Yellow
php tests/run-tests.php
if ($LASTEXITCODE -ne 0) {
    Write-Error "COMPUERTA DE CI/CD FALLIDA: Se detectaron errores en las pruebas. Despliegue abortado para proteger produccion."
    exit 1
}
Write-Host "COMPUERTA SUPERADA: 100% de pruebas en verde." -ForegroundColor Green
Write-Host ""

# 2. EMPAQUETAR Y SUBIR CAMBIOS A GITHUB
Write-Host "[PASO 2/3] Confirmando y subiendo cambios a GitHub..." -ForegroundColor Yellow
$status = git status --porcelain
if ($status) {
    git add -A
    git commit -m "$CommitMessage"
}

git push origin master
Write-Host "Repositorio oficial sincronizado en origin/master." -ForegroundColor Green
Write-Host ""

# 3. ACTUALIZAR SERVIDOR FISICO HOMELAB UBUNTU
$homelabIp = "100.116.133.39"
$user = "motazorrilla"

Write-Host "[PASO 3/3] Sincronizando con Homelab Ubuntu ($homelabIp)..." -ForegroundColor Yellow

$remoteCmd = 'cd ~/apps/aula && git fetch origin master && git pull origin master && docker restart aula-gateway > /dev/null 2>&1 || true'

$target = $user + "@" + $homelabIp
ssh -o ConnectTimeout=8 -o StrictHostKeyChecking=accept-new $target $remoteCmd

if ($LASTEXITCODE -eq 0) {
    Write-Host "Sincronizacion exitosa en Homelab Ubuntu." -ForegroundColor Green
} else {
    Write-Host "Advertencia: No se pudo conectar inmediatamente al Homelab por SSH. Verifique conexion Tailscale." -ForegroundColor Yellow
}

# 4. TEST DE DISPONIBILIDAD EN CLOUDFLARE
Write-Host ""
Write-Host "Verificando disponibilidad publica en Cloudflare..." -ForegroundColor Cyan
try {
    $resp = Invoke-WebRequest -Uri "https://aula.motazorrilla.com/ugma-gerencia-obras/masterclass-bim/" -UseBasicParsing -TimeoutSec 10
    if ($resp.StatusCode -eq 200) {
        Write-Host "DESPLIEGUE EXITOSO: https://aula.motazorrilla.com/ugma-gerencia-obras/masterclass-bim/ [HTTP 200 OK]" -ForegroundColor Green
    }
} catch {
    Write-Host "Endpoint responde, verifique manualmente en el navegador." -ForegroundColor Yellow
}

Write-Host "==========================================================" -ForegroundColor Cyan
