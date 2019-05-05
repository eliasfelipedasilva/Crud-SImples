<?php

class conexao
{



  public function connect() // estabelece conexao
  {
    try {
      $con = new PDO("mysql:host=localhost;dbname=crud","root","");
      $this->con = true;
      return $con;
    }
    catch (PDOException $e)
    {
      echo "Erro!: ".$e->getMessage(). "\n";
      die();
      return false;
    }
  }



}

?>
