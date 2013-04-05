<html>
<head><title>Prime Numbers</title></head><body>
<?php
echo"<form action='' method='post'>Enter number:<input type='text' name='number' value='{$_POST['number']}'>
<input type='submit' value='Submit'></form>";
if(isset($_POST['number'])){
$num=$_POST['number'];$sqrt=(int)(sqrt($num));
//set all values in primes array to true and remove all even numbers except 2 to 0
for($i=0;$i<=$num;$i++)
	{
	$primes[$i] = !($i%2 == 0 || $i == 0 || $i == 1);
	}
if($num > 1)
  $primes[2]=true;
for($i=3;$i<=$sqrt;$i=$i+2)
	{
	if($primes[$i])
		{
		for($j=2*$i;$j<=$num;$j+=$i)
			{
			$primes[$j]=false;
			}
		}
	}
$cnt=array_sum($primes);
echo'<br>Found '.$cnt.' primes';
}
?>
</body>
</html>