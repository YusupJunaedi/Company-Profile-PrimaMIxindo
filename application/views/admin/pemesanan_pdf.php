<center>
    <h2>Laporan Pemesanan</h2>
</center>
<br><br>

    
<table border="1" >
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No Telpon</th>
        <th>paket Pesan</th>
        <th>Pesan</th>
    </tr>
    <?php
        $no = 1;
        foreach( $pemesanan as $p ) :
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $p['nama'] ?></td>
        <td><?= $p['email'] ?></td>
        <td><?= $p['tlp'] ?></td>
        <td><?= $p['paket'] ?></td>
        <td><?= $p['pesan'] ?></td>
    </tr>
    <?php endforeach ?>
</table>
