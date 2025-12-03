# 🏃 Proyecto Laravel — Consulta de datos

Este proyecto forma parte de una práctica académica enfocada en la consulta de datos desde una base de datos usando Laravel. Incluye un sistema básico para visualizar y gestionar deportes, equipos y su relación.

---

## ⚙️ Requisitos

- PHP >= 8.1
- Laravel 10.x
- Composer  
- MySQL
- Blade (Motor de plantillas)
- Bootstrap

---

## 🏗️ Estructura del proyecto

```text
ejercicio-4/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── PlayersController.php    # Controlador para jugadores
│   │       ├── SportsController.php     # Controlador para deportes
│   │       └── TeamsController.php      # Controlador para equipos
│   └── Models/
│       ├── Player.php                # Modelo para jugadores
│       ├── Sport.php                 # Modelo para deportes
│       └── Team.php                  # Modelo para equipos
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php           # Plantilla base
│       ├── players/
│       │   ├── create.blade.php        # Vista para crear jugador
│       │   ├── edit.blade.php          # Vista para editar jugador
│       │   └── index.blade.php         # Vista general de jugador
│       ├── sports/
│       │   ├── create.blade.php        # Vista para crear deporte
│       │   ├── edit.blade.php          # Vista para editar deporte
│       │   └── index.blade.php         # Vista general de deporte
│       ├── teams/
│       │   ├── create.blade.php        # Vista para crear equipo
│       │   ├── edit.blade.php          # Vista para editar equipo
│       │   └── index.blade.php         # Vista general de equipo
│       └── index.blade.php             # Dashboard principal
└── routes/
    └── web.php                         # Rutas web del sistema

```
---


## 📝 Licencia

Este proyecto es de código abierto y está disponible bajo la Licencia MIT.

---

## 👤 Autor

Rocío Carolina Chávez Servín

GitHub: @programmeuse5885

---

## 📧 Contacto

Si tienes preguntas o sugerencias, no dudes en abrir un issue en el repositorio.

---

⭐️ Si este proyecto te fue útil, considera darle una estrella en GitHub
