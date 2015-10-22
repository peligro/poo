<?php
class Calcular
{
    private $valor1;
    private $valor2;
    
    public function __construct()
    {
        $this->valor1=$_POST["valor1"];
        $this->valor2=$_POST["valor2"];
    }
    
    public function resultado()
    {
        switch($_POST["operacion"])
        {
            case '1':
                return $this->valor1+$this->valor2;
            break;
            case '2':
                return $this->valor1-$this->valor2;
            break;
            case '3':
                return $this->valor1*$this->valor2;
            break;
            case '4':
                return $this->valor1+$this->valor2;
            break;
        }
    }
}
