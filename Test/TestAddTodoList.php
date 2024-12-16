<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar Laravel");
addTodoList('Belajar Database');

var_dump($todoList);

?>