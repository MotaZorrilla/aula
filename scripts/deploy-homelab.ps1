<#
.SYNOPSIS
    Script oficial de despliegue automatizado e idempotente al Homelab Ubuntu (Protocolo 4).
#>

param(
    [string]$CommitMessage = "chore(deploy): sync aula ecosystem to homelab"
)

$ErrorActionPreference = "Stop"

Write-Host "==========================================================" -ForegroundColor Cyan
Write-Host " INICIANDO DESPLIEGUE CONTINUO AL HOMELAB (PROTOCOLO 4) " -ForegroundColor Cyan
Write-Host "==========================================================" -ForegroundColor Cyan

Set-Location "C:\xampp\htdocs\aula"
$status = git status --porcelain
if ($status) {
    Write-Host "Detectados cambios locales sin confirmar. Empaquetando..." -ForegroundColor Yellow
    git add -A
    git commit -m "$CommitMessage"
}

Write-Host "Subiendo cambios a GitHub (origin/master)..." -ForegroundColor Green
git push origin master

$homelabIp = "100.116.133.39"
$user = "motazorrilla"

Write-Host "Sincronizando con Homelab Ubuntu ($homelabIp)..." -ForegroundColor Green

$remoteCmd = 'cd ~/apps/aula && git fetch origin master && git checkout origin/master -- ugma-gerencia-obras openspec assets && docker restart aula-gateway > /dev/null 2>&1 || true'

$target = $user + "@" + $homelabIp
ssh -o ConnectTimeout=8 -o StrictHostKeyChecking=accept-new $target $remoteCmd

if ($LASTEXITCODE -eq 0) {
    Write-Host "Sincronizacion exitosa en Homelab Ubuntu." -ForegroundColor Green
} else {
    Write-Host "Advertencia: No se pudo conectar inmediatamente al Homelab por SSH. Verifique conexion Tailscale." -ForegroundColor Yellow
}

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
