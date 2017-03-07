<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TIPOS DE CIFRADO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1 class="center">TIPOS DE CIFRADO EN PHP</h1>

          <p>Los cifrados mas comunes no son recomendados al momento de cifrar contraseñas ya que puede generar vulnerabilidades por medio de Rainbow tables o fuerza bruta, para cifrar contraseña se recomienda utilizar la api <a href="http://php.net/manual/es/function.password-hash.php" target="_blank"> nativa de php</a>
          <h4>MD5</h4>
          <p>Es representada por un número de 32 dígitos en hexadecimal, un mínimo cambio dentro de la palabra nos dará cómo resultado un cifrado distinto.</p>

          <h4>SHA1</h4>
          <p>Se representa por una cadena de 40 dígitos en hexadecimal, es más seguro que MD5 pero bajo ataque de fuerza bruta deja de ser efectivo.</p>

          <h4>SALT</h4>
          <p>Es un hash creado por el programador quién agrega una cadena explícita a la formación de la contraseña, la cual de esta forma deja de pertenecer a los diccionarios comunes encontrador en la web, es la forma más recomendable
de cifrar contraseñas ya que sólo el creador del sistema es capaz de conocer como está compuesta la frase. </p>

          <h4>COMBINADO</h4>
          <p>Una combinación de los 3 tipos de cifrado más utilizados.</p>

          <h2 class="center">EJEMPLO </h2>
          <form class="row" action="cifrado.php" method="post" enctype="multipart/form-data">
            <div class="col m3">
              <p>
                <input class="with-gap" name="cifrado" type="radio" id="test1" value="API" checked="checked"/>
                <label for="test1">PASSWORD HASH (Recomendado)</label>
              </p>

                <p>
                  <input class="with-gap" name="cifrado" type="radio" id="test1" value="MD5" />
                  <label for="test1">MD5</label>
                </p>
                <p>
                  <input class="with-gap" name="cifrado" type="radio" id="test2" value="SHA1"/>
                  <label for="test2">SHA1</label>
                </p>
                <p>
                  <input class="with-gap" name="cifrado" type="radio" id="test3" value="SALT"/>
                  <label for="test3">SALT</label>
                </p>
                <p>
                  <input class="with-gap" name="cifrado" type="radio" id="test4" value="COMBINADO"/>
                  <label for="test4">COMBINADO</label>
                </p>
            </div>
            <div class="input-field col s9">
              <input id="text" type="text" name="cadena" class="validate">
              <label for="text">Escribe la cadena que quiere cifrar</label>
                <button class="waves-effect waves-light btn">Cifrar</button>
            </div>
          </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  </body>
</html>
