<?php
require_once 'connection.php';
abstract class Crud extends Connection{ //
  private $table;
  private $pdo;
  public function __construct($table){
    $this->table = $table;
    $this->pdo = parent::conexion(); //se utiliza parent para acceder a la conexion ya que usamos una funcion protegida
    /* Una sentencia preparada, se usa para ejecutar una sentencia repetidamente con gran eficiencia
    *Consisten en dos etapasPreparaciòn y Ejecuciònote
     Preparcion:envian una plantilla al servidor y realiza una revision de sintaxis
     Ejecucion:
     Evitan intyeccion de codigo*/
  }
  public function getAll($id){
    try{
    $stm = $this->pdo->prepare("Select * From  $this->table Where id = ?");
    $stm->execute(array($id));
    return $stm->fetchAll(PDO::FETCH_OBJ);
  }catch(PDOException $e){
    echo $e->getMessage();
  }
  }
  public function delete($id){
    try{
    $stm = $this->pdo->prepare("Delete * From  $this->table Where id = ?");
    $stm->execute(array($id));
  //  return $stm->fetchAll(PDO::FETCH_OBJ);
  }catch(PDOException $e){
    echo $e->getMessage();
  }
  }
  abstract function create();
  abstract function update();
}
 ?>
