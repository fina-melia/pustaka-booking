<!Doctype html>
<html>

<head>
    <title>input cinema</title>
</head>

<body>
    <center>
        <h1>Pemesanan Tiket Cinema 99</h1>
        <form action="<?= base_url('cinema/cetak');?>" method="POST">
        <table>
            <tr>
                <td>Nama Pemesanan</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>Judul Film</td>
                <td>:</td>
                <td><select name="film">
                <option value="pilih">~Pilih~</option>
                <option value="parasite">Parasite</option>
                <option value="hereditary">Hereditary</option>
                <option value="closet">The Closet</option>
                <option value="kamen">Kamen Rider Reiwa</option>
                </select></td>
            </tr>

            <tr>
                <td>Pukul</td>
                <td>:</td>
                <td><input type="radio" name="pukul" value="14.20" /> 14.20
                <input type="radio" name="pukul" value="15.40" /> 15.40
                <input type="radio" name="pukul" value="16.40" /> 16.40</td>
            </tr>

            <tr>
                <td>Tipe Studio</td>
                <td>:</td>
                <td><input type="radio" name="tipe" value="Reguler 2D" /> Reguler 2D
                <input type="radio" name="tipe" value="3D" /> 3D
                <input type="radio" name="tipe" value="velvet" /> Velvet</td>
            </tr>

            <tr>
                <td>Jumlah Pesan</td>
                <td>:</td>
                <td><input type="number" name="pesan"></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" name="submit" value="Hitung"><input type="reset" name="reset" value="Batal"></td>
            </tr>
        </table>
        </form>
    </center>
</body>

</html>