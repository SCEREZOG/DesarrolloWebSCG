<?php

class Operaciones
{
  public $a;
  public $b;
  public $c;



  public function __construct($a, $b, $c)
  {
    // se inicializan las variables en el constructor
    // se asignan los valores de los parámetros a las variables de la clase
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }

  public function sumar()
  {
    return $this->a + $this->b + $this->c;
  }

  public function restar()
  {
    return $this->a - $this->b - $this->c;
  }

  public function multiplicar()
  {
    return $this->a * $this->b * $this->c;
  }

  public function dividir()
  {
    if ($this->b != 0 && $this->c != 0) {
      // se verifica que b y c sean diferentes de 0
      return $this->a / $this->b / $this->c;
    } else {
      return "Error: División por cero";
    }
  }
}
