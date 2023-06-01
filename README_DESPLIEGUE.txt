README - Pasos para poner en funcionamiento un proyecto Laravel versión 10
Este README proporciona instrucciones paso a paso para configurar y poner en funcionamiento un proyecto Laravel versión 10
desde un repositorio. Asegúrate de seguir los siguientes pasos para garantizar una configuración correcta.

Requisitos previos
Antes de comenzar, asegúrate de tener instalado lo siguiente en tu máquina:

PHP 7.4 o superior
Composer (https://getcomposer.org/)
MySQL o cualquier otro sistema de gestión de bases de datos compatible (ejemplo realizado con Wampp)
Pasos a seguir:
---Clona el repositorio

---bash
-Copy code
git clone <URL_DEL_REPOSITORIO>

Navega hasta la carpeta del proyecto

---bash
-Copy code
cd <NOMBRE_DEL_PROYECTO>
Instala las dependencias de Composer

-Copy code
composer install
Crea un archivo .env en la raíz del proyecto. Puedes copiar el archivo .env.example y renombrarlo como .env.

---bash
-Copy code
cp .env.example .env
Genera una clave de aplicación

---bash
-Copy code
php artisan key:generate
Configura la conexión a la base de datos

Abre el archivo .env en un editor de texto y configura los parámetros de conexión a tu base de datos. Asegúrate de proporcionar los valores correctos
para DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME y DB_PASSWORD (en caso de no tener DB_PASSWORD dejar en blanco).

Ejecuta las migraciones de la base de datos

---bash
-Copy code
php artisan migrate
Opcional: ejecuta los seeders de la base de datos

Si el proyecto tiene seeders predefinidos para poblar la base de datos, ejecuta el siguiente comando:

---bash
-Copy code
php artisan db:seed
Inicia el servidor de desarrollo

---bash
-Copy code
php artisan serve
Abre tu navegador y visita http://localhost:8000 para ver la aplicación en funcionamiento.

¡Listo! Ahora deberías tener el proyecto Laravel versión 10 en funcionamiento en tu máquina local.

Recuerda que estos pasos son una guía básica y pueden variar dependiendo de las necesidades específicas de tu proyecto.
Si encuentras algún problema durante la configuración, consulta la documentación oficial de Laravel o busca en la comunidad en
línea para obtener ayuda adicional.
