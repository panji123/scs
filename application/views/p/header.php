<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Semesta Citra Sertivindo - Beranda</title>
        <script type="text/javascript" src="javascript/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="javascript/popper.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="css/scs.css"/>
        <script type="text/javascript" src="javascript/bootstrap/bootstrap.bundle.js"></script>

    </head>
    <body>

        <div id="header" class="container-fluid fixed-top">
            <div class="row">

                <div class="col-md-1">

                    <center>
                        <img src="gambar/logo.png" style="width: 64px;"/>
                    </center>

                    <span style="display: none">=</span>
                </div>
                <div id="menu" >
                    Menu
                </div>

                <div id="navigasi" class="col-md">

                    <div class="row">
                        <div class="col-md">
                            Beranda
                        </div>
                        <div class="col-md dropdown show"  id="dropdownMenuLink">

                            <div data-toggle="dropdown">
                                Profil
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item">Tentang</a>
                                <a class="dropdown-item">Visi Misi</a>
                                <a class="dropdown-item">Portofolio</a>
                            </div>

                        </div>
                        <div class="col-md dropdown show"  id="dropdownMenu3">
                            <div data-toggle="dropdown">
                                <a href="">
                                    Daftar Layanan
                                </a>
                            </div>

                            <div class="dropdown-menu">
                                <?php
                                $angka = 0;

                                function bikinSlug($url) {
                                    return str_replace("-", " ", $url);
                                }

                                function bikinPage($angka, $daftar, $tipe) {
                                    for ($angka; $angka < count($daftar); $angka ++) {
                                        ?>
                                        <a class="dropdown-item" href="<?php print base_url() . $tipe . url_title($daftar[$angka]->judul, '-', true) ?>/"><?= $daftar[$angka]->judul ?></a>
                                        <?php
                                        if ($daftar[$angka]->sub == 1) {
                                            return "beres";
                                        }
                                    }
                                }

                                bikinPage($angka, $daftar_halaman, 'layanan/');
                                ?>

                            </div>

                        </div>


                        <div class="col-md">
                            Informasi Publik
                        </div>
                        <div class="col-md">
                            Kontak
                        </div>
                        <div class="col-md dropdown show"  id="dropdownMenuLink2">
                            <div data-toggle="dropdown">
                                Klien Area
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                <div class="row" style="width: 600px;">
                                    <div class="col-md">
                                        <div>
                                            Klien
                                        </div>
                                        <div>
                                            sdsd
                                        </div>
                                        <div>
                                            sdsd
                                        </div>
                                        <div>
                                            sdsd
                                        </div>
                                        <div>
                                            sdsd
                                        </div>
                                        <div>
                                            sdsd
                                        </div>

                                    </div>
                                    <div class="col-md">
                                        <div>
                                            <input placeholder="username" style="text-align: center"/>
                                        </div>
                                        <br/>
                                        <div>
                                            <input placeholder="password" type="password">
                                        </div>aw
                                        <br/>
                                        Masuk

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md">
                            Cek Sertifikasi
                        </div>

                    </div>
                </div>


            </div>

        </div>

        <br/>
        <br/>
        <br/>
        <br/>



        <br/><br/><br/><br/>
        <pre>
            <?php
            var_dump($daftar_halaman);

            print getenv('REMOTE_ADDR') . " .. ";
            print getenv('HTTP_X_FORWARDED_FOR');
            ?>
        </pre>