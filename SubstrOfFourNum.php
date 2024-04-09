<?php
namespace htdocs;
class SubstrOfFourNum extends Sum
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


    public function SubOfFourNumers()
    {
        return $this->g - $this->a - $this->b - $this->c;
    }

    protected function Exponentiation()
    {
        parent::Exponentiation();
        return $this->g * $this->g;

    }
}

