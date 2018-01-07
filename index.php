<html><head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Diajukan untuk memenuhi tugas Praktikum Desain Web.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, one page">
    <meta name="author" content="JindongInside">

    <link rel="shortcut icon" type="assets/image/x-icon" href="uty.png">
    <title>EGA GYM</title>

    <link href="assets/css/metro.css" rel="stylesheet">
    <link href="assets/css/metro-icons.css" rel="stylesheet">
    <link href="assets/css/metro-responsive.css" rel="stylesheet">
    <link href="assets/css/metro-schemes.css" rel="stylesheet">

    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/js/metro.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/google/code-prettify/master/loader/prettify.css">
<body>
    <div><header class="app-bar fixed-top navy" data-role="appbar">
    <div class="container">
        <a href="index.php" class="app-bar-element branding"> Home</a>

        <ul class="app-bar-menu small-dropdown">
            <li data-flexorderorigin="0" data-flexorder="2" class="">
                <a href="#profil"><span class="mif-profile icon"></span> Profil</a>
            </li>
            <li data-flexorderorigin="1" data-flexorder="2">
                <a href="#Kegiatan"><span class="mif-cab icon"></span> Kegiatan</a>
            </li>

            <li data-flexorderorigin="2" data-flexorder="3">
                <a href="#Daftar"><span class="mif-opencart icon"></span> Daftar</a>
            </li>

            <li data-flexorderorigin="3" data-flexorder="4">
                <a href="#kontak"><span class="mif-contacts-dialer icon"></span> Kontak</a>
            </li>
        </ul>

        <span class="app-bar-pull"></span>

    <div class="app-bar-pullbutton automatic" style="display: none;"></div><div class="clearfix" style="width: 0;"></div><nav class="app-bar-pullmenu hidden flexstyle-app-bar-menu" style="display: none;"><ul class="app-bar-pullmenubar hidden app-bar-menu"></ul></nav></div>
