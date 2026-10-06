# UGMA Diplomado en Planificación y Gerencia de Obras Specification

## Purpose
Establecer las especificaciones de ingeniería y requerimientos funcionales para el portal del Módulo VI (Tecnología y Sostenibilidad en Gerencia de Obras) de la UGMA, asegurando la integridad académica, rigor matemático, interactividad en tiempo real y blindaje documental en todas las sesiones y subportales.

## Requirements

### Requirement: Articulación Curricular Transversal con Módulos I al IV
El hub del Diplomado SHALL presentar una sección destacada de retrospectiva intermodular que contraste los métodos tradicionales impartidos en los Módulos I (Organización), II (Costos y Harry Osers), III (Legal y Art. 1637 CCV) y IV (Lean Construction) frente a las soluciones ConTech de vanguardia del Módulo VI.

#### Scenario: Visualización de saltos tecnológicos por módulo
- **GIVEN** el estudiante consulta la sección "Cimientos del Diplomado"
- **WHEN** inspecciona cada tarjeta modular
- **THEN** visualiza el nombre del facilitador titular, las horas asignadas, el cuello de botella tradicional y la solución tecnológica específica del Módulo VI.

### Requirement: Masterclass BIM y Curva de MacLeamy (Tema 1)
La subpágina `/ugma-gerencia-obras/masterclass-bim/` SHALL estructurar 9 bloques temáticos exhaustivos, incluyendo una barra de navegación rápida por chips, análisis comparativo CAD 2D vs openBIM (ISO 19650), articulación con las fórmulas de despiece de Harry Osers y la norma COVENIN 2000-87/92, blindaje de responsabilidad decenal bajo el Artículo 1637 del Código Civil Venezolano, estándares IFC 4.3 y BCF 3.0, simulador interactivo de la Curva de MacLeamy en Chart.js, calculadora paramétrica de ROI BIM y script de auditoría en Python con `ifcopenshell`.

#### Scenario: Interacción con el simulador de MacLeamy
- **GIVEN** el usuario navega a la sección de la Curva de MacLeamy en la Masterclass
- **WHEN** desplaza el slider de madurez hacia el Nivel 4 o selecciona "Proyecto Industrial Complejo (1.3x)"
- **THEN** el gráfico Chart.js actualiza de inmediato las curvas de esfuerzo BIM y costo de cambios, recalculando las coordenadas dinámicamente y actualizando el texto del indicador.

#### Scenario: Cálculo paramétrico de ROI BIM
- **GIVEN** el usuario interactúa con la calculadora de ROI
- **WHEN** modifica el presupuesto a $5,000,000 USD o presiona el botón predeterminado "Industrial Guayana"
- **THEN** el sistema recalcula en tiempo real el ahorro en re-trabajos (80% de mitigación CIFE), la inversión BIM y el ROI porcentual neto.

#### Scenario: Copiado de código Python IfcOpenShell
- **GIVEN** el usuario visualiza el bloque de código de extracción de volúmenes de vigas
- **WHEN** hace clic en el botón "Copiar Código"
- **THEN** el script se copia al portapapeles del sistema y el botón cambia temporalmente su texto a "¡Copiado!" con fondo verde esmeralda.

### Requirement: Tarjetas de Sesiones de Alta Densidad Informativa
Cada una de las 6 tarjetas de día de clase en el hub principal SHALL contener:
1. Encabezado con fecha, horario y horas académicas.
2. Objetivo de aprendizaje concreto.
3. Acordeón interactivo desplegable con fundamentos normativos, fórmulas analíticas y flujos de taller.
4. Pastillas de tecnologías clave.
5. Botones de acción directa con rutas relativas robustas hacia los subportales temáticos correspondientes.

#### Scenario: Despliegue de acordeón técnico de sesión
- **GIVEN** el usuario revisa la tarjeta de una sesión (ej. Día 03: Planificación 4D/5D)
- **WHEN** hace clic en el resumen "Explorar Contenido Técnico & Fórmulas"
- **THEN** el acordeón se expande suavemente revelando las ecuaciones de Valor Ganado (EVM: BAC, CPI, SPI, CV, SV) y los pasos metodológicos del taller sin romper el flujo vertical de la página.

### Requirement: Repositorio Centralizado de Dossiers Técnicos
El portal SHALL proveer acceso directo y referenciado a los 5 dossiers técnicos de investigación de frontera y al Compendio Maestro generados para el módulo, indicando su ruta física y temática rectora.

#### Scenario: Consulta del repositorio de dossiers
- **GIVEN** el estudiante o directivo se desplaza a la sección de investigaciones
- **WHEN** revisa los 6 elementos del repositorio
- **THEN** visualiza el resumen ejecutivo del eje temático y su identificador de archivo en el repositorio de la UGMA.
