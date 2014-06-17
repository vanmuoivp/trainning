<?php
	/*
	 * Bai 5
	 *	- Cho mang a gom 40 phan tu
	 *	- Cho mang b gom 8 phan tu
	 *	- Dem xem cac phan tu trong mang b xuat hien trong mang a bao nhieu lan.
	 *	- Xoa cac phan tu cua mang a ton tai trong mang b.
	*/
 	$n = 20;
 	$m = 4 ;
    $a = array();
    $b = array();
    for ($i=0; $i < $n ; $i++) { 
        $a[$i] = rand(1,10);
       
    }

    for ($i=0; $i <$m ; $i++) { 
    	 $b[$i] = rand(1,10);
    }

    echo '<pre>';
        print_r($a);
        print_r($b);
    echo '</pre>';
    
    for($i=0; $i < count($b); $i++)
    {
       	$x= $b[$i];
       	$dem = 0; 
    	for ($j = 0; $j < count($a); $j++){
        	if ($a[$j] == $x) $dem++;
    	}
    	echo "Phan tu ".$x." xuất hiện trong mang a :".$dem . 'lan.<br />';
	}

?>