<?php


class myClass
{

    protected String $string1;
    protected int $string2;

    public function __toString()
    {
            //  Expection in to string methond
             if (true) throw  new Exception();
             return $this->string1 = "Something";
             return $this->string2 = "7";
    }

}

echo new myClass();
