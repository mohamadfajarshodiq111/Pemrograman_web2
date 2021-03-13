<! -- variabel statik -->
<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatibel" conten="IW=edge">
	<meta name="viewpot" content="width=device-width, initial -scale=1.10">
	<title>veriabel static</title>
</head>
<body>
    <?php
        function test(){
            static $a = 0;
            echo "Nilai a :";
            echo $a;
            echo "<br>";
            $a++;
        }
        test();
        test();
        test();
        test();
        test();
    ?>
</body>
</html>
