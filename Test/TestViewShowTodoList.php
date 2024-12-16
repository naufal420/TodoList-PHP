<?php 

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("naufal");
addTodoList("bahaqi");
addTodoList("Bandung");

viewShowTodoList();

?>