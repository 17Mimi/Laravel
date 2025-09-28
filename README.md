# 🚀 Laboratorio #2 - Implementación del Login en Laravel

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📋 Descripción del Proyecto

Este repositorio contiene la implementación de un sistema de autenticación (login) desarrollado con Laravel, siguiendo el patrón arquitectónico Modelo-Vista-Controlador (MVC). El proyecto incluye funcionalidades de registro, inicio de sesión, cierre de sesión y recuperación de contraseña.

## 🎯 Objetivos del Laboratorio

- Implementar un sistema de autenticación completo en Laravel
- Aplicar el patrón MVC en una aplicación web real
- Configurar y utilizar migraciones de base de datos
- Gestionar rutas protegidas y middleware de autenticación
- Crear interfaces de usuario responsivas con Bootstrap

## 🛠️ Requisitos Previos

### Prerrequisitos del Sistema

| Tecnología | Versión Mínima | Descripción |
|------------|----------------|-------------|
| ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white) | 8.0 o superior | Lenguaje de programación |
| ![Composer](https://img.shields.io/badge/Composer-885630?style=flat&logo=composer&logoColor=white) | Última versión estable | Gestor de dependencias |
| ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white) | 10.x | Framework PHP |
| ![Apache](https://img.shields.io/badge/Apache-D22128?style=flat&logo=apache&logoColor=white) | 2.4+ | Servidor web |
| ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=flat&logo=mysql&logoColor=white) | 8.0+ | Base de datos |
| ![VS Code](https://img.shields.io/badge/VS_Code-007ACC?style=flat&logo=visual-studio-code&logoColor=white) | Recomendado | Editor de código |

### Entorno de Desarrollo
- **XAMPP/Laragon**: Para servidor local
- **Node.js y NPM**: Para compilación de assets
- **Git**: Control de versiones

## 🚀 Instalación y Configuración

### 1. Clonar el Repositorio
```bash
git clone [URL_DEL_REPOSITORIO]
cd nombre-del-proyecto
```

### 2. Instalar Dependencias de PHP
```bash
composer install
```

### 3. Configuración del Entorno
```bash
# Copiar archivo de configuración
cp .env.example .env

# Generar clave de aplicación
php artisan key:generate
```

### 4. Configuración de Base de Datos
Editar el archivo `.env` con los datos de tu base de datos:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_login
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Ejecutar Migraciones
```bash
# Crear base de datos
php artisan migrate



### 6. Instalar Paquete de Autenticación

#### Opción A: Laravel UI + Bootstrap
```bash
composer require laravel/ui
php artisan ui bootstrap --auth
npm install && npm run dev
```

#### Opción B: Laravel Breeze (Alternativa)
```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
```

### 7. Iniciar Servidor de Desarrollo
```bash
php artisan serve
```

El proyecto estará disponible en: `http://127.0.0.1:8000`

## Arquitectura del Proyecto (MVC)

### Componentes MVC Implementados

#### Controladores
- **AuthController**: Maneja autenticación
- **HomeController**: Controlador para páginas protegidas
- **RegisterController**: Gestiona registro de usuarios
- **LoginController**: Controla inicio de sesión

#### Modelos
- **User Model**: Modelo de usuario con autenticación
- **Eloquent ORM**: Para interacción con base de datos

#### Vistas
- **auth/login.blade.php**: Formulario de inicio de sesión
- **auth/register.blade.php**: Formulario de registro
- **home.blade.php**: Página principal protegida
- **layouts/app.blade.php**: Layout principal

#### 🛤️ Rutas
- Rutas públicas (login, register)
- Rutas protegidas (middleware auth)
- Redirecciones automáticas

## 📸 Resultado del Laboratorio

![Captura de pantalla del sistema de login](InicioSesion.png)

*Pantalla principal del sistema de autenticación implementado*

![Captura de pantalla del sistema de login](CrearCuenta.png)

*Pantalla principal del sistema de autenticación implementado*

### Funcionalidades Implementadas ✅

- ✅ Registro de nuevos usuarios
- ✅ Inicio de sesión con email y contraseña
- ✅ Cierre de sesión seguro
- ✅ Validación de formularios
- ✅ Protección de rutas con middleware
- ✅ Interfaz responsiva con Bootstrap
- ✅ Mensajes de error y éxito
- ✅ Recordar sesión ("Remember me")

## 🗄️ Base de Datos

### Configuración
- **Motor**: MySQL 8.0
- **Nombre**: `laravel_login`
- **Codificación**: UTF-8

### Migraciones Ejecutadas
```bash
# Migración de usuarios (incluida por defecto)
2014_10_12_000000_create_users_table.php
2014_10_12_100000_create_password_resets_table.php
2019_08_19_000000_create_failed_jobs_table.php
```

### Comandos Utilizados
```bash
# Crear migración personalizada (si fue necesaria)
php artisan make:migration create_users_table

# Ejecutar migraciones
php artisan migrate

# Revertir migraciones (si fue necesario)
php artisan migrate:rollback

# Estado de migraciones
php artisan migrate:status
```

### Backup de Base de Datos
Se incluye un archivo `database_backup.sql` en la carpeta `/database/backups/` con la estructura y datos de prueba.

## Dificultades y Soluciones

### Problema 1: Error de Migración
**Dificultad**: Error al ejecutar `php artisan migrate`
```
SQLSTATE[42000]: Syntax error or access denied
```
**Solución**: Verificar configuración en `.env` y asegurar que MySQL esté ejecutándose.

### Problema 2: Dependencias de Node.js
**Dificultad**: Error al ejecutar `npm install`
**Solución**: 
```bash
# Limpiar cache de npm
npm cache clean --force
# Reinstalar dependencias
rm -rf node_modules package-lock.json
npm install
```

### Problema 3: Estilos de Bootstrap no se Cargan
**Dificultad**: Los estilos no se aplicaban correctamente
**Solución**: Ejecutar comandos de compilación:
```bash
npm run dev
# o para producción
npm run build
```

## Referencias

1. **Documentación Oficial de Laravel**: [https://laravel.com/docs](https://laravel.com/docs)
   - Guía completa sobre autenticación y MVC en Laravel

2. **Laravel UI Package**: [https://github.com/laravel/ui](https://github.com/laravel/ui)
   - Documentación del paquete de interfaz de usuario

3. **Bootstrap Documentation**: [https://getbootstrap.com/docs](https://getbootstrap.com/docs)
   - Referencia para componentes y estilos utilizados

4. **Laracasts - Laravel Authentication**: [https://laracasts.com](https://laracasts.com)
   - Tutoriales en video sobre autenticación en Laravel

5. **Stack Overflow**: Soluciones a problemas específicos encontrados durante el desarrollo

## Información del Desarrollo

**Fecha de Ejecución**:   28 de Septiembre de 2025
**Entorno de Desarrollo**: Windows 10/11, WAMPP, VS Code

---

## 👨‍💻 Información del Desarrollador

<div align="center">

### Este laboratorio ha sido desarrollado por el estudiante de la Universidad Tecnológica de Panamá

**Nombre:** [Miriam Jessenia Angulo Sánchez]  
**Correo:** [miriam.angulo@utp.ac.pa]  
**Curso:** Ingeniería Web - II Semestre 2025  
**Instructor del Laboratorio:** Ing. Irina Fong  

---

<img src="https://img.shields.io/badge/UTP-Universidad_Tecnológica_de_Panamá-blue?style=for-the-badge" alt="UTP">

**Fecha de Entrega:** 29 de septiembre de 2025

</div>

---