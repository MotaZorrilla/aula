# OpenSpec: Módulo V Diplomado Gerencia de Obras UGMA
**Versión:** 2.0.0 (Clean Architecture & Laravel 12)  
**Autor:** Ing. Héctor Mota Zorrilla  
**Estado:** Formal / Aprobado  
**Normativa Base:** RFC 2119 / EARS (Easy Approach to Requirements Syntax)

---

## 1. Visión y Dominio del Sistema

El sistema implementa la plataforma académica, interactiva y evaluativa para el **Módulo V: Tecnología Aplicada a la Gestión y Control de Obras** del *Diplomado en Planificación y Gerencia de Obras Civiles e Industriales* de la Universidad Gran Mariscal de Ayacucho (UGMA).

### Competencia General Oficial
> "Conocer sobre las herramientas tecnológicas digitales en el seguimiento y control de obras."

---

## 2. Requisitos del Sistema (Sintaxis EARS)

### 2.1 Requisitos Ubicuos (Ubiquitous Requirements)
- **REQ-UBI-01:** The system SHALL expose the official curriculum divided strictly into the six (6) approved thematic units, four (4) foundational modules, and the centralized asset vault.
- **REQ-UBI-02:** The system SHALL enforce Clean Architecture separating Domain models, Application actions (Use Cases), FormRequests, and Presentation Blade templates.
- **REQ-UBI-03:** The system SHALL conform to WCAG 2.2 AA contrast ratios (minimum 4.5:1 for body copy and 3.0:1 for graphical/heading elements).

### 2.2 Requisitos Orientados a Eventos (Event-Driven Requirements)
- **REQ-EVT-01:** WHEN an unauthenticated user attempts to download protected assets, the system SHALL display the Registration/Login modal dialog and prohibit direct download streaming until identity is verified.
- **REQ-EVT-02:** WHEN a participant submits valid registration credentials (Cédula, Full Name, Email, Phone), the system SHALL persist the participant record via `RegisterStudentAction` and authorize download privileges.
- **REQ-EVT-03:** WHEN a student submits an executive decision in the War Room simulation, the system SHALL calculate the technical and contractual impact, persist the vote via `RecordWarRoomDecisionAction`, and render immediate feedback.
- **REQ-EVT-04:** WHEN an instructor authenticates with valid administrative credentials (`hector@motazorrilla.com` / `Baralo00.`), the system SHALL render the Admin Dashboard with participant metrics, module lock toggles, and grade rubric controls.

### 2.3 Requisitos Orientados a Estados (State-Driven Requirements)
- **REQ-STA-01:** WHILE a unit is marked as locked by an instructor, the system SHALL inform students that the unit content is scheduled and prevent access to its private deliverables.
- **REQ-STA-02:** WHILE a student has active session tokens, the system SHALL display their name and qualification badge in the HUD top bar and drawer navigation.

### 2.4 Requisitos de Casos Anómalos (Unwanted / Unhappy Path Requirements)
- **REQ-UNW-01:** IF a student registration payload contains an invalid email or missing mandatory fields, THEN the system SHALL reject the request with HTTP 422 Unprocessable Entity and return localized error descriptors.
- **REQ-UNW-02:** IF an instructor assigns a grade outside the 0 to 20 vigesimal scale, THEN the system SHALL reject the evaluation transaction and preserve previous valid marks.
- **REQ-UNW-03:** IF an unauthorized user attempts to mutate unit lock states or tamper with grades, THEN the system SHALL reject the operation with HTTP 403 Forbidden.

---

## 3. Escenarios BDD Ejecutables (GIVEN - WHEN - THEN)

### Escenario 1: Renderizado del Hub Curricular Oficial
```gherkin
GIVEN that the student accesses the platform at "/ugma-gerencia-obras"
WHEN the HTTP GET request is received
THEN the system SHALL return HTTP status 200
AND the response body SHALL contain the 6 official thematic units:
  | Unidad 1 | Introducción básica al BIM |
  | Unidad 2 | Tecnología y digitalización en campo |
  | Unidad 3 | Construcciones sostenibles |
  | Unidad 4 | Eficiencia energética y materiales ecológicos |
  | Unidad 5 | Gestión de residuos de obra |
  | Unidad 6 | Taller Integrador de Grado & War Room Virtual |
AND the response body SHALL contain links to the 4 foundation modules.
```

### Escenario 2: Registro de Estudiante y Desbloqueo de Descargas
```gherkin
GIVEN a guest participant with no prior session
WHEN they post valid payload to "/ugma-gerencia-obras/api/register":
  | field     | value                 |
  | cedula    | V-24123456            |
  | nombre    | Carlos Perez          |
  | email     | carlos.perez@ugma.edu |
  | telefono  | +584148889900         |
THEN the system SHALL persist the student in the database
AND the system SHALL return HTTP 201 Created with JSON {"success": true, "token": ...}
AND the student SHALL now have authorization to access protected downloads.
```

### Escenario 3: Ejecución y Evaluación en el Simulador War Room
```gherkin
GIVEN a registered participant confronting the critical transfer beam dilemma
WHEN they select Option 3 (Paralizar vaciado, emitir ticket BCF en CDE ISO 19650)
THEN the system SHALL register their choice
AND the system SHALL output the openBIM technical justification preserving Article 1637 CCV.
```

### Escenario 4: Evaluación Docente sobre Escala Vigesimal (0 a 20 pts)
```gherkin
GIVEN an authenticated instructor in the Admin Portal
WHEN they submit grades for a student across the 4 phases:
  | phase1_bim     | 5.0 |
  | phase2_clash   | 4.5 |
  | phase3_evm     | 5.0 |
  | phase4_defense | 4.5 |
THEN the system SHALL compute total_grade = 19.0 / 20.0
AND the system SHALL record the honors evaluation status.
```
