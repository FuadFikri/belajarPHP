<?php
    $datasiswa=[
        'nama'=>'fikri',
        'kelas' => null, //kalo belum ada datanya mending dikasih null. agar tidak menyebabkan error not defined index/value
        'umur' =>''
    ];

    echo $datasiswa['satt'] ?? null;
    // di php 7 ada ??
    // artinya jka index umur ada datanya dicetak. jika tidak maka return null

?>