<?php

class ConnectDB {
    /* Propiedads relacionadas con las constantes de config.php y la BD*/
    private $host = HOST;
    private $user = USER;
    private $pass = PASS;
    private $dbname = DB;
    private $port = PORT;
    private $con;
    private $res;

    /*Método privado para conectar a la BD*/
    private function connectToDB(){
        /*Manera de acceder a una propiedad privada y otorgarle valor desde dentro de un método*/
        $this->con = mysqli_connect($this->host,
                                    $this->user,
                                    $this->pass,
                                    $this->dbname,
                                    $this->port);
    }

    private function disconnectFromDB(){
        $this->res = mysqli_close($this->con);
    }

    // Pública accesible fuera del objeto
    public function consultDB($sql){
        // 1.Conecta a la BD
        $this->connectToDB();
        // 2.Realiza la consulta
        $data = mysqli_query($this->con, $sql);
        // 3.Cierra la conexión
        $this->disconnectFromDB();
        // 4.Devuelve los datos de la consulta
        return $data;
    }
}

class Admin extends ConnectDB {
   
    public function addNewBook($data){

        $sql = "INSERT INTO `app_libros` (`titulo`, `autor`, `stock`, `precio`) VALUES ('".data['titulo']."',
                '".data['autor']."',
                '".data['stock']."',
                '".data['precio']."';";
            
        $res = $this->consultDB($sql);
        return $res;
    }
    
}

class Libro {
    private $id;
    private $titulo;
    private $autor;
    private $stock;
    private $precio;
}


?>