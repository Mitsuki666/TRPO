<?php

class A
{
}

class B extends A
{
  public function __construct($a,$b)
    {
    $this->a=$a;
    $this->b=$b;	
    }  
    protected $a;
	protected $b; 
}
$a1=new A();
$a2=new A();
$a3=new A();
$b4=new B($a1,$a2);
$b5=new B($a3,$b4);
?>  