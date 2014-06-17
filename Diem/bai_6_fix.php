
	
	 
<?php
    /*
    	 * 	Bai 6
    	 *	- Cho phuong trinh bac 2 aX*X + bX + c =0
    	 *	- Viet thuat toan giai phuong trinh.
    */

    $a=rand(-20,20);
    $b=rand(-20,20);
    $c=rand(-20,20);

    $delta=($b*$b-(4*$a*$c));
    $x1=(-$b-sqrt($delta))/(2*$a);
    $x2=(-$b+sqrt($delta))/(2*$a);

    echo "a="."$a \n"."<br>";
    echo "b="."$b \n"."<br>";
    echo "c="."$c \n"."<br>";

    echo"Phuong trinh bac 2 he so a,b,c :"."<br>"."$a*x^2"."+"."$b*x"."+"."$c"."=0"."</br>";
    echo "Nghiem cua phuong trinh la :<br>";
    if($a==0) {
        if($b==0) {
            if($c==0) { 
                echo "Phuong trinh vo so nghiem<br>";
            } else { 
                echo "Phuong trinh vo nghiem<br>";
            }
        } else {
            if($c==0) {
                echo "Phuong trinh co nghiem : x = 0";
            } else {
                echo " Phuong trinh co nghiem : x="."(-$c/$b)"; 
            }
        }
    } else { 
        if($delta>=0) {
            echo "Phuong trinh co hai nghiem phan biet :<br>";
            echo "x1="."$x1<br>";
            echo "x2="."$x2";
        } else { 
            echo "Phuong trinh co nghiem phuc!";
        }
    }
?>