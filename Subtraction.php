<?php
namespace htdocs;
class Subtraction extends Calc
{
    protected int $d = 0;

    public function getD(): int
    {
        return $this->d;
    }

    public function setD(int $d): void
    {
        $this->d = $d;
    }


    public function Subtraction()
    {
        return $this->d - $this->b;
    }

    protected function Exponentiation()
    {
        // TODO: Implement Exponentiation() method.
    }
}