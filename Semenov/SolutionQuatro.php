<?php

namespace Semenov;

use core\EquationInterface;


Class SolutionQuatro extends SolutionLine implements EquationInterface
{
    protected function discrim($ab, $bb, $cb)
    {

        return $bb ** 2 - 4 * $ab * $cb;

    }

    public function solve($a, $b, $c)
    {
        if ($a == 0) {
            return [$this->lin($b, $c)];
        }
        if ($a < 0 xor $a > 0) {
            $DIS = $this->discrim($a, $b, $c);

            if ($DIS > 0) {
                return $this->x = array(
                    ((-$b) + $DIS) / 2 * $a,
                    ((-$b) - $DIS) / 2 * $a
                );
            }

            if ($DIS === 0) {
                return $this->x = array((-$b) / 2 * $a);
            }


        }
        return $this->x = null;
    }

}

