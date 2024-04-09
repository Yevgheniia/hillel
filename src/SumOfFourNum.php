<?php
namespace src;
class SumOfFourNum extends Sum
{
    private int $g = 0;

    public function getG(): int
    {
        return $this->g;
    }

    public function setG(int $g): void
    {
        $this->g = $g;
    }


    public function SumOfFourNumers()
    {
        return $this->c + $this->a + $this->b + $this->g;
    }

    protected function Exponentiation()
    {
        parent::Exponentiation();
        return $this->g * $this->g;
    }
}
