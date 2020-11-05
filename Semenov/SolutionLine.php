<?php
namespace Semenov;

Class SolutionLine {
    public function lin ($a,$b){

        if($a === 0){
            return null;
        }
        return $this->x=-($a/$b);
    }
    protected $x;
}