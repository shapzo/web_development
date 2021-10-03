<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
  <?php require('includes/cabecera.php'); ?>
  </head>
  <body>
  <?php
     $activa='patron.php">Patron<span class="sr-only">(current)</span>';
     global $activa;
     require('includes/menu.php'); 
     ?>
     <h1>Nuevo Men&uacute;</h1>
     <form action="menuController.php" method="post">
        <div class"form-group">
            <label class="form-label" for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
        </div>   
        <div class="form-group">
             <label class="form-label" for="titulo">T&iacute;tulo</label>
             <input type="text" class="form-control" name="titulo" id="titulo">
        </div>
        
        <input type="hidden" name="tipoMovimiento" value="">
        <input class="btn btn-primary" type="submit" name="Guardar" value="Guardar">
        <input class="btn btn-secondary" type="reset" name="Limpiar" value="Limpiar">
         <!--button type="submit" class="btn btn-primary">Submit</button>
         <button type="submit" class="btn btn-secondary">Submit</button>-->
    </form>
  </body>
  </html>
