<?php

require "functions.php";

$content = [
    'title' => "Here's the title",
    'due' => "today",
    "assigned to" => "me",
    "completed" => false
];

function checkAge($age)
{
    echo $age > 20 ? "Come in" : "nope";
}

checkAge(20);
checkAge(21);

$animals = ["dog", "cat", "mouse"];

dd($animals);

require "index.view.php";