</header>
</div>
<div class="page-content">
        <div class="bg-lightBlue fg-white align-center">
            <div class="container">
                <div class="no-overflow" style="padding-top: 40px">

                    <br>
                    <br>
                    <br>
                    <h1 style="font-size: 4.5rem; line-height: 1" class="text-shadow metro-title text-light">EGA GYM</h1>
                    <div class="padding30 sub-leader text-light">
                        Kami mampu, membuat berat badan anda turun. dan kami sanggup, membuat anda lebih berotot.
                    </div>
                    <p class="" style="margin-top: 10px; padding: 0 50px">
                        BUKTIKAN SENDIRI!!
                    </p>
                   
                    <div class="margin60">
                        <div class="clear-float">
                            <a href="#Daftar"><button class="button big-button block-shadow success loading-cube lighten">DAFTAR SEKARANG</button></a>
                        </div>

                    </div>

                    <script>
                        $(function(){
                            setTimeout(function(){
                                $("#g1 .cell > div:eq(0)").animate({
                                    'margin-top': 0
                                }, 500, 'easeOutBounce');
                                $("#g1 .cell > div:eq(1)").animate({
                                    'margin-top': 0
                                }, 1000, 'easeOutBounce');
                                $("#g1 .cell > div:eq(2)").animate({
                                    'margin-top': 0
                                }, 1500, 'easeOutBounce');
                            }, 500);
                        });
                    </script>
                </div>
            </div>
        </div>

        <div class="bg-lightOlive fg-dark">
            <div id="profil" class="container">
                <div class="padding80" style="padding-top: 40px">
                    <div class="">
                        <div class="grid">
                            <div class="row">            		
                                <div class="cell padding20 clear-float">
					               <div>
	                                    <img id="poto_profil" src="assets/image/potfil.jpeg" class="place-left" style="height: 190px; margin-right: 20px;">
	                                    <h2 class="text-light">Ega Gym</h2>
	                                    <h3 class="fg-red">sedikit tentang kami</h3>
	                                    <div class="fg-dark">
	                                        Ega Gym adalah tempat latihan gym yang optimis dan penuh percaya diri. kami yakin kami mampu membuat berat tubuh anda turun. tidak hanya bagi pria, gym kami juga terbuka untuk wanita, bahkan kami memiliki tempat yang berbeda untuk wanita sehingga anda dapat fokus menjadikan tubuh anda se ideal yang anda inginkan.
	                                    </div>
					               </div>
	                               </a>
				                </div>
                                <div class="cell padding20 clear-float">
                                   <div>
                                        <img id="profil_2" src="assets/image/cewek.jpeg" class="place-right" style="height: 190px; margin-right: 20px;">
                                        <h1 class="">Keuntungan bersama kami</h1>
                                        <ol class="numeric-list square-marker">
                                            <li>memiliki fasilitas yang lengkap</li>
                                            <li>privat tutor</li>
                                            <li>keamanan terjamin</li>
                                            <li>hasil terbukti dalam minggu ke 2</li>
                                            <li>pembayaran dilakukan setelah mendapat hasil</li>
                                        </ol>
                                   </div>
                                   </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <hr class="thin" ></div>
    <div class="main-content clear-float" id="Kegiatan">
        <h2 class="text-light"><u>Kegiatan</u></h2>
        <div class="tile-area no-padding">
            <div class="tile-group no-margin no-padding" style="width: 100%">
                <div>
                    <img id="gambar1" src="assets/image/1.jpeg" style="height: 300px; margin-bottom: 10px;">
                </div>
                <div>
                    <img id="gambar2" src="assets/image/2.jpeg" style="height: 300px;">
                </div>

                
            </div></div></div></div>

    <div>         
    <footer style="background-color: #EFEAE3">
    <div class="bg-steel no-tablet-portrait no-phone">
        <div class="container padding20 fg-white">
            <div class="carousel bg-transparent" data-role="carousel" data-controls="false" data-markers="false" data-effect="fade" data-height="600" style="width: 100%; height: 600px;">
                <div class="slide fg-white">
                    <div id="Daftar" class="container padding40 fg-white">
                        <h3 class="text-light">ayo daftar! dan lihat perubahan pada tubuh anda pada minggu ke 2 bersama kami, <strong>Ega Gym</strong></h3>  
                        <form>
                        <div class="grid">
                            <div class="row cells2">
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="text" style="padding-right: 5px;">
                                        <span class="label">Nama</span>
                                        <span class="informer">Maukkan nama anda</span>
                                        <span class="placeholder" style="display: block;">Nama lengkap</span>
                                        <span class="icon mif-user"></span>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="email" style="padding-right: 5px;">
                                        <span class="label">Email</span>
                                        <span class="informer">Masukkan alamat email anda</span>
                                        <span class="placeholder" style="display: block;">Alamat email</span>
                                        <span class="icon mif-mail"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row cells2">
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="number" style="padding-right: 5px;">
                                        <span class="label">Umur</span>
                                        <span class="informer">Masukkan umur anda</span>
                                        <span class="placeholder" style="display: block;">Umur</span>
                                        <span class="icon mif-contacts-dialer"></span>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="text" style="padding-right: 5px;">
                                        <span class="label">Nomor HP</span>
                                        <span class="informer">Masukkan nomor HP anda</span>
                                        <span class="placeholder" style="display: block;">nomor HP</span>
                                        <span class="icon mif-discout"></span>
                                    </div>
                                </div>
                            </div>
                            <div clear-float>
                                <label class="input-control checkbox small-check">
                                <input type="checkbox"">
                                <span class="check"></span>
                                <span class="caption">Saya setuju dengan syarat dan aturan yang berlaku!</span>
                            </label>
                            </div>
                            <button action="" class="button big-button block-shadow success loading-pulse lighten" align="align-center"> Daftar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="kontak" class="container">
        <!-- kontakkkk-->
        <div class="cell colspan3 padding20 no-padding-top no-padding-bottom">
            <h2>Kontak</h2>
            <p>
                Informasi lebih lanjut, hubungi:
            </p>
            <div>
                <div class="icon mif-home mif-lg"><h3>Pogung Kidul, Sleman, Yogyakarta</h3></div>
                <div class="icon mif-contacts-dialer mif-lg"><h3>0296456256</h3></span>
                <div class="icon mif-mail mif-lg"><a href="ortegadaniel194@gmail.com"><h3>ortegadaniel194@gmail.com</h3></a></div>
                <div class="icon mif-facebook mif-lg"><a href="https://#"><h3>Ega Gym</h3></a></div>
                <div class="icon mif-twitter mif-lg"><a href="https://#"><h3>@happyEgaGym</h3></a></div>
                <div class="icon mif-earth mif-lg"><a href="https://#"><h3>www.EgaGym.com</h3></a></div>
            </div>
        </div>

        <div class="align-center padding20 text-small">
            Copyright 2017 <a href="index.php">Happy Ega Gym</a>
        </div>
    </div>
</footer>
</div>

</body></html>