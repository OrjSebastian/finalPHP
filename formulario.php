<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
  </head>
  <body>
    <h1>Formulario de Registro</h1>
    <form action="procesar_formulario.php" method="post">
      <fieldset>
        <legend>Información Personal</legend>
        <div>
          <label for="id">ID:</label>
          <input type="text" id="id" name="id" required>
        </div>
        <div>
          <label for="nombres">Nombres:</label>
          <input type="text" id="nombres" name="nombres" required>
        </div>
        <div>
          <label for="apellidos">Apellidos:</label>
          <input type="text" id="apellidos" name="apellidos" required>
        </div>
        <div>
          <label for="edad">Edad:</label>
          <input type="number" id="edad" name="edad" required>
        </div>
        <div>
          <label for="correo">Correo:</label>
          <input type="email" id="correo" name="correo" required>
        </div>
      </fieldset>
      <button type="submit">Registrarse</button>
    </form>
  </body>
</html>
