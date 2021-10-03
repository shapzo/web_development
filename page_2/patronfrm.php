<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('includes/cabecera.php'); ?>
</head>
<body>
  <?php
     $activa='patron.php">Patron<span class="sr-only">(current)</span>';
     global $activa;
     require('includes/menu.php'); ?>
    <h1>PATRON FORMULARIO</h1>
    <form action="" method="post">
        <div class="form-group">
            <label class="form-label" for="txt1">Etiqueta 1</label>
            <input  type="text" class="form-control" name="txt1" id="txt1">
    </div>
        <div class="form-group">
            <label class="form-label" for="txt2">Etiqueta 2</label>
            <input  type="text" class="form-control" name="txt2" id="txt2">
         </div>
         <form>
  <div class="form-group">
    <label for="emil1">Email</label>
    <input type="email" class="form-control" nombre="email1" id="email1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="seleccion1">Selecci&oacute;n</label>
    <select class="form-control" id="seleccion1" name="seleccion1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
  </div>
      <div class="form-group">
            <label for="select2">Selecci&oacute;n m&uacute;ltiple</label>
            <select multiple class="form-control" id="select2" nombre="select2">
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
    </select>
  </div>
  <div class="form-group">
        <label for="textarea1">Example textarea</label>
        <textarea class="form-control" id="textarea1" name="textarea1" rows="3"></textarea>
  </div>
</form>
         <input type="hidden" name="tipoMovimiento" value="">
         <input class="btn btn-primary" type="submit" name="Guardar" value="Guardar">
         <input class="btn btn-secondary" type="reset" name="Limpiar" value="Limpiar">
         <!--button type="submit" class="btn btn-primary">Submit</button>
         <button type="submit" class="btn btn-secondary">Submit</button>-->

  </body>
</html>