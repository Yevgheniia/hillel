<?php
class Calc
{
     protected int $a=0;
    protected int $b=0;

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

     public function Exponentiation()
     {

     }

}




class Sum extends Calc
{
    protected int $c=0;

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
        return $this->c+$this->a;
    }
}
class Subtraction extends Calc
{
    protected int $d=0;

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
        return $this->d-$this->b;
    }
}
final class Multi extends Calc
{
    private int $e=0;

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
        return $this->e+$this->a;
    }
}
class SumOfThreeNum extends Sum
{
    private int $f=0;

    public function getF(): int
    {
        return $this->f;
    }

    public function setF(int $f): void
    {
        $this->f = $f;
    }


    public function SumOfThreeNumers()
    {
        return $this->f+$this->a+$this->b;
    }
    public function Exponentiation()
    {
        parent::Exponentiation();
        return $this->f*$this->f;
    }
}
class SumOfFourNum extends Sum
{
    private int $g=0;

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
        return $this->c+$this->a+$this->b+$this->g;
    }
    public function Exponentiation()
    {
        parent::Exponentiation();
        return $this->g*$this->g;
    }
}
class SubstrOfThreeNum extends Subtraction
{
    private int $f=0;

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
        return $this->f-$this->a-$this->b;
    }
    public function Exponentiation()
    {
        parent::Exponentiation();
        return $this->f*$this->f;
    }
}
class SubstrOfFourNum extends Sum
{
    private int $g=0;

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
        return $this->g-$this->a-$this->b-$this->c;
    }
    public function Exponentiation()
    {
        parent::Exponentiation();
        return $this->g*$this->g;

    }
}

