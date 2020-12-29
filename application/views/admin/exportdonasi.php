<!DOCTYPE html>
<html>

<head>
    <title>Laporan Barang Keluar</title>
    <style type="text/css">
        #outtable {
            padding: 20px;
            border: 1px solid #e3e3e3;
            width: 900px;
            border-radius: 5px;
        }

        .short {
            width: 50px;
        }

        .normal {
            width: 150px;
        }

        table {
            border-collapse: collapse;
            font-family: arial;
            color: #5E5B5C;
        }

        thead th {
            text-align: left;
            padding: 10px;
        }

        tbody td {
            border-top: 1px solid #e3e3e3;
            padding: 10px;
        }

        tbody tr:nth-child(even) {
            background: #F6F5FA;
        }

        tbody tr:hover {
            background: #EAE9F5;
        }
    </style>
</head>

<body>
    <div id="outtable">
        <h1 style="text-align:center"> LAPORAN DONASI </h1>
        <table>
            <thead>
                <tr>
                    <th class="normal">No</th>
                    <!-- <th class="normal">Id User</th> -->
                    <th class="normal">Nama</th>
                    <th class="normal">No Telp</th>
                    <th class="normal">Email</th>
                    <th class="normal">Jumlah</th>
                    <th class="normal">Metode</th>
                    <th class="normal">Note</th>
                    <th class="normal">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php $id_donasi = 1; ?>
                <?php foreach ($donasi as $dn) : ?>
                    <tr>
                        <td><?= $id_donasi; ?></td>
                        <!-- <td><?= $dn->id_user; ?></td> -->
                        <td><?= $dn->nama_lengkap; ?></td>
                        <td><?= $dn->no_hp; ?></td>
                        <td><?= $dn->email; ?></td>
                        <td><?= $dn->jmlh_donasi; ?></td>
                        <td><?= $dn->metode; ?></td>
                        <td><?= $dn->note; ?></td>
                        <td><?= $dn->tgl_donasi; ?></td>
                    </tr>
                    <?php $id_donasi++; ?>

                <?php endforeach; ?>
            </tbody>
    </div>
    </table>
</body>

</html>