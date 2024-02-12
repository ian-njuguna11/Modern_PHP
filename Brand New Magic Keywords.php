<?php

//Arrays
//Null coalescing assignment operator
//unpacking operator

class myClass{

    protected $customVariable = [];
    public function __serialize()
    {
        return [
            'custom-element' => $this->customVariable
        ];
    }

    public function __unserialize($arr)
    {
        $this->customVariable = $arr['custom-element'];
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'Ok';
    }


}

echo  serialize(new myClass());
echo  '<br/>';
print_r(unserialize(serialize(new myClass())));
