<?php 

/**
 * Menghapus Todo di list
 */

function removeTodoList(int $number):bool {
  global $todoList;

  if($number > sizeof($todoList)){
    return false;
  }

  for($i = $number; $i < sizeof($todoList); $i++){
    $todoList[$i] = $todoList[$i + 1];
    echo $todoList[$i] . PHP_EOL; 
  }

  unset($todoList[sizeof($todoList)]);

  return true;
}

?>