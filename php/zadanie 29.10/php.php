<?php
require_once './function.php';
if (!isset($_POST['x']) || !isset($_POST['y']))
{
  echo <<< FORM
    <h3>Kalkulator</h3>
        <form method="post">
          <input type="number" name="x" required>
          <select name="option">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
          </select>
          <input type="number" name="y" required>
          <input type="submit" value="=">
          <input type="number" disabled>
        </form>
  FORM;
}

else
{
  $x=$_POST['x'];
  $y=$_POST['y'];
  $znak=$_POST['option'];
  switch($znak)
  {
    case '+':
    $wynik=suma($x,$y);
    break;
    case '-':
    $wynik=roznica($x,$y);
    break;
    case '*':
    $wynik=iloczyn($x,$y);
    break;
    case '/':
    $wynik=iloraz($x,$y);
    break;
  }
  echo <<< FORM
    <h3>Kalkulator</h3>
    <form method="post">
      <input type="number" name="x" value=$x required>
      <select name="option">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="number" name="y" value=$y required>
      <input type="submit" value="=">
      <input type="text" disabled value=$wynik>
    </form>
  FORM;
}









 ?>
