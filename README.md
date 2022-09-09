TestLaravel 


Presentado por:
Juan Sebastian Anturi Duque 



Presentado a:
Carlos mora 


Fecha:
08/09/2022


Programa:
Análisis y desarrollo de sistemas de la información 


RESUMEN 
En el video visto anterior mente abordamos el tema de hacer testing en Laravel usamos los comandos correspondientes para crear una interfaz de usuario aprendimos a correr el servidor para que podamos trabajar tanto en el backend como en el frontend y usamos herramientas que nos proporciona una librería la cual tiene integrada el logarse, registrarse   haciendo a si el proceso de construcción de un sistema más fácil, en el video pudimos observar la manera adecuada de configurar la librería para obtener resultados óptimos y sacarle mayor provecho  
Paso a Paso:
Durante este ejercicio realizamos un test para validar la interfaz de usuario primero creamos un nuevo proyecto a través del comando composer create-porject Laravel/Laravel testlaravel
![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083304.png?raw=true)
Después de crear el proyecto usamos este comando 
 ![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083338.png?raw=true)
Con este comando corremos los test de prueba para poderlos usar y se crean las siguientes carpetas con el comando php artisan make:test UserTest:
 ![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083338.png?raw=true)

Luego de esto creamos en el proyecto los test unitarios de la siguiente manera 
![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083354.png?raw=true)

Luego instalamos la interfaz de usuario con el comando php artisan ui React –auth
![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083428.png?raw=true)
Este comando nos permite usar una interfaz de usuario integrando a nuestro código el freinwork  React el cual trabaja con javaScript 
Luego vamos a instalar los paquetes con npm install 
![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083445.png?raw=true)


Y luego de que se instale de manera satisfactoria ponemos a correr el servidor encargado de la interfaz de usuario con el comando npm run dev 
 ![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083508.png?raw=true)
Creamos una base de datos con el nombre testlaravel a través de xampp desde phpmyadmin y en la carpeta .env modificamos el nombre para que coincida con la base de datos 
![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083606.png?raw=true)

Para que los datos quede subios a la BD usamos el comando php artisan migrate y subimos la migracion 
![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083627.png?raw=true)


Luego modificamos el archivo UserTest.php
![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083649.png?raw=true)
Luego de esto ejecutamos el test para validar que funcione con el php artisan test 
![](https://github.com/juananturi/testlaravel/blob/master/img/Captura%20de%20pantalla%202022-09-09%20083711.png?raw=true)


link del repositorio 
https://github.com/juananturi/testlaravel.git








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
 


