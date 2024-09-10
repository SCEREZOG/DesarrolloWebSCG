<?php
class Operaciones
{
  public $a;
  public $b;
  public $c;

  public function __construct($a, $b, $c)
  {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }

  public function CalcularSuma()
  {
    return $this->a + $this->b + $this->c;
  }

  public function CalcularMayor()
  {
    return max($this->a, $this->b, $this->c);
  }

  public function MostrarCalculos()
  {
    $suma = $this->CalcularSuma();
    $mayor = $this->CalcularMayor();
?>
    <table border="1" style="border-collapse: collapse;">
      <tr>
        <th>Valor de A</th>
        <th>Valor de B</th>
        <th>Valor de C</th>
      </tr>
      <tr>
        <td><?php echo htmlspecialchars($this->a); ?></td>
        <td><?php echo htmlspecialchars($this->b); ?></td>
        <td><?php echo htmlspecialchars($this->c); ?></td>
      </tr>
      <tr>
        <th colspan="3">Resultados</th>
      </tr>
      <tr>
        <td colspan="3">Suma: <?php echo htmlspecialchars($suma); ?></td>
      </tr>
      <tr>
        <td colspan="3">Mayor: <?php echo htmlspecialchars($mayor); ?></td>
      </tr>
    </table>
<?php
  }
}
?>