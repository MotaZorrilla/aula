#!/usr/bin/env bash
set -e

echo "=========================================================="
echo "🚀 INICIANDO DESPLIEGUE CONTINUO AL HOMELAB (PROTOCOLO 4) "
echo "=========================================================="

HOMELAB_IP="100.116.133.39"
USER="motazorrilla"

git push origin master

ssh -o ConnectTimeout=8 "$USER@$HOMELAB_IP" "cd ~/apps/aula && git fetch origin master && git checkout origin/master -- ugma-gerencia-obras openspec assets && docker restart aula-gateway || true"

echo "✅ Despliegue completado con éxito."
