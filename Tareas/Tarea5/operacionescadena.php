<?php
class OperacionesCadena
{
  public $cadena;

  public function __construct($cadena)
  {
    $this->cadena = $cadena;
  }
  public function invertir()
  {
    $cadenainvertida = '';
    $longitud = strlen($this->cadena);
    for ($x = $longitud - 1; $x >= 0; $x--) {
      $cadenainvertida .= $this->cadena[$x];
    }
    return $cadenainvertida;
  }

  public function mayuscula()
  {
    return strtoupper($this->cadena);
  }

  public function minuscula()
  {
    return strtolower($this->cadena);
  }
}
