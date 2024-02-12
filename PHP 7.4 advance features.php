<?php

//Arrays
//Null coalescing assignment operator
//unpacking operator

class myClass{

    protected $arr = [];
    public function __construct()
    {
        $this->arr = [
            90 => 'Ian',
            '20' => 'fullstack dev',
            30 => 'njuguna@dev.com',
        ];

//        if (!isset($this->arr['email'])){
//            $this->arr['email'] = 'ian@mail.com';
//        }

//        $this->arr['email'] ??= 'ian@mail.com';
//
//        print_r($this->arr);

        $new_arr = [...$this->arr, '30' => 'no email', '90' => 'ansdj'];
        print_r($new_arr);

    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'Ok';
    }


}

echo new myClass();
