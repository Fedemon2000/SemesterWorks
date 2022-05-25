<?php
$usuario = htmlentities(addslashes($_POST['usu']));
$pass = htmlentities(addslashes($_POST['contra']));
//cifrar contrasena
$pass_cifrado = password_hash($pass, PASSWORD_DEFAULT);
//echo $usuario . "  " . $pass_cifrado;
$usuario = htmlentities(addslashes($_POST['usuario']));
$pass = htmlentities(addslashes($_POST['password']));
try {
    $conexion = new mysqli('localhost', 'root', '', 'test');
    if (mysqli_connect_errno()) {
        echo 'Error al conectar';
        exit();
    }
    $conexion->set_charset('utf8'); //para aceptar acentos
    $sql = "INSERT INTO usuarios_pass(usuario,password) VALUES(" .
        "'$usuario','$pass_cifrado')";
    $sql = "SELECT * FROM usuarios_pass WHERE usuario='$usuario'";
    $resultado = $conexion->query($sql);
    echo $resultado ? "Registro satisfactorio" : "Error: " .
        $conexion->error;
    if($resultado->num_rows>0){
        $existente = false;
        while($fila = $resultado->fetch_assoc()){
            // $fila=["id"=>1,"usuario"=>"juan","password"="klksldio98"]
            if(password_verify($pass,$fila["password"])){
                $existente =true;
            }
        }
        if($existente)
            echo"Sesion iniciada correctamente";//redirigir....
            echo"bienvenido (a); $usuario";
            //utilizar una sesion para guardar el usuario logeado
            session_start();
            $_SESSION['usuario']=$usuario
        else
            //echo"Password errornea";//redirigir a login.html
         header("location:login.html");
    }else{
        //echo "Error al iniciar sesion (usuario no existente)";
        header("location;login.html");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
  10  
php/login/login.html
@@ -9,22 +9,22 @@
</head>

<body>
    <h1>REGISTRO DE USUARIO</h1>
    <form action="insertar.php" method="post">
    <h1>INICIAR SESIÓN</h1>
    <form action="comprueba_login.php" method="post">
        <table>
            <tr>
                <td>Usuario:</td>
                <td>
                    <input type="text" name="usu" />
                    <input type="text" name="usuario" />
                </td>
            </tr>
            <tr>
                <td>Contrasena:</td>
                <td><input type="text" name="contra" /></td>
                <td><input type="text" name="password" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Vamos" />
                    <input type="submit" value="Iniciar" />
                </td>
            </tr>
        </table>
