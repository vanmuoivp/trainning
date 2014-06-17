<?php
//em Đại
$a = array(1,2,3,4,23,6,45,345,4,6,10,19,18,34,30,29,48,68,432,0);
echo "mang vua nhap gom cac phan tu: " . "<br>";	
for ($i=0;$i<count($a);$i++)
	echo $a[$i] . "<br>";//hien thi day so vua nhap	
//hien thi mang co ca chi so
	print_r ($a);
	echo "<br>";
//tim gia tri max
$max = $a[5];
	for ($i=0;$i<count($a);$i++)
		if ($max <= $a[$i])
		{
			$max = $a[$i];
		} else 
			{
				$max = $max;
			}
	print_r ("gia tri max cua mang la: a[$i] = $max");
	echo "<br>";
//tim gia tri min
$min = $a[5];
    for($i=0;$i<count($a); $i++)
        if( $a[$i] <= $min)
		{
			$min = $a[$i];
		} else 
			{
				$min = $min;
			}
		print_r ("gia tri min cua mang la: 	a[$i] = $min");
?>










