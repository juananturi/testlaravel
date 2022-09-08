TestLaravel 


Presentado por:
Juan Sebastian Anturi Duque 



Presentado a:
Carlos mora 


Fecha:
08/09/2022


Programa:
Análisis y desarrollo de sistemas de la información 











Durante este ejercicio realizamos un test para validar la interfaz de usuario primero creamos un nuevo proyecto a través del comando composer create-porject Laravel/Laravel testlaravel
 
Después de crear el proyecto usamos este comando 
 
Con este comando corremos los test de prueba para poderlos usar y se crean las siguientes carpetas con el comando php artisan make:test UserTest:
 

Luego de esto creamos en el proyecto los test unitarios de la siguiente manera 
 

Luego instalamos la interfaz de usuario con el comando php artisan ui React –auth
 
Este comando nos permite usar una interfaz de usuario integrando a nuestro código el freinwork  React el cual trabaja con javaScript 
Luego vamos a instalar los paquetes con npm install 
 


Y luego de que se instale de manera satisfactoria ponemos a correr el servidor encargado de la interfaz de usuario con el comando npm run dev 
 
Creamos una base de datos con el nombre testlaravel a través de xampp desde phpmyadmin y en la carpeta .env modificamos el nombre para que coincida con la base de datos 
   

Para que los datos quede subios a la BD usamos el comando php artisan migrate y subimos la migracion 
 
Luego modificamos el archivo UserTest.php
 
Luego de esto ejecutamos el test para validar que funcione con el php artisan test 
 


