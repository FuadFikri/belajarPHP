<?php
    $pesan = "selamat aaa";
    file_put_contents("content.txt", $pesan, FILE_APPEND);
    // file append buat menambahkan. bukan menimpa.-> jika tidak pake append, saat direload akan menimpa file lama

    $isi = file_get_contents("content.txt");
    echo $isi ."<br>";

    $siswa = [
        ['nama'=>'adi', 'umur'=>'12', 'goldarah'=>'A'],
        ['nama'=>'budi', 'umur'=>'19', 'goldarah'=>'O'],
        ['nama'=>'candra', 'umur'=>'10', 'goldarah'=>'AB'],
        ['nama'=>'dandi', 'umur'=>'9', 'goldarah'=>'A'],
        ['nama'=>'edi', 'umur'=>'13', 'goldarah'=>'B'],
        ['nama'=>'fikri', 'umur'=>'7', 'goldarah'=>'B'],
    ];

    $data = serialize($siswa); //array to serialize
    file_put_contents("dataserialize.txt", $data); //seiralize dijadikan file

    $getFile = file_get_contents('dataserialize.txt');  //mengambil file
    $hasil = unserialize($getFile); //unserialize jadi array
    var_dump($hasil);

    echo "<br><hr>";

    $data = json_encode($siswa); //array to json
    file_put_contents("dataserialize.txt", $data); //json dijadikan file
    echo $data;
    $getFile = file_get_contents('dataserialize.txt');  //mengambil file
    $hasil = json_decode($getFile); //json jadi array
    var_dump($hasil);



?>  