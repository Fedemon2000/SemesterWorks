<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();//reaanudar sesion
    if(isset($_SESSION['usuario'])==false){
    header(' location:login.html');    
    }
    ?>
    
    <h1>bienvenido usuarios registreados</h1>
    <?php echo $_SESSION['usuario'; ]?>

<p><a href="cierre.php">Cerrar sesion</a></p>
<p>esta informacion es solo para usuarios registrados</p>
<table>
    <TR>   
        <td coldspan="3"> zona de usuaurios registrados</td>
    </TR>
    <tr>
        <td> <a href="registados2.php"> pagina 1</a></td>
        <td> <a href="registados3.php"> pagina 2</a></td>
        <td> <a href="registados4.php"> pagina 3</a></td>
    </tr>
    
</table>
</body>
</html>