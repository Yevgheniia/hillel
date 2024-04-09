<?php
namespace src;
abstract class Calc
{
    protected int $a = 0;
    protected int $b = 0;

    public function getA(): int
    {
        return $this->a;
    }

    public function setA(int $a): void
    {
        $this->a = $a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function setB(int $b): void
    {
        $this->b = $b;
    }

    abstract protected function Exponentiation();

}