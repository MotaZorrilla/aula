#!/usr/bin/env bash
set -e

echo "=========================================================="
echo " 🚀 COMPUERTA CI/CD & DESPLIEGUE HOMELAB (PROTOCOLOS 3 & 4) "
echo "=========================================================="

echo "🧪 [PASO 1/3] Ejecutando Suite de Pruebas..."
php tests/run-tests.php

echo "📦 [PASO 2/3] Subiendo cambios a GitHub..."
git push origin master

echo "🔄 [PASO 3/3] Sincronizando con Homelab Ubuntu..."
HOMELAB_IP="100.116.133.39"
USER="motazorrilla"

ssh -o ConnectTimeout=8 "$USER@$HOMELAB_IP" "cd ~/apps/aula && git fetch origin master && git checkout origin/master -- ugma-gerencia-obras openspec assets scripts tests && docker restart aula-gateway || true"

echo "✅ Despliegue completado con éxito."
