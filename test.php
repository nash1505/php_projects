<?php
require_once("conn.php");



$stmt_select=$conn->prepare("SELECT * FROM np");
  $executed=$stmt_select->execute(); 
  $row_select=$stmt_select->fetchAll(PDO::FETCH_ASSOC);
  
  //print_r($row_select);exit;

  $stmt_selectB=$conn->prepare("SELECT * FROM npb");
  $executedB=$stmt_selectB->execute(); 
  $row_selectB=$stmt_selectB->fetchAll(PDO::FETCH_ASSOC);


  $stmt_selecte=$conn->prepare("SELECT * FROM npe");
  $executede=$stmt_selecte->execute(); 
  $row_selecte=$stmt_selecte->fetchAll(PDO::FETCH_ASSOC);

  $stmt_selectt=$conn->prepare("SELECT * FROM npt");
  $executedt=$stmt_selectt->execute(); 
  $row_selectt=$stmt_selectt->fetchAll(PDO::FETCH_ASSOC);




  
   # code...
  
  $array = array_column($row_select, 'head');



  echo $array[-1];
?>
