 
 <?php 
  /* EM : Nguyện  */
  /*
   * Anh nhan xet bai em
   * Em code lai theo chuan nhe. Tho` ra thut vao nhin no thoang la ok.
  */

  $mang_so=array("1","2","3","4","5","6","7","8","9","12","10");
  
  echo "<pre>";
    print_r($mang_so);
  echo "</pre>";
  
  /*
   * Tim giá trị min
  */
  $min = $mang_so[0];
  $n = count($mang_so);

  for($i =0; $i < $n; $i++)
  {
    if($mang_so[$i] < $min)
    {
      $min = $mang_so[$i];
    }
  }
  
  echo "Số min là : ".$min."<br>";

  /*
   * Tim giá trị max     
  */
  $max = $mang_so[0];
  $n = count($mang_so);

  for($i = 1; $i < $n; $i++){
    if($mang_so[$i] > $max){
        $max = $mang_so[$i];
    }
  }

  echo "Số max là : ".$max;
  
?>