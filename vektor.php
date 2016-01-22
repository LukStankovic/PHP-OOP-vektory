<?php
//echo "<p>class</p>";
class vektor
{
    private $prvni;
    private $druhy;
    
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
        $result='<div class="alert alert-success">Úspěšně vloženo</div>';
    }
    public function vypis()
    {
        echo "<p>[$this->prvni][$this->druhy]</p>";
    }
    public function vzdalenost($a,$b)
    {
        
    }
}
?>