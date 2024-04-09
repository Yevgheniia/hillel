<?php
namespace src;
class Sum extends Calc
{
    protected int $c = 0;

    public function getC(): int
    {
        return $this->c;
    }

    public function setC(int $c): void
    {
        $this->c = $c;
    }

    public function Summa()
    {
        return $this->c + $this->a;
    }

    protected function Exponentiation()
    {

    }
}