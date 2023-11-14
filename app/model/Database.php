<?php

<includes_once_DIR_. "/../../config/config.php";

class Database
{
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $conn;

    public function _construct ()
    $this->host = BD_HOST;
    $this->user = BD_USER;
    $this->password = BD_PASS;
    $this->dbname = BD_NAME;

    //METODO PARA CONEXÃO  COM BD.
    public function connect()
    {
        this->conn = new mysql(
            $this->host,
            $this->user,
            $this->password,
            $this->dbname,
        );

        if ($this->conn->connect_error) {
            die("falha na conexão!" . $this->conn->connect_error);
        }

        return $this->conn;
    }

    //METODO PRA FECHAR CONEXÃO COM BD
    public function close()
    {
        if ($this->conn)
        {
            $this->conn->close();
        }
    }

}
?>