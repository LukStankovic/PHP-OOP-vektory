<?php
//echo "<p>class</p>";
class point
{
    public $prvni;
    public $druhy;
    
    public function __construct($a,$b)
    {
        $this->prvni=$a;
        $this->druhy=$b;
    }
    
    public function prvni($a)
    {
        $this->prvni=$a;
        echo $this->prvni;
    }
    public function druhy($a)
    {
        $this->druhy=$a;
        echo $this->druhy;
    }
    public function vypis()
    {
        return " [$this->prvni][$this->druhy] ";
    }
    public function vzdalenost($b)
    {
    
        $vysledek=new point(0,0);
        
        $vysledek->prvni=($b->prvni-$this->prvni)*($b->prvni-$this->prvni);
        $vysledek->druhy=($b->druhy-$this->druhy)*($b->druhy-$this->druhy);

    return sqrt($vysledek->prvni+$vysledek->druhy);
    }
    public function zmena($x,$y)
    {
        $this->prvni+=$x;
        $this->druhy+=$y;
    }
}
?>