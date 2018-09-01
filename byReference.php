<?php

    
    $nama = "fikri";

    function gantiNama($nama){
        $nama = "bukan fikri";
    }

    gantiNama($nama);
    echo $nama;
    // outputnya akan tetep fikri. meskipun didalam fungsi udah diubah
    echo "<hr>";
    // outputnya akan sesuai dengan yg dilakukan didalam fungsi
    $nama = "fikri";

    function changeName(&$nama){
        $nama = "bukan fikri";
    }

    changeName($nama);
    echo $nama;
?>