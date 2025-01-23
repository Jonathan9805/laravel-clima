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
9. Crear un Usuario desde la pantalla principal para Logearse en el sistema 
10. Ingresar con el Usuario registrado.
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
* La aplicación utiliza la variable de entorno `OPENWEATHER_API_KEY` para configurar la
clave API de OpenWeather
### Rutas
* La aplicación utiliza las siguientes rutas:
+ `GET /climas` para listar los climas
+ `GET /climas/{id}` para ver detalles de un clima
+ `POST /climas` para crear un clima
+ `PUT /climas/{id}` para actualizar un clima
+ `DELETE /climas/{id}` para eliminar un clima
### Controladores
* La aplicación utiliza los siguientes controladores:
+ `ClimaController` para manejar las operaciones de clima
### Modelos
* La aplicación utiliza el modelo `Clima` para interactuar con la base de datos
### Servicios
* La aplicación utiliza el servicio `OpenWeatherService` para interactuar con la API de OpenWeather
### Migraciones
* La aplicación utiliza las migraciones para crear las tablas en la base de datos
### Compatibilidad
* La aplicación es compatible con Laravel 8.x
* La aplicación es compatible con PHP 7.4
* La aplicación es compatible con MySQL 8.x
### Licencia
* La aplicación está bajo la licencia MIT





