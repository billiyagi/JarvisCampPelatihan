<?php 
    // $name = "aldi";
    // echo "Hello World!";

    // function jumlahKan($num1, $num2){
    //     return $num1 + $num2;
    // }

    // $date = date("D");

    // if($date == "Sat"){
    //     echo "Have a nice weekend";
    // }else{
    //     echo "Have a nice day";
    // }

    // for($i = 0; $i < 5; $i++){
    //     echo "The number is " . $i . "<br>";
    // }

    // while($j <= 3){
    //     echo "The number is " . $j . "<br>";
    //     $j++;
    // }

    #buat function dengan 2 parameter untuk menampilkan angka ganjil. Parameter pertama angka pertama dan parameter terkhir angka terakhir
    function searchGanjil($first, $last){
        // lihat satu persatu angka pada range
        while($first <= $last){
            // cek apakah angka tersebut ganjil
            if($first % 2 != 0){
                echo $first . "\n";
            }
            // tambahkan $first 1 angka
            $first++;
        }
    }

function searchGenap($first, $last)
{
    // lihat satu persatu angka pada range
    while ($first <= $last) {
        // cek apakah angka tersebut genap
        if ($first % 2 == 0) {
            echo $first . "\n";
        }
        // tambahkan $first 1 angka
        $first++;
    }
}

    // Panggil function searchGanjil
    searchGanjil(1, 100);

    // Panggil function searchGenap
    searchGenap(1, 100);




    function mathPlus($num1, $num2){
        return $num1 + $num2;
    }

    function mathMinus($num1, $num2){
        return $num1 - $num2;
    }

    function mathTimes($num1, $num2){
        return $num1 * $num2;
    }

    function mathDivide($num1, $num2){
        return $num1 / $num2;
    }

    $mathOperation = "plus";
    $mathN1 = 10;
    $mathN2 = 5;

    switch($mathOperation){
        case "plus":
            echo mathPlus($mathN1, $mathN2);
            break;
        case "minus":
            echo mathMinus($mathN1, $mathN2);
            break;
        case "times":
            echo mathTimes($mathN1, $mathN2);
            break;
        case "divide":
            echo mathDivide($mathN1, $mathN2);
            break;
        default:
            echo "Operation not found";
    }
?>