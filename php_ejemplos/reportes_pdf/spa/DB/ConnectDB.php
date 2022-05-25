<?php
include('../../datos.php');

class ConnectDB{
private $host = HOST;
private $user = USER;
private $pw = PASSWORD;
private $db = DB;
private $conn;
public function FunctionName(Type $var = null)
{
    $this->conn = new mysqli($this->host,$this->user,$this->pw,$this->db);
    if($this->conn==false){
        echo'ERROR al conectarse'
        $this->conn->connect_error;
    }
    //soporte de acentos
    $this->conn->set_charset('utf8');
}
function close(){
    if($this->conn) $this->conn->close();

}
public function insert($sql){
    $resultado = $this->conn->query($sql);
    if(!$resiltado) echo 'ERROR'.$this->conn->error;
    return resultado
}
public function update($sql){
    $resultado = $this->conn->query($sql);
    if(!$resiltado) echo 'ERROR'.$this->conn->error;
    return resultado
}
public function delete($sql){
    $resultado = $this->conn->query($sql);
    if(!$resiltado) echo 'ERROR'.$this->conn->error;
    return resultado
}
public function select($sql){
    $resultado = $this->conn->query($sql);
    if($resultado){
        $salida = $resultado->fetch_all(MYSQLI_ASSOC);
        return $salida;
    }else{
        echo"ERROR".$this->conn->error;
    }
}
}
?>