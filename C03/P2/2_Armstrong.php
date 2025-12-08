<html>
    <body>
        <h2>Armstrong Number Checker</h2>
        <form method="POST">
            <label for="number">Enter a number:</label>
            <input type="number" id="number" name="number" required>
            <button type="submit">Check</button>
        </form>
        
        <?php
            if(isset($_POST['number'])){
                $number=$_POST['number'];
                $num_array=str_split(strval($number));
                $sum=0;
                for($i=0;$i<count($num_array);$i++){
                    $sum+=(int)$num_array[$i]**3;
                }
                if($sum==$number){
                    print("<p>$number is an armstrong number</p>");
                }else{
                    print("<p>$number is not an armstrong number</p>");
                }
            }
        ?>
    </body>
</html>
