<?php
Class A {
    public function lin ($a,$b){

        if($a == 0){
            return null;
        }
        return $this->x=(-$b)/$a;
    }
    protected $x;
}

Class B extends A{
    protected function discrim ($ab,$bb,$cb){

        return $bb**2-4*$ab*$cb;

    }
    public function qv($a,$b,$c){
       if ($a == 0){
           return $this->lin($b,$c);
       }
       $DIS=$this->discrim($a,$b,$c);

       if ($DIS>0){
           return $this->x=array(
               ((-$b)+$DIS)/2*$a,
               ((-$b)-$DIS)/2*$a
           );
       }

       if ($DIS == 0){
           return $this->x=(-$b)/2*$a;
       }

       return $this->x=null;

    }

}
$q = new A();
$w = new B();
$q->lin(3,4);
$w->qv(5,-13,20);
?>


