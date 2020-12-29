<!DOCTYPE html>
<html>

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
                Bulan :
            </center>
            <table class="demo-table responsive">
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
                            <td><?php echo $id_donasi; ?></td>
                            <td width="100"><?php echo $dn['nama_lengkap']; ?></td>
                            <td width="70"><?php echo $dn['no_hp']; ?></td>
                            <td width="70"><?php echo $dn['email']; ?></td>
                            <td width="70"><?php echo $dn['jmlh_donasi']; ?></td>
                            <td width="50"><?php echo $dn['metode']; ?></td>
                            <td width="200"><?php echo $dn['note']; ?></td>
                            <td width="70"><?php echo $dn['tgl_donasi']; ?></td>

                        </tr>
                        <?php $id_donasi++; ?>

                    <?php endforeach; ?>
                </tbody>
                </div>
            </table>
    </body>

</html>