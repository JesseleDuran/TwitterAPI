Para tener en local la siguiente API:

<strong>Paso 1:</strong> Abrir la terminal y en la dirección del repositorio correr:

```composer install```

Una vez terminado..

<strong>Paso 2:</strong> Crear en el archivo raíz del repositorio un archivo ```".env".```

<strong>Paso 3:</strong> Copiar todo el contenido del archivo ```".env.example"``` y pegarlo en el archivo ```".env"```

<strong>Paso 4:</strong> Cambiar los siguientes parámetros según corresponda en la Base de Datos:

```
DB_DATABASE=(Tu Base de Datos)
DB_USERNAME=(Escribir tu usuario)
DB_PASSWORD=(Escribir tu clave)

```

Una vez los datos sean los correspondientes, proceder:

<strong>Paso 5:</strong> Para obtener las tablas en la BD, en la terminal correr:

```php artisan migrate```

<strong>Paso 6:</strong> Para popular la Base de Datos, ejecutar en la terminal:

```php artisan db:seed```

<strong>Paso 7:</strong> En la terminal:

```php artisan serve```

Para correr el servidor.

