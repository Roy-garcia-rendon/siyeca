# SIYECA - Sistema de Gestión Municipal

## 📋 Descripción del Proyecto
SIYECA es un sistema web integral desarrollado para la gestión de empleados y obras públicas de un ayuntamiento. Esta aplicación facilita la administración de recursos humanos, seguimiento de proyectos de obras públicas y generación de reportes.

## 🚀 Características Principales

### 👥 Gestión de Empleados
- Registro completo de información personal y laboral
- Control de asistencia y horarios
- Generación de reportes de nómina
- Gestión de documentos personales

### 🏗️ Administración de Obras Públicas
- Seguimiento de proyectos de construcción
- Asignación de personal a obras
- Control de avances y presupuestos
- Generación de reportes de obra

### 📊 Módulo de Servicios Públicos
- Gestión de servicios municipales
- Control de mantenimiento
- Asignación de personal
- Seguimiento de incidencias

## 🛠️ Requisitos Técnicos

### Entorno de Desarrollo
- Servidor web Apache (XAMPP, WAMP, LAMP)
- PHP 7.4 o superior
- MySQL 5.7 o superior
- Navegador web moderno (Chrome, Firefox, Edge, Safari)

### Dependencias
- PHP 7.4+
- MySQL 5.7+
- Extensión PDO de PHP habilitada
- Extensión GD de PHP para generación de imágenes
- dompdf para generación de reportes en PDF

## 🚀 Instalación

### 1. Configuración del Entorno
1. Instalar XAMPP/WAMP/LAMP según tu sistema operativo
2. Iniciar los servicios de Apache y MySQL

### 2. Configuración de la Base de Datos
1. Crear una nueva base de datos llamada `siyeca12` en phpMyAdmin
2. Importar el archivo `bd_xampp/siyeca12.sql`
3. Verificar que todas las tablas se hayan creado correctamente

### 3. Instalación de Dependencias
1. Instalar la librería dompdf para generación de PDFs:
   ```bash
   composer require dompdf/dompdf
   ```
   O descargar manualmente de: [dompdf GitHub](https://github.com/dompdf/dompdf)

### 4. Configuración del Proyecto
1. Colocar los archivos del proyecto en la carpeta `htdocs` (XAMPP) o `www` (WAMP)
2. Asegurarse de que los permisos de escritura estén configurados correctamente en las carpetas necesarias

## 🗃️ Estructura de la Base de Datos

### Tabla: empleados
- Almacena la información personal y laboral de los empleados
- Incluye datos como nombre, CURP, RFC, dirección, contacto de emergencia, etc.

### Tabla: obras_publicas
- Registra los proyectos de obras públicas
- Contiene información de ubicación, presupuesto, fechas y personal asignado

### Tabla: servicios_publicos
- Gestiona los servicios municipales
- Incluye información de mantenimiento, personal asignado y estado

## 📝 Guía de Uso

### Acceso al Sistema
1. Abrir el navegador y acceder a `http://localhost/siyeca`
2. Iniciar sesión con las credenciales proporcionadas

### Módulos Principales
1. **Dashboard**: Vista general del sistema
2. **Empleados**: Gestión de personal
3. **Obras Públicas**: Administración de proyectos
4. **Reportes**: Generación de informes

## 📄 Generación de Reportes
El sistema permite generar reportes en formato PDF utilizando la librería dompdf. Los reportes disponibles incluyen:
- Nómina de empleados
- Avances de obra
- Asistencia del personal
- Presupuestos y gastos

## 🔒 Seguridad
- Autenticación de usuarios
- Control de acceso basado en roles
- Encriptación de contraseñas
- Protección contra inyección SQL

## 📱 Compatibilidad
- Compatible con dispositivos de escritorio
- Diseño responsivo para tablets
- Optimizado para los principales navegadores web

## 🤝 Contribución
Las contribuciones son bienvenidas. Por favor, lee las pautas de contribución antes de enviar pull requests.

## 📄 Licencia
Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## 📞 Soporte
Para soporte técnico, por favor contactar al equipo de desarrollo o abrir un issue en el repositorio.

## 📊 Diagramas

### Diagrama de Flujo - Alta de Obras
![Diagrama de Flujo obrasalta.php](https://github.com/user-attachments/assets/75321f20-8ee5-4c0b-879b-24c63b70bc25)

### Estructura de la Base de Datos
![Estructura de la Base de Datos](https://github.com/user-attachments/assets/ae442352-6f5c-4cfd-bc82-de12f0bf4d94)