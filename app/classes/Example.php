<?php

namespace App\classes;

use mysql_xdevapi\CrudOperationSortable;

class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = [];

    public function index()
    {
//        $this->firstName = 'Rahim';
//        $this->lastName = 'Khan';
//        echo "Full Name is "."$this->firstName"." "."$this->lastName";

//        *Arithmetic operator
//            *Binary operator (*,-,+,/,%)
//            *Unary operator (++,--,(-))
//        *Assignment Operator  =,=+,-=,*=,/=,%=,.=
//        *Conditional Operatpor (>,>=,<,<=,==,!=.===.!==)
//        *Logical Operator   (&&,//,!)

//         $this->x = 10;
//         $this->y = 20;

//         echo $this->x++;
//         echo '<br/>';
//         echo $this->x;

//            echo $this->x += $this->y; //10
//            echo '<br/>';
//            echo $this->x += $this->y; //200
//            echo '<br/>';
//            echo $this->x -= $this->y; //10
//            echo '<br/>';
//            echo $this->x *= $this->y; //10
//            echo '<br/>';
//            echo $this->x /= $this->y; //200
//            echo '<br/>';
//            echo $this->x %= $this->y; //10
//            echo '<br/>';
//            echo $this->x .= $this->y; //1020
//            echo '<br/>';

//        $this->x = 100;
//        if($this->x > 20)
//        {
//            echo $this->x;
//        }
//        else
//        {
//            echo 'Hello World';
//        }
//
//        $this->x = 100;
//        if ($this->x > 200)
//        {
//            echo '200';
//        }
//        elseif ($this->x<200)
//        {
//            echo $this->x;
//        }
// $this->x = 100;
// switch ($this->x)
// {
//     case 10;
//        echo 'World';
//        break;
//     case 20;
//         echo 'Hello Bangladesh';
//         break;
//     case 30;
//         echo 'Hello Dhaka';
//         break;
//     default;
//        echo 'Hello Bitm';
// }

// for ($this->y = 10; $this->y <= 15; $this->y++)
// {
//     echo 'Hello World<br/>';
// }
//        for ($this->y = 90; $this->y >= 76; $this->y++)
//        {
//             echo $this->y;
//        }

//        $this->x = 100;
//        while ($this->x <110){
//            echo 'Hello World <br/>';
//            $this->x++;
//        }
//
//        $this->x = 100;
//        do {
//            echo 'Hello World <br/>';
//            $this->x++;
//        }while($this->x < 110);









//        $this->y = 20;
//        $this->z = 30;



//        echo ($this->x > $this->y) || ($this->y > $this->z) ;
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z) ;
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z) ;
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z) ;
//        echo '<br/>....<br/>';



//         echo $this->x + $this->y;
//         echo '<br>';
//         echo $this->x - $this->y;
//         echo '<br>';
//         echo $this->x * $this->y;
//         echo '<br>';
//         echo $this->x / $this->y;
//         echo '<br>';
//         echo $this->x % $this->y;

//        =====statement======
//        single line
//        conditional
//            if
//            if else
//               if else if
//               switch
//        repeated
//            for
//            do while
//            foreach

//        data type
//        integer,boolean,double,string

//        Array
//        special variable
//        can store multiple value


        $this->data = [10, 20, 30, 'BITM', 100,200, true];
//        echo $this->data[1];
        foreach ($this->data as $item){
            echo $item;
        }





    }
}