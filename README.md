# Laravel Clima - CRUD de Clima Con Api

=====================================
### Instalación
1. Clonar el repositorio
2. Instalar las dependencias con `composer install`
3. Instalar dependencias de frontend `npm install`
3. Crear un archivo `.env` con la configuración de la base de datos
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_clima
DB_USERNAME=root
DB_PASSWORD=
Clave API de OpenWeather
OPENWEATHER_API_KEY=`5c1e600e74140573995689e8bba5e09d`
4. Ejecutar `php artisan key:generate` para generar la clave de la aplicación
5. Ejecutar `php artisan migrate` para crear las tablas en la base de datos
6. Ejecutar `php artisan serve` para iniciar el servidor de desarrollo
7. Acceder a la aplicación en `http://127.0.0.1:8000/`
8. Compilar los Archivos Frontend con `npm run dev`

### Funcionalidades
* La aplicación utiliza la API de OpenWeatherMap para obtener los datos de clima
* La aplicación utiliza la base de datos para almacenar los datos de clima
* La aplicación permite crear, actualizar y eliminar climas
* La aplicación permite listar y ver detalles de un clima
### API
* La aplicación utiliza la API de OpenWeatherMap para obtener los datos de clima
* La aplicación utiliza la API de Laravel para interactuar con la base de datos
### Base de datos
* La aplicación utiliza la base de datos para almacenar los datos de clima
* La aplicación utiliza la migración para crear las tablas en la base de datos
### Configuración
* La aplicación utiliza el archivo `.env` para configurar la base de datos
* La aplicación utiliza la variable de entorno `DB_HOST` para configurar el host de la
base de datos
* La aplicación utiliza la variable de entorno `DB_PORT` para configurar el puerto de la
base de datos
* La aplicación utiliza la variable de entorno `DB_DATABASE` para configurar el nombre de la
base de datos
* La aplicación utiliza la variable de entorno `DB_USERNAME` para configurar el nombre de usuario de la base de datos
* La aplicación utiliza la variable de entorno `DB_PASSWORD` para configurar la contraseña de la base de datos



