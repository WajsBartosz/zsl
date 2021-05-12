var x=parseInt(prompt("Podaj silnie"));
var silnia=1;
if(x<=0)
{
  document.write("Nie ma silni z podanej liczby")
}
else{
  for (var i=1;i<=x;i++)
  silnia*=i;

}

document.write(silnia);
