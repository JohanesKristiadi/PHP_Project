<?php

require_once "../BusinessLogic/AddTodoList.php";
require_once "../Model/TodoList.php";

addTodoList ("Johanes");
addTodoList("Kristiadi");

var_dump($todoList);