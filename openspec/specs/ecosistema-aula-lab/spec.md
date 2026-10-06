# Ecosistema Aula & Lab MotaZorrilla Specification

## Purpose
Estandarizar y especificar los requerimientos técnicos y funcionales de arquitectura, despliegue, interfaz y sincronización de datos para las plataformas de posgrado e innovación de Héctor Mota (`aula.motazorrilla.com` y `lab.motazorrilla.com`), garantizando consistencia industrial, cero regresión y automatización CI/CD continua hacia el servidor físico Ubuntu Homelab.

## Requirements

### Requirement: Enrutamiento Unificado e Inmutable del Hub de Aula
El sistema SHALL exponer un hub principal en `/` que articule limpiamente las dos grandes vertientes académicas del ecosistema: el Diplomado en Planificación y Gerencia de Obras de la UGMA (`/ugma-gerencia-obras/`) y el Club T.I.A. del Colegio Monte Carmelo (`/club-tia/`), además del Laboratorio ConTech (`https://lab.motazorrilla.com/bim/`).

#### Scenario: Navegación desde el Hub hacia el Diplomado UGMA
- **GIVEN** un estudiante o profesor ingresa a `https://aula.motazorrilla.com/`
- **WHEN** hace clic en la tarjeta o botón del Diplomado UGMA
- **THEN** el sistema redirige fluidamente a `/ugma-gerencia-obras/` sin recargas rotas ni códigos de error 404, presentando el itinerario de 30 horas y la articulación con los Módulos I al IV.

#### Scenario: Navegación hacia el Club T.I.A. en contenedor independiente
- **GIVEN** un alumno o docente ingresa a `https://aula.motazorrilla.com/`
- **WHEN** hace clic en el portal del Club T.I.A.
- **THEN** la pasarela Nginx enruta de manera transparente hacia la aplicación Laravel 12 en el puerto 8093 (`/club-tia/`), preservando las sesiones y el estado de gamificación.

### Requirement: Sincronización Automática e Idempotente hacia Homelab (Protocolo 4)
Cualquier cambio confirmado en el repositorio Git SHALL sincronizarse automáticamente con el servidor físico Ubuntu Homelab (`100.116.133.39`) sin requerir intervenciones manuales de SSH ni compilaciones repetitivas.

#### Scenario: Despliegue de actualización tras commit
- **GIVEN** se ejecuta un commit y push a la rama `master` del repositorio oficial
- **WHEN** se dispara la compuerta de despliegue (`deploy-homelab`)
- **THEN** el servidor Ubuntu ejecuta un pull o checkout idempotente en `/home/motazorrilla/apps/aula`, verifica la integridad de los archivos estáticos y reinicia suavemente el contenedor Nginx (`aula-gateway`) sin desconectar el túnel de Cloudflare.

### Requirement: Integración Interdisciplinaria con Visor BIM 3D (Three.js Lab)
El portal de la UGMA SHALL enlazar bidireccionalmente sus casos de estudio teóricos (Masterclass BIM, CDE ISO 19650 y Clash Detection) con el visor 3D paramétrico interactivo desplegado en `https://lab.motazorrilla.com/bim/`.

#### Scenario: Apertura de inspección 3D desde subpágina académica
- **GIVEN** el estudiante se encuentra en `/ugma-gerencia-obras/masterclass-bim/` o `/ugma-gerencia-obras/clash-detection/`
- **WHEN** presiona el botón "Visor BIM 3D (Lab)" o el banner de laboratorio práctico
- **THEN** el sistema abre en una nueva pestaña el visor WebGL en `https://lab.motazorrilla.com/bim/`, cargando los modelos federados para inspección paramétrica.

### Requirement: Telemetría y Persistencia en Decision Room (Módulo War Room)
El simulador gerencial "Executive Decision Room" SHALL permitir a los participantes emitir su voto técnico anónimo o identificado frente al dilema de obra y persistir la distribución porcentual para el análisis colegiado en clase.

#### Scenario: Emisión de voto en dilema estructural
- **GIVEN** el usuario se encuentra en la sección Executive Decision Room del portal UGMA
- **WHEN** selecciona una de las tres alternativas de servicio (A, B o C) y presiona "Emitir Veredicto Gerencial"
- **THEN** la interfaz bloquea selecciones múltiples, recalcula instantáneamente los porcentajes comparativos de consenso histórico y despliega la justificación técnica fundamentada en normas COVENIN y Lean Construction.

### Requirement: Estandarización Craft Floor Impeccable (Protocolo 4)
Toda la interfaz SHALL implementar el modo visual *Read/Operate* con tipografía fluida escalada mediante `clamp()`, tokens espaciales rígidos múltiplos de 4px, y contraste accesible estricto WCAG AA (mínimo 4.5:1 para texto regular y 3:1 para títulos).

#### Scenario: Adaptabilidad móvil en dispositivos de pantalla estrecha (<380px)
- **GIVEN** un ingeniero residente accede al aula virtual desde un smartphone en el frente de obra
- **WHEN** visualiza tablas comparativas de cómputos o simuladores de Chart.js
- **THEN** los contenedores activan desplazamiento horizontal suave (`overflow-x: auto`), los controles se redimensionan a un tamaño táctil mínimo de 44x44px y ningún elemento desborda el viewport horizontal.
