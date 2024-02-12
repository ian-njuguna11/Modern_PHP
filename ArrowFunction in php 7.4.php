<?php


class myClass
{

    public function __construct()
    {
        $variable = 10;

//        php 7.4 and <
//        $my_func =  array_map(function ($value) use ($variable){
//            return  $variable * $value;
//        },[1,2,3,4,5]);

        $my_func = array_map(fn($value) => $variable * $value, [1,2,3,4,5] );

        print_r($my_func);
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'myClass';
    }

}

echo new (myClass::class);
