<?php

abstract class Figure
{
    protected $a;
    public $p;
    public $name;

    public  function __construct($a, $p, $name)
    {
        $this->a = $a;
        $this->p = $p;
        $this->name = $name;
    }
    abstract public function V();

    public function mass()
    {
        return $this->V() * $this->p;
    }
}

class Cube extends Figure
{
   public function V()
   {
       return $this->a * $this->a * $this->a;
   }
}

class Ball extends Figure
{
    public function V()
    {
        return (4 * 3.14 * $this->a * $this->a * $this->a) / 3;
    }
}

class Pyramid extends Figure
{
    private $h;
    private $h_o;
    public $name;

    function __construct($a, $h, $h_o, $p, $name)
    {
        $this->h = $h;
        $this->h_o = $h_o;
        parent::__construct($a, $p, $name);
    }

    public function V()
    {
        return ($this->a * $this->h * $this->h_o) / 6;
    }
}

class Parallelepiped extends Figure
{
    private $b;
    private $c;

    function __construct($a, $b, $c, $p, $name)
{
    $this->b = $b;
    $this->c = $c;
    parent::__construct($a, $p, $name);
}
    public function V()
    {
        return $this->a * $this->b * $this->c;
    }
}

$cube = new Cube(4, 5, "Куб");
$ball = new Ball(3, 5, "Куля");
$pyramid  = new Pyramid (3, 5, 7, 5, "Піраміда");
$parallelepiped = new Parallelepiped(4, 5, 6, 5, "Паралелипіпит");

$c = $cube->name . ": "
   . "Об’єм = ". $cube->V() . "; "
   . "Маса = ". $cube->mass() . "; "
   . "Густина = " . $cube->p . "\n";

$b = $ball->name . ": "
   . "Об’єм = ".$ball->V() . "; "
   . "Маса = ". $ball->mass() . "; "
   . "Густина = " . $ball->p . "\n";

$p = $pyramid->name . ": "
   . "Об’єм = ".$pyramid->V() . "; "
   . "Маса = ".  $pyramid->mass() . "; "
   . "Густина = ". $pyramid->p . "\n";

$a = $parallelepiped->name . ": "
    . "Об’єм = ".$parallelepiped->V() . "; "
    . "Маса = ".  $parallelepiped->mass() ."; "
    . "Густина = ". $parallelepiped->p. "\n";

echo $c, $b, $p, $a;