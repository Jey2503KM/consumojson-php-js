<?php
$Json=file_get_contents('datos.json');
$data=json_decode($Json,true);

$perros=$data["perros"];
?>
<html>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Raza</th>
        </tr>
        <?php
        foreach ($perros as $key ) {
       $nombre=$key["nombre"];
       $edad=$key["edad"];
       $raza=$key["raza"];
       ?>
        <tr>
            <td><?php echo $nombre?></td>
            <td><?php echo $edad?></td>
            <td><?php echo $raza?></td>
        </tr>
        <?php }?>
    </table>

    <a href="./js.php"><button> Ahora js </button></a>
</html>