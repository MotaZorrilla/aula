# Runner oficial de pruebas para PowerShell (Protocolo 3)
$ErrorActionPreference = "Stop"
php "$PSScriptRoot\run-tests.php"
exit $LASTEXITCODE
