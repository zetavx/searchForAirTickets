# searchForAirTickets
searchForAirTickets

# Challenge Back-end
- Descarga la última version de Laravel (8)
- Crea migraciones, seeders y modelos, para 2 tablas, cada una con 3 columnas (sin contar el ID, y los 2 timestamps)
- Crea 2 endpoints de API para cada tabla, el 1ero para toda la colección (todos los datos); eje: api/persona, el 2do para el recurso (un registro en especifico, via su ID); eje: api/persona/1.

# Challenge Front-end
- Vas a utilizar la última versión de Vue.js
- Vas a usar Vue CLI para levantar un ambiente prototipo.
- Integra BootstrapVue ó Vuetify para usarlo de framework de estilos de UI.
- Usando los elementos de del framework anterior, crea las siguientes páginas:
- Una página donde haya un buscador de tickets aereos, con los siguientes campos: Ciudad de origen, ciudad de destino, fecha de salida, fecha de retorno.
- Una página donde se muestren resultados de búsqueda de tickets aéreos, cada tarjeta de resultado debería tener: precio, aerolínea, número de escalas, duración del vuelo.
- Debes usar vue router y vuex.
- Los datos deben estar quemados en el store, no pierdas tiempo en esto, pueden ser datos tipo lorem ipsum. No se necesita implementar la funcionalidad de búsqueda.


# PASOS PARA LA INSTALACIÓN 
- Clonar los repositorios https://git-scm.com/docs/git-clone (aqui te enseña como...)
> ingresa la carpeta de backend por consola o terminal
- composer install 
- php artisan key:generate
- **configura tu ENV para conectarse a database**
- php artisan migrate
- php artisan db:seed
> php artisan serve **http://127.0.0.1:8000**
- con eso ya tienes el backend arriba
- ingresa a la carpeta frontend por consola o terminal
- npm install
> npm run serve **http://localhost:8080/**
- nom run prod **para producción**

# Requisitos
- PHP 74
- Laravel 8
- Vue 2 (Utilice este por que incluí Vuetify y aun no esta terminada para VUE3)
- Vue Cli > con esto puedes acceder a **vue ui**
- phpmbstring, phppdo, phpmysql, ... y en fin las que vayas necesitando para eso te ayuda el framework 
- NPM
- Nodejs
- Database (Mysql, Postgresql... y en fin ahi ustedes veran.. y que tenga soporte para PHP)
- Y MUCHAS GANAS DE PASR MALAS NOCHES AVERIGUANDO, por que la docuemntacion de estas tecnología es buena y tiene una buena comunidad para apoyar en las preguntas!!
saludos att. Carlos Zambrano -> si tienen duda escriban al whatsaap y les ayudare en lo que pueda +59390517266
