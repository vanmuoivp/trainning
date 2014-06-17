<?php
//em Đại
// Em chu y viet code theo chuan. So sanh file a code nhe. A gui cho e file tham khao roi nhung chac e k doc.
// Minh chuan code ngay tu dau nhin cho do roi mat.


	$a = array(1,2,3,4,23,6,45,345,4,6,10,19,18,34,30,29,48,68,432,0);

	echo "mang vua nhap gom cac phan tu: " . "<br>";

	/*
	 * hien thi day so vua nhap	
	*/
	for ($i=0;$i<count($a);$i++){
		echo $a[$i] . "<br>";
	}
	
	/*
	 * 
	 * hien thi mang co ca chi so
	*/
	print_r ($a);

	echo "<br>";

	/*
	 * 
	 * tim gia tri max
	*/
	
	$max = $a[5]; // Tai sao max lai bang $a[5]? Mang chi co 3 phan tu thi sao :D

	for ($i=0;$i<count($a);$i++){
		if ($max <= $a[$i])
		{
			$max = $a[$i];
		} else {
			$max = $max;
		}
	}
	
	//print_r ("gia tri max cua mang la: a[$i] = $max");  A sua lai
	echo "Gia tri max cua mang la: ".$max;

	echo "<br>";

	/*
	 * 
	 * tim gia tri min
	*/
	$min = $a[5]; // ????

    for($i=0;$i<count($a); $i++){
    	if( $a[$i] <= $min)
		{
			$min = $a[$i];
		} else {
			$min = $min;
		}
    }
        
	// print_r ("gia tri min cua mang la: 	a[$i] = $min");  Sua lai
	echo "gia tri min cua mang la: ".$min;

	// Em muon lay chi so cua gia tri min max thi khi em so sanh va gan min max em cho them 1 bien la chiso
	// di theo thang min max gan la bang $i la ok.
?>