# Examen 2ª evaluación

Por María Rabanales para DWES.
Desplegado en: rabanales.sytes.net 
Github en: https://github.com/DAW-presencial/examen2eva-RiaRabanales

## Base de datos
He creado una base de datos nueva en postgresql (con mi usuario en la cuenta de FBMoll) llamada 'mrabanales_examen2eva'. 
La migración me ha creado, entre otras, la tabla tutors, que es en la que he introducido los datos conforme a la tarea 12.
Los datos de conexión están en el archivo .env: https://github.com/DAW-presencial/examen2eva-RiaRabanales/blob/master/.env

En la creación de la base de datos he considerado absolutamente necesarios sólo los siguientes elementos:
* empresa
* nombre y primer apellido del tutor
* identificación
* teléfono
* e-mail


El campo 'estado' hubiera sido, quizás, más interesante como un boolean (activo: true/false), pero por falta de tiempo no me da tiempo a modificarlo y, en cualquier caso, funciona bien como está y permite la introducción de más de dos valores.