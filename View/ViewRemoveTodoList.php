<?php 

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoLis(){
    echo "Menghapus Todo" . PHP_EOL;
    
    $pilihan = input("Nomor (x untuk batalkan) ");

    if($pilihan == "x"){
      echo "Batal Menghapus Todo" . PHP_EOL;
    }else{
      $success = removeTodoList($pilihan);

      if($success){
        echo "Success Menghapus Todo $pilihan" . PHP_EOL;
      }else{
        echo "Gagal Menghapus Todo $pilihan" . PHP_EOL;
      }
    }
}

?>