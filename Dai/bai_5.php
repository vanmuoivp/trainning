<?php
	/*
	 * Bai 5
	 *	- Cho mang a gom 40 phan tu
	 *	- Cho mang b gom 8 phan tu
	 *	- Dem xem cac phan tu trong mang b xuat hien trong mang a bao nhieu lan.
	 *	- Xoa cac phan tu cua mang a ton tai trong mang b.
	*/
	$n = 40;
	$m = 8;
	$a = array();
	$b = array();
	echo 'mang a: '.'<br/>';
	for ($i=0;$i<$n;$i++){
		$a[$i] = rand(1,40);
	}
	echo '<pre>';
		print_r ($a);
	echo '</pre>';

	echo 'mang b: '.'<br/>';
	for ($j=0;$j<$m;$j++){
		$b[$j] = rand(1,8);
	}
	echo '<pre>';
		print_r ($b);
	echo '</pre>';

	for ($j=0;$j<$m;$j++){
		$dem = 0;
		for ($i=0;$i<$n;$i++){
			if ($b[$j] = $a[$i]){
				$dem = $dem ++;
			}
		}
		echo 'phan tu' . $b[$j] . 'xuat hien' . $dem . 'lan trong a'.'<br/>';
	}
?>