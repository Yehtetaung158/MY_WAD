<?php

function views(string $file): bool
{
    require_once "./views/".$file.".php";
    return true;
};
