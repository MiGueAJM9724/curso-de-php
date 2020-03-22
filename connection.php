<?php
class Connetion {
  private $drive = 'mysql';
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $dbName = 'prueba';
  private $charset = 'utf8';

  protected function conexion(){
    try {
      $pdo = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbName};charset={$this->charset}",$this->user,$this->pass);
      $pdo->setAttribute(PDO::ATTR_ERMODE, PDO::ERMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      echo $e -> getMessage();
    }
  }
}
?>
