<?php
$produk = [
    [
        "nama" => "Laptop Lenovo IdeaPad Slim 3",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 8
    ],
    [
        "nama" => "Mouse Wireless Fantech",
        "kategori" => "Aksesoris",
        "harga" => 275000,
        "stok" => 12
    ],
    [
        "nama" => "Keyboard Gaming Rexus",
        "kategori" => "Aksesoris",
        "harga" => 1100000,
        "stok" => 0
    ],
    [
        "nama" => "Headset JBL Quantum",
        "kategori" => "Audio",
        "harga" => 950000,
        "stok" => 6
    ],
    [
        "nama" => "Monitor Samsung 27 Inch",
        "kategori" => "Monitor",
        "harga" => 2300000,
        "stok" => 4
    ],
    [
        "nama" => "Webcam Logitech C270",
        "kategori" => "Aksesoris",
        "harga" => 600000,
        "stok" => 0
    ]
];

$jumlahProduk = count($produk); 

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store</title>

    <style>

        /* ==========================================
           RESET
        ========================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* ==========================================
           BODY
        ========================================== */

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
            color: #171821;
        }


        /* ==========================================
           NAVBAR
        ========================================== */

        .navbar {
            background-color: white;
            height: 65px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 0 8%;

            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 30px;
        }

        .menu a {
            text-decoration: none;
            color: #555;
            font-size: 14px;
        }

        .menu a:hover {
            color: #000;
        }


        /* ==========================================
           HERO
        ========================================== */

        .hero {
            max-width: 1100px;

            margin: 40px auto;

            background-color: #171821;
            color: white;

            padding: 65px 50px;

            border-radius: 15px;
        }

        .hero small {
            font-size: 11px;
            color: #aaa;
            letter-spacing: 1px;
        }

        .hero h1 {
            font-size: 40px;
            margin: 12px 0;
        }

        .hero p {
            color: #c9c9c9;
            margin-bottom: 25px;
        }

        .btn-hero {
            display: inline-block;

            background-color: white;
            color: #171821;

            padding: 10px 18px;

            border-radius: 5px;

            text-decoration: none;

            font-weight: bold;
            font-size: 14px;
        }


        /* ==========================================
           KATALOG
        ========================================== */

        .container {
            max-width: 1100px;
            margin: auto;
        }

        .catalog-header {
            display: flex;

            justify-content: space-between;
            align-items: center;

            margin-bottom: 25px;
        }

        .catalog-header small {
            color: #888;
            font-size: 11px;
        }

        .catalog-header h2 {
            font-size: 28px;
        }

        .jumlah {
            background-color: white;

            padding: 10px 15px;

            border-radius: 8px;

            font-size: 13px;

            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }


        /* ==========================================
           PRODUK
        ========================================== */

        .produk-container {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 22px;

            padding-bottom: 60px;
        }


        /* ==========================================
           CARD
        ========================================== */

        .card {
            background-color: white;

            border-radius: 12px;

            padding: 25px;

            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);

            transition: 0.2s;
        }

        .card:hover {
            transform: translateY(-4px);
        }


        /* ==========================================
           ICON
        ========================================== */

        .icon {
            width: 50px;
            height: 50px;

            background-color: #171821;
            color: white;

            border-radius: 10px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin-bottom: 20px;

            font-size: 20px;
        }


        /* ==========================================
           KATEGORI
        ========================================== */

        .kategori {
            font-size: 11px;

            color: #888;

            text-transform: uppercase;

            margin-bottom: 7px;
        }

        /* Tulisan DISKON 10% */

        .label-diskon {
            color: #222;

            font-size: 11px;

            font-weight: bold;

            margin-left: 5px;
        }


        /* ==========================================
           NAMA PRODUK
        ========================================== */

        .nama-produk {
            font-size: 18px;

            margin-bottom: 15px;
        }


        /* ==========================================
           HARGA
        ========================================== */

        .harga {
            margin-bottom: 15px;
        }

        /* Harga normal yang dicoret */

        .harga-normal {
            color: #999;

            font-size: 13px;

            margin-bottom: 5px;
        }

        /* Harga setelah diskon */

        .harga-setelah {
            font-size: 18px;

            font-weight: bold;
        }

        /* Untuk produk tanpa diskon */

        .harga-biasa {
            font-size: 18px;

            font-weight: bold;
        }


        /* ==========================================
           GARIS PEMISAH
        ========================================== */

        .garis {
            border: none;

            border-top: 1px solid #eee;

            margin: 15px 0;
        }


        /* ==========================================
           STOK
        ========================================== */

        .stok {
            font-size: 13px;

            margin-bottom: 20px;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }

        .tersedia {
            background-color: #e4f7eb;

            color: #16803c;

            padding: 5px 10px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: bold;
        }

        .habis {
            background-color: #fde8e8;

            color: #d33;

            padding: 5px 10px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: bold;
        }


        /* ==========================================
           BUTTON BELI
        ========================================== */

        .btn-beli {
            display: block;

            width: 100%;

            text-align: center;

            padding: 10px;

            background-color: #171821;

            color: white;

            border-radius: 6px;

            border: none;

            cursor: pointer;

            font-weight: bold;
        }

        .btn-beli:hover {
            background-color: #33343f;
        }


        /* ==========================================
           FOOTER
        ========================================== */

        footer {
            background-color: #171821;

            color: white;

            text-align: center;

            padding: 25px;

            font-size: 13px;
        }


        /* ==========================================
           RESPONSIVE
        ========================================== */

        @media (max-width: 800px) {

            .navbar {
                padding: 0 5%;
            }

            .hero {
                margin: 25px;

                padding: 45px 30px;
            }

            .hero h1 {
                font-size: 30px;
            }

            .container {
                margin: 0 25px;
            }

            .produk-container {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media (max-width: 550px) {

            .menu {
                gap: 10px;
            }

            .menu a {
                font-size: 12px;
            }

            .produk-container {
                grid-template-columns: 1fr;
            }

            .catalog-header {
                align-items: flex-start;

                gap: 15px;
            }

        }

    </style>

</head>


<body>


    <!-- ==========================================
         NAVBAR
    ========================================== -->

    <nav class="navbar">

        <div class="logo">
            Cia Store
        </div>

        <div class="menu">

            <a href="#">
                Home
            </a>

            <a href="#produk">
                Products
            </a>

            <a href="#footer">
                About
            </a>

        </div>

    </nav>



    <!-- ==========================================
         HERO
    ========================================== -->

    <section class="hero">

        <small>
            CIA STORE
        </small>

        <h1>
            Simple Tech Store.
        </h1>

        <p>
            Temukan berbagai perangkat dan aksesoris
            teknologi untuk kebutuhanmu.
        </p>

        <a href="#produk" class="btn-hero">
            Lihat Produk
        </a>

    </section>



    <!-- ==========================================
         KATALOG
    ========================================== -->

    <main class="container" id="produk">


        <div class="catalog-header">

            <div>

                <small>
                    OUR PRODUCTS
                </small>

                <h2>
                    Katalog Produk
                </h2>

            </div>


            <div class="jumlah">

                Total Produk:

                <b>
                    <?= $jumlahProduk; ?>
                </b>

            </div>

        </div>



        <!-- ==========================================
             PRODUK
        ========================================== -->

        <div class="produk-container">


            <?php foreach ($produk as $item): ?>


                <?php

                // ==========================================
                // PERHITUNGAN DISKON
                // ==========================================

                if ($item["harga"] >= 1000000) {

                    // Diskon 10%
                    $diskon = 10;

                    // Menghitung jumlah potongan harga
                    $potongan = $item["harga"] * $diskon / 100;

                    // Menghitung harga setelah diskon
                    $hargaSetelahDiskon =
                        $item["harga"] - $potongan;

                } else {

                    // Produk di bawah Rp1.000.000
                    // tidak mendapatkan diskon

                    $diskon = 0;

                    $hargaSetelahDiskon =
                        $item["harga"];
                }

                ?>


                <!-- CARD PRODUK -->

                <div class="card">


                    <!-- ICON -->

                    <div class="icon">
                        💻
                    </div>



                    <!-- KATEGORI + DISKON -->

                    <div class="kategori">

                        <?= $item["kategori"]; ?>


                        <?php if ($diskon > 0): ?>

                            <span class="label-diskon">

                                DISKON <?= $diskon; ?>%

                            </span>

                        <?php endif; ?>

                    </div>



                    <!-- NAMA PRODUK -->

                    <h3 class="nama-produk">

                        <?= $item["nama"]; ?>

                    </h3>



                    <!-- ==================================
                         HARGA
                    ================================== -->

                    <div class="harga">


                        <?php if ($diskon > 0): ?>


                            <!-- Harga normal -->

                            <div class="harga-normal">

                                <s>
                                    Rp
                                    <?= number_format(
                                        $item["harga"],
                                        0,
                                        ',',
                                        '.'
                                    ); ?>
                                </s>

                            </div>


                            <!-- Harga setelah diskon -->

                            <div class="harga-setelah">

                                Rp
                                <?= number_format(
                                    $hargaSetelahDiskon,
                                    0,
                                    ',',
                                    '.'
                                ); ?>

                            </div>


                        <?php else: ?>


                            <!-- Produk tidak mendapatkan diskon -->

                            <div class="harga-biasa">

                                Rp
                                <?= number_format(
                                    $item["harga"],
                                    0,
                                    ',',
                                    '.'
                                ); ?>

                            </div>


                        <?php endif; ?>


                    </div>



                    <hr class="garis">



                    <!-- ==================================
                         STOK
                    ================================== -->

                    <div class="stok">


                        <span>

                            Stok:
                            <?= $item["stok"]; ?>

                        </span>


                        <?php if ($item["stok"] > 0): ?>


                            <span class="tersedia">

                                Tersedia

                            </span>


                        <?php else: ?>


                            <span class="habis">

                                Stok Habis

                            </span>


                        <?php endif; ?>


                    </div>



                    <!-- ==================================
                         TOMBOL BELI
                    ================================== -->

                    <?php if ($item["stok"] > 0): ?>


                        <button class="btn-beli">

                            Beli Sekarang

                        </button>


                    <?php endif; ?>


                </div>


            <?php endforeach; ?>


        </div>


    </main>



    <!-- ==========================================
         FOOTER
    ========================================== -->

    <footer id="footer">

        <p>

            &copy; 2026 Cia Store.
            All Rights Reserved.

        </p>

    </footer>


</body>

</html> 