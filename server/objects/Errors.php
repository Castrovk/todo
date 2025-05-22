<?php
enum Errors: string 
{
    case Empty = 'Task cannot be empty!';
    case Duplicated= 'Task already exists!';
    case NtorFound = 'Task not found!';
}

function setError(Errors $error)
{
    setcookie("error", $error->value, time() + 5, '/');
}