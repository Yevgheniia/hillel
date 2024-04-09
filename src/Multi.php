<?php
namespace src;

final class Multi extends Calc
{
    private int $e = 0;

    public function getE(): int
    {
        return $this->e;
    }

    public function setE(int $e): void
    {
        $this->e = $e;
    }


    public function Multiplic()
    {
        return $this->e + $this->a;
    }

    protected function Exponentiation()
    {
        // TODO: Implement Exponentiation() method.
    }
}
