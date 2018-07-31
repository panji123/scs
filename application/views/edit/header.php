<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>


        <script type="text/javascript" src="<?= $dir_level ?>../javascript/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="<?= $dir_level ?>../javascript/popper.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= $dir_level ?>../css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= $dir_level ?>../css/scs.css"/>
        <script type="text/javascript" src="<?= $dir_level ?>../javascript/bootstrap/bootstrap.bundle.js"></script>

    </head>
    <body>


        <div id="header" class="container-fluid fixed-top">
            <div class="row">

                <div class="col-md-1">

                    <center>
                        <img src="<?= $dir_level ?>../gambar/logo.png" style="width: 64px;"/>
                    </center>

                    <span style="display: none">=</span>
                </div>
                <div id="menu" >
                    Menu
                </div>

                <div id="navigasi" class="col-md">

                    <div class="row">
                        <div class="col-md">
                            Dashboard
                        </div>
                        <div class="col-md">
                            <a href="halaman/">
                                Halaman
                            </a>
                        </div>
                        <div class="col-md dropdown show"  id="dropdownMenuLink">
                            <div>
                                Artikel
                            </div>
                        </div>
                        <div class="col-md dropdown show"  id="dropdownMenu3">
                            <div>
                                File
                            </div>

                        </div>
                        <div class="col-md">
                            Klien
                        </div>
                        <div class="col-md">
                            Sertifikasi
                        </div>
                        <div class="col-md dropdown show"  id="dropdownMenuLink2">
                            <div data-toggle="dropdown">
                                Log out
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <br/> <br/>
        <br/>
