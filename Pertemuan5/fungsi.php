<?php
// soal no 1
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Sofi Lailatul<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }
// perkenalan();
// perkenalan();


//soal no 2
// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Hamdana","Hallo");

// echo "<hr>";

// $saya = "Sofi Lailatul";
// $ucapanSalam = "Selamat pagi";

// perkenalan($saya,$ucapanSalam);


// soal no 3
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Hamdana","Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// perkenalan($saya);


// soal no 4
// function hitungUmur($thn_lahir, $thn_sekarang){
//         $umur = $thn_sekarang - $thn_lahir;
//         return $umur;
//     }
    
//     echo "Umur saya adalah ". hitungUmur(2004, 2023). " tahun";
    
// soal no 5
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";

        echo "Saya berusia " . hitungUmur(2003, 2023) . " tahun<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    perkenalan("Sofi");

?>