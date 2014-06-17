<?php
  /*
   * Bai 4
   *  - Cho mang a gom 20 phan tu.*/
    $n = 20;
    $a = array();
    for ($i=0; $i < $n ; $i++) { 
        $a[$i] = rand(1,20);
    }

    echo '<pre>';
        print_r($a);
    echo '</pre>';

    for ($i=0; $i <$n ; $i++) { 
    	if ($a[$i]!=5) {
        	echo '<pre>';
        		print_r($a[$i]);
    		echo '</pre>';
      	} else {
      		break;
      	}
    }

    for ($i=0; $i <$n ; $i++) { 
      	$kt=$a[$i]/3;
      	if (($a[$i]%3==0 and $kt%2==0)) {
        	echo $a[$i]."<br>";
        }
    }
       
    /* - In ra mang a tu phan tu dau tien den phan tu co gia tri = 5.
     *  - In ra các phần tử chia hết cho 3 và thương là số chẵn.
  	*/
  
  
?>