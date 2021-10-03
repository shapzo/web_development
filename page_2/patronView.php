<?php
    echo '<table class="table table-hover">
    <tr>
        <th>Titulo1</th>
        <th>Titulo2</th>
    </tr>';

    foreach ($valores as $valor) {
        # codigo... 
        echo "<tr>";
        echo "<td>".$valor['campo1']."</td>";
        echo "<td>".$valor['campo2']."</td>";
        echo "<td>".$valor['campoN']."</td>";
        echo "</tr>";

    }
    echo "</table>";
    //mysqli_close($conexion);
?>