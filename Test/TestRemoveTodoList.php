<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Naufal");
addTodoList("Eko");
addTodoList("Baihaqi");
addTodoList("jajan");

showTodoList();

removeTodoList(2);

showTodoList();

?>