<?php
    $pesan = "selamat aaa";
    file_put_contents("content.txt", $pesan);

    $isi = file_get_contents("content.txt");
    echo $isi;
?>  