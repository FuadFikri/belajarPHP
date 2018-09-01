<?php
    $siswa = [
        ['nama'=>'adi', 'umur'=>'12', 'goldarah'=>'A'],
        ['nama'=>'budi', 'umur'=>'19', 'goldarah'=>'O'],
        ['nama'=>'candra', 'umur'=>'10', 'goldarah'=>'AB'],
        ['nama'=>'dandi', 'umur'=>'9', 'goldarah'=>'A'],
        ['nama'=>'edi', 'umur'=>'13', 'goldarah'=>'B'],
        ['nama'=>'fikri', 'umur'=>'7', 'goldarah'=>'B'],
    ];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>multidimensi</title>
    </head>
    <body>
        <table border="1" align="center">
            <tr>
                <th>nama</th>
                <th>umur</th>
                <th>golongan darah</th>
            </tr>
            <?php foreach ($siswa as $key => $value) { ?>
                <tr>
                    <td><?php echo $value['nama']; ?></td>
                    <td><?php echo $value['umur']; ?></td>
                    <td><?php echo $value['goldarah']; ?></td>
                </tr>
            <?php } ?>     
            <!-- bisa diaganti  <php endforeach?> -->
        </table>

    </body>
    </html>

