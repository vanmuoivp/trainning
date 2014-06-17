<?php
   $a =array("2","4","6","7","8","9","4","5","10","20");
   sort($a);
   echo '<pre>';
   print_r($a);
   echo '</pre>';

   $X=18;
   $n=6;
   $i=$n-1;
   while ($i>0 && $a[$i]>$X  )
	{
		$a[$i+1]=$a[$i];
		$i--;
	}
   $a[$i+1]=$X;
	$n++;

   echo '<pre>';
   print_r($a);
   echo '</pre>';

?>