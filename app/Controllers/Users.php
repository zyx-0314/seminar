<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): void
    {
        echo "welcome to codeigniter";
    }

    public function testing(): void
    {
        echo "test";
    }
    
    public function withParam($var1): void
    {
        echo "Value of parameter: " . $var1 . '<br>';
    }
    
    public function testingUlit($var1, $var2) : void {
        echo "Value 1: " . $var1 . ".Value 2:" . $var2;
    }
}
