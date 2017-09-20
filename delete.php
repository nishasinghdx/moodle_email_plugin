<?php
require_once(dirname(__FILE__) . '/../../config.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    print_r($id);
  $table = 'registration';
  $del=$DB->delete_records($table, array('id'=>$id));
  if($del){
    echo "record deleted";
    header('Location: view.php');
  }
  else{
    echo "record not deleted";
  }
}
?>
