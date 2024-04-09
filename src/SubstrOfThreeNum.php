<?php
namespace src;
class SubstrOfThreeNum extends Subtraction
{
    private int $f = 0;

    public function getF(): int
    {
        return $this->f;
    }

    public function setF(int $f): void
    {
        $this->f = $f;
    }


    public function SubOfThreeNumers()
    {
        return $this->f - $this->a - $this->b;
    }

    protected function Exponentiation()
    {
        parent::Exponentiation();
        return $this->f * $this->f;
    }
}
