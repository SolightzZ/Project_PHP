<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Paniti jahem 1</title>
</head>
<body>
    <?php
    echo "<br> My Fistt Php Script <br>";

    echo 'PHP version: ' . phpversion();

    // phpintfo();
    
    echo "<h2> [!] Global and Local Variable </h2>";

    $x = 5;

    function MyTest(){

        $x = 5;

        echo "<p> Variable x อยู่ภายใน function = $x </p>";
    }
    MyTest();

    echo "<p> Variable x  อยู่ภายในนอก function  = $x </p> <br> <br>";

    echo "<h2> PHP Data Type ชนิดข้อมูลใน PHP </h2>";
    $str1 = '<br><br> hello World 1';
    $str2 = 'hello World 2';
    echo "แสดงชนิดข้อมูล Staring ใช้เครื่องหมาย \' และ \" ";

    echo $str1;
    echo "<br>";
    echo $str2;
    echo "<p> ------------------------------------- </p>";
    $a = 5985;
    $b = 123.456;
    $c = true;

    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<p> ------------------------------------- </p>";

    echo "<h2>แสดงชนิดข้อมูล Array </h2>";
    $car = array("Volo", "BMW", "toyota");
    var_dump($car);

    echo "<p>-------------------------------------</p>";
    echo "แสดงค่า Null <br>";
    $var = "Hello World";
    $var = "null";
    var_dump($var);
    echo "<br>"; 
    echo "<br>"; 

    echo "<h2>การใช้ function ที่เกี่ยวกับตัวแปรชนิด String </h2>"; 
    $hello = "Hello World!"; 
    echo "ข้อความได้แก่ \"$hello\" <br><br>"; // หากเราใช้ \ =  \"$hello\" จะไม่แปรในนี้ จะได้ Hello World!
    echo "ความยาวตัวแปร Hello :" . strlen($hello); 
    echo "<br>"; 
    echo "จำนวนคำของข้อความ : " . str_word_count($hello); 
    echo "<br>"; 
    echo "สลับที่ข้อความ : " . strrev($hello); 
    echo "<br>"; 
    echo "หาตำแหน่งของตัว W ในข้อความ : " . strpos($hello, "W"); 
    echo "<br>"; echo "แทนค่าในตัวแปร : " . str_replace("Hello", "bye", $hello); 
    echo "<p>-------------------------------------</p>";


    

    ?>
</body>
</html>