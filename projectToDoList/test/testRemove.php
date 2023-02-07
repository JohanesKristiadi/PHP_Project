<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

AddTodoList("Johanes");
AddTodoList("Budi");
AddTodoList("Vannesa");
AddTodoList("Farhan");

showTodoList();


RemoveTodoList(2);
showTodoList();