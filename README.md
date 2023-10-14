<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Sobre este proyecto

Este proyecto está basado en Laravel 10 por lo que la versión de PHP que utiliza, es la 8.1 como mínimo. Además, cuenta con los siguientes paquetes:



- **Laravel UI 4**: Es un paquete oficial desarrollado por Laravel y permite crear un sistema de autentificación basado en Bootstrap.
- **Laraveles Spanish**: Paquete que permite traducir al idioma español los mensajes que muestra por defecto Laravel.
- **Realrashid Sweetalert**: paquete que proporciona una manera fácil de mostrar mensajes de alerta utilizando la biblioteca de sweetalert2. 
- **Spatie Laravel Permission**: paquete que permite asociar usuarios a roles con permisos y administrarlos con una base de datos.  


Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Instalación

1. Clonación de repositorio

En la carpeta donde se desee instalar este proyecto, abrir un Git Bash y copie el siguiente comando:

`git clone https://github.com/gonzalomadariaga1/proyecto-base.git`

2. Instalación de paquetes 

Luego de clonar el repositorio, es necesario instalar los paquetes. Para ello, en una Git bash y dentro de la carpeta del proyecto, ingrese el siguiente comando:

`npm install`


3. Iniciación del proyecto en modo desarrollo

Tras la instalación de los paquetes, es necesario iniciar el proyecto en modo desarrollo. Ingrese el siguiente comando en la misma ventana de Git bash: 

`npm run dev`

4. Iniciar el gestor de dependencias para PHP

Tras la instalación de los paquetes, es necesario descargar e instalar las librerias y paquetes de este proyecto vía composer. Ingrese el siguiente comando en la misma ventana de Git bash: 

`composer install`

5. Crear archivo .env y generar key

Ingrese los siguientes comandos para generar un archivo .env y luego, genere una key: 

`cp .env.example .env`

`php artisan key:generate`

6. Creación, configuración y migración de base de datos

Cree una base de datos localmente, luego configure el archivo .env del proyecto e ingrese el nombre de la base de datos recién creada junto con el usuario y contraseña si es necesario. Tras esto, ingrese el siguiente comando:

`php artisan migrate`

Este comando, creará las tablas necesarias para el correcto funcionamiento del proyecto base, entre las cuales destacan: 

- Tabla para Usuarios
- Tabla de permisos
- Tabla de roles 
- Tabla de asociación de roles y usuarios
- Tabla de asociación de permisos y usuarios

7. Registro de usuario

Como último paso, diríjase a la página de registro de usuarios y cree uno. Al crearlo, ya se encontrará logueado y podrá acceder al panel de administración tanto de usuarios como de roles.


