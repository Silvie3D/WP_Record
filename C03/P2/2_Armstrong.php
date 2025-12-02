<html>
    <body>
        <?php
            $number=153;
            $num_array=str_split(strval($number));
            $sum=0;
            for($i=0;$i<count($num_array);$i++){
                $sum+=(int)$num_array[$i]**3;
            }
            if($sum==$number){
                print("$number is an armstrong number\n");
            }else{
                print("$number is not an armstrong number\n");
            }
        ?>
    </body>
</html>
