<?php
class Utiles
{
  private $cadena;

  function __construct($cadena)
  {
    $this->cadena = $cadena;
  }

  public function aumentarguines($n)
  {
    $aux = "";
    for ($i = 0; $i < strlen($this->cadena); $i++) {

      $aux .= $this->cadena[$i];

      if ($i < strlen($this->cadena) - 1) {
        $aux .= str_repeat("-", $n);
      }
    }
    return $aux;
  }
}
