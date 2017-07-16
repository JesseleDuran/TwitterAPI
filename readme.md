Para tener en local la siguiente API:

Paso 1: Abrir la terminal y en la dirección del repositorio correr:

composer install

Una vez terminado..

Paso 2: Crear en el archivo raíz del repositorio un archivo ".env".

Paso 3: Copiar todo el contenido del archivo ".env.example" y pegarlo en el archivo ".env"

Paso 4: Cambiar los siguientes parámetros según corresponda en la Base de Datos:

DB_DATABASE=(Tu Base de Datos)
DB_USERNAME=(Escribir tu usuario)
DB_PASSWORD=(Escribir tu clave)

Una vez los datos sean los correspondientes, proceder:

Paso 5: Para obtener las tablas en la BD, en la terminal correr:

php artisan migrate

Paso 6: Para popular la Base de Datos, ejecutar en la terminal:

php artisan db:seed

Paso 7: php artisan serve

Para correr el servidor.

