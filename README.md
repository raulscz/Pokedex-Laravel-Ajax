# A5 (javascript). Pokedex: Laravel + AJAX

**Explicación**

A partir del código asociado a este repositorio, clonarlo o descargarlo, se ha de entener el funcionamiento de este (rutas, controladores, vista y función AJAX read()), e implementar dos lógicas mediante AJAX:

- Registrar pokemon (subir imagen)

  - función js: `addImage`
  - ruta: `updateImageRoute`
  - controlador: `updateImage`

    La función `updateImage` del controlador ha de recoger la imagen y el id del pokemon (`numero_pokedex`), guardar la imagen en el servidor (`store('uploads','public');`) y guardar la ruta de la imagen en la base de datos (atributo `imagen`)

    **Recordad generar el enlace simbólico para empezar a guardar enlaces en el servidor...**

- Agregar a favoritos
  - función js: `updateFav`
  - ruta: `updateFavRoute`
  - controlador: `updateFav`


#### Pasos para la descarga y prueba de la aplicación:

1. clonar el repositorio

2. instalar las dependencias que faltan mediante el comando `composer install`

   > puede que, por problemas de compatibilidad, nos pida correr el comando `composer update`

3. crear la base de datos mediante **importanción** (se puede encontrar el fichero `.sql` en el directorio `database/sql/laravel_pokedex.sql`)

   > la base de datos se crea automáticamente a partir de la importación.

4. crear el fichero `.env` en el directorio principal del proyecto con el contenido pertinente

   > se puede utilizar el fichero `.env.example` para generar el nuevo `.env`

5. finalmente, Laravel puede pedir que se ejecute el comando `php artisan key:generate` para generar una nueva variable de entorno APP_KEY

*Para ver la vista del proyecto se ha de entrar al directorio `public`. ¡Recordad que la URL es case sensitive!*

#### Se ha de implementar la lógica de las siguientes funciones AJAX dentro del desarrollo (la función `read()` ya está implementada)

1. **ajax.js**
   ```js
   /* Actualiza el campo imagen de un pokemon en la base de datos, esta acción "registra" al pokemon */
   function addImage() {
      // code...
   }
   ```

   **Controller**

   ```php
      public function updateImage(Request $request){
         try {
               // code...
         } catch (\Throwable $th) {
               return response()->json(array('resultado'=> 'NOK: '.$th->getMessage().' | '));
         }
      }
   ```

2. **ajax.js**
   ```js
   /* Actualiza el campo favorito de un pokemon en la base de datos */
   function updateFav(num, fav) {
      // code...
      /* 
      // Para recoger ficheros (imágenes) de un formulario y enviarlas al controlador
      // la recojo:
      var imagen = document.getElementById('pokemon_image').files[0];
      // la añado al formData:
      var formData = new FormData();
      formData.append('img', imagen);
      */
   }
   ```
   
   **Controller**

   ```php
      public function updateFav(Request $request){
         try {
               // code...
         } catch (\Throwable $th) {
               return response()->json(array('resultado'=> 'NOK: '.$th->getMessage().' | '));
         }

      }
   ```
