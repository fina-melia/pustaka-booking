<!Doctype html>
<html>
    <head>
        <title>output cinema 99</title>
    </head>
    <body>
        <center>
            <table>
                <h1>Pemesanan Tiket Cinema 99</h1>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td><?= $name;?></td>
                </tr>
                <tr>
                    <td>Judul film</td>
                    <td>:</td>
                    <td><?= $film;?></td>
                </tr>
                <tr>
                    <td>Pukul</td>       
                    <td>:</td>
                    <td><?= $pukul;?></td>
                </tr>
                <tr>
                    <td>Tipe studio</td>
                    <td>:</td>
                    <td><?= $tipe;?></td>
                </tr>
                <tr>
                    <td>Jumlah Pesan</td>
                    <td>:</td>
                    <td><?= $pesan;?></td>
                </tr>
                <?php 
                if ($tipe=="Reguler 2D")
                {$harga=40000;}
                elseif($tipe=="3D")
                {$harga=80000;}
                else
                {$harga=100000;}?>
                <tr>
                    <td>Harga Tiket</td>
                    <td>:</td>
                    <td><?= $harga; ?></td>
                </tr>
                <?php $total= $pesan * $harga; ?>
                <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td><?= $total; ?></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><a href=" <?= base_url('cinema'); ?> " >Input Data lagi</a></td>
                </tr>
            </table>
        </center>
    </body>
</html>
