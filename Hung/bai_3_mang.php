<?php
  /*
   * Bai 3
   *  - Cho mang a gom 20 phan tu.
   *  - Sắp xếp mang tăng dần, và hiển thị lên màn hình mang đã sắp xếp
   *  - Nhập số nguyên x, chèn x vào mang a đã được sắp xếp sao cho mang vẫn tăng dần mà không cần sắp xếp lại
   *  - Hien thi mang da dc chen x
  */

  # code...

  /*
   * Mang a gom 20 phan tu
  */
$a =array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20") ;
  /*
   * Sap xep day so tang dan
  */
  rsort($a);
   
  /*
   * Hien thi day sau khi sap xep
  */
  $n=count($a);
  for($x=0;$x<$n;$x++)
  {
    echo $a[$x];
    echo "<br>";
  }
  /*
   * Cho so nguyen $x = 8
  */
  /*
   * Chen x vao mang a
  */
   $n=20;
   $x=8;
   $i=$n-1;
    while ($i > 0 && $a[$i]>$x) 
      {
         $a[$i+1]=$a[$i];
         $i--; 
       }  
      $a[$i+1]=$x;
      $n++;
  for ($i=0; $i <$n ; $i++) { 
  /*
   * Hien thi mang da dc chen x
  */
      echo "<br>".$a[$i];
   }
?>