<?php
    $berat = ['60','90','20','23','60','90','22','23','60','98','20','13'];
    $jumlah_20=0;

    foreach ($berat as $key => $value) {
        echo "index ke $key berisi data $value <br>";
        if ($value == '20') {
            $jumlah_20++;
        }
        if ($value == '23') {
            echo "20 ada di index ke - $key";
            break; //untuk menghentikan perulangan. karena 23 sudah ketemu. sehingga hemat memori
        }
    }
    echo "jumlah anak yang memiliki berat badan 20 yaitu sebanyak ".$jumlah_20 . "orang <br>";
    echo "<hr>";

    $siswa = [
        ['nama'=>'adi', 'umur'=>'12', 'goldarah'=>'A'],
        ['nama'=>'budi', 'umur'=>'19', 'goldarah'=>'O'],
        ['nama'=>'candra', 'umur'=>'10', 'goldarah'=>'AB'],
        ['nama'=>'dandi', 'umur'=>'9', 'goldarah'=>'A'],
        ['nama'=>'edi', 'umur'=>'13', 'goldarah'=>'B'],
        ['nama'=>'fikri', 'umur'=>'7', 'goldarah'=>'B'],
    ];

    foreach ($siswa as $key => $value) {
        
        if ($value['nama'] == 'adi') 
            continue;   //continue jika menemukan adi. adi akan diskip dan lanjut ke perulangan selanjutnya
            echo "nama : ". $value['nama'] . "  <br>";
            echo "umur : ". $value['umur'] . "  <br><br>";
        
       
    }
?>