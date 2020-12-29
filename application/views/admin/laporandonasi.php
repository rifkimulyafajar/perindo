<!DOCTYPE html>
<html>

<head>
    <title>Report Table</title>
    <html>

    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <style type="text/css">
            body {
                font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            }

            /* Table */
            table {
                margin: auto;
                font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
                font-size: 14px;

            }

            .demo-table {
                border-collapse: collapse;
                font-size: 14px;
            }

            .demo-table th,
            .demo-table td {
                border-bottom: 1px solid #8A2BE2;
                border-left: 1px solid #8A2BE2;
                padding: 5px 10px;
            }

            .demo-table th,
            .demo-table td:last-child {
                border-right: 1px solid #8A2BE2;
            }

            .demo-table td:first-child {
                border-top: 1px solid #8A2BE2;
            }

            .demo-table td:last-child {
                border-bottom: 1px solid #8A2BE2;
            }

            caption {
                caption-side: top;
                margin-bottom: 10px;
            }

            /* Table Header */
            .demo-table thead th {
                background-color: #9400D3;
                color: #FFFFFF;
                border-color: #8A2BE2 !important;
                text-transform: uppercase;
            }

            .kop-surat a {
                font-family: Arial, Helvetica, sans-serif;
                line-height: 50%;
                font-size: 15px;
            }

            /* Table Body */
        </style>
    </head>

<body>
    <table>
        <tr>
            <td>
                <!-- <img src="<?php echo base_url('asset/user/img/banner/sexedu.png') ?>" alt=""> -->
            </td>
            <td>
                <div class="kop-surat">
                    <center>
                        <a><b>WEBSITE PEDULI SESAMA DENGAN DONASI ONLINE</b></a><br>
                        <a>Jl. Lamongrejo, Tumenggungan, Kec. Lamongan, Kabupaten Lamongan</a><br>
                        <a>Telp +62857 0416 0688</a><br>
                        <a>Email : websitepeduli@gmail.com</a><br>
                    </center>
                </div>
            </td>
        </tr>
    </table>
    <hr>
    <width="70" height="50">
        </hr>
        <center>
            <h2>Laporan Donasi</h2>
        </center>
        <table class="demo-table responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Telp</th>
                    <th>Email</th>
                    <th>Jumlah</th>
                    <th>Metode</th>
                    <th>Note</th>
                    <th>Tanggal</th>
                </tr>
            </thead>

            <tbody>
                <?php $id_donasi = 1; ?>
                <?php foreach ($donasi as $dn) : ?>
                    <tr>
                        <td><?= $id_donasi; ?></td>
                        <!-- <td><?= $dn->id_user; ?></td> -->
                        <td width="100"><?= $dn->nama_lengkap; ?></td>
                        <td width="70"><?= $dn->no_hp; ?></td>
                        <td width="70"><?= $dn->email; ?></td>
                        <td width="70"><?= $dn->jmlh_donasi; ?></td>
                        <td width="50"><?= $dn->metode; ?></td>
                        <td width="200"><?= $dn->note; ?></td>
                        <td width="70"><?= $dn->tgl_donasi; ?></td>
                    </tr>
                    <?php $id_donasi++; ?>

                <?php endforeach; ?>
            </tbody>
            </div>
        </table>
</body>

</html>