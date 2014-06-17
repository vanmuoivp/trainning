<?php
	/*
	 * Bai 4
	 *	- Cho mang a gom 20 phan tu.
	 *	- In ra mang a tu phan tu dau tien den phan tu co gia tri = 5.
	 *	- In ra các phần tử chia hết cho 3 và thương là số chẵn.
	*/
	
	/*
	 * Code tao mang $n phan tu auto.
	*/
	$n = 20;
	$a = array();
	for ($i=0; $i < $n ; $i++) { 
		$a[$i] = rand(1,20);
	}

	echo '<pre>';
		print_r($a);
	echo '</pre>';
	
?>