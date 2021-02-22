## Web Service ReconoSer Id

Web Service para la prueba de ReconoSer Id, recibe la siguiente informacion de la aplicacion:

Nombre, cedula, dirección, ciudad, país, celular, foto base64, longitud y latitud, Boolean de bluetooth y Wifi

Pasos de configuracion del proyecto.

1. Instalar proyecto Laravel
2. Configurar conexion a Base de Datos
3. Crear tablas e información
    `php artisan migrate --seed`
4. Disfrute de la aplicación
    * POST:
        `/api/v1/person`
    * GET:
        `/api/v1/person`
