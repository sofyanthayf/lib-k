


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item">
                <div class="fill" style="background-image:url('<?= base_url() ?>assets/img/koleksi.jpg');"></div>
                <div class="carousel-caption">
                    <h2 class="text-right carousel-text"><strong>LIB-K, Library Kamu</strong></h2>
                    <h3 class="text-right carousel-text">Punya banyak koleksi buku<br>
                                           atau punya perpustakaan pribadi<br>
                                           tapi belum terdata dan tertata?<br>
                                           LIB-K membantu kamu mendata koleksimu<br>
                                           memudahkan pencarian dan pencatatan</h3>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('<?= base_url() ?>assets/img/pustaka.jpg');"></div>
                <div class="carousel-caption">
                    <h2 class="text-right carousel-text"><strong>LIB-K, Library Kita</strong></h2>
                    <h3 class="text-right carousel-text">Lingkungan dan komunitasmu punya perpustakaan?<br>
                                           tapi pendataan dan pencatatannya masih manual?<br>
                                           LIB-K membantu administrasi digital perpustakaanmu<br>
                                           dan menyediakan katalog di rumah anggotamu</h3>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('<?= base_url() ?>assets/img/kampus.jpg');"></div>
                <div class="carousel-caption">
                    <h2 class="text-right carousel-text"><strong>LIB-K, Library Kampus</strong></h2>
                    <h3 class="text-right carousel-text">Minat baca mahasiswa kurang?<br>
                                           pengelolaan perpustakaan masih manual?<br>
                                           LIB-K membantu administrasi digital perpustakaan kampus<br>
                                           dimana mahasiswa tetap bisa mencari buku<br>
                                           walapun perpustakaan sedang tutup</h3>
                </div>
            </div>

            <div class="item active">
                <div class="fill" style="background-image:url('<?= base_url() ?>assets/img/pustaka.jpg');"></div>
                <div class="carousel-caption">
                    <h1 class="text-right carousel-text"><strong>LIB-K</strong></h1>
                    <h2 class="text-right carousel-text"><strong>Solusi mudah<br>
                                           perpustakaan digital<br>
                                           bagi pribadi, komunitas<br> 
                                           atau institusi</strong></h2>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h4 class="page-header">Memiliki Katalog Perpustakaan Digital Sendiri</h4>
                <ul>
                    <li>Tidak perlu aplikasi perpustakaan yang mahal</li>
                    <li>Tidak perlu infrastruktur server dan jaringan permanen</li>
                    <li>Tidak perlu maintenance server yang rumit</li>
                    <li>Hanya butuh web-browser yang telah tersedia di perangkat Anda</li>
                    <li>Hanya fokus pada koleksi Anda saja</li>
                </ul>
            </div>
            <div class="col-md-6">
                <form role="form">
                    <fieldset>
                        <h4 class="page-header">Bangun Perpustakaan Digital Anda Hari Ini</h4>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                        </div>

                        <span class="button-checkbox">
                            <button type="button" class="btn" data-color="info">Remember Me</button>
                            <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
                            <a href="" class="btn btn-link pull-right">Forgot Password?</a>
                        </span>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="signup" class="btn btn-lg btn-primary btn-block">Register</a>
                            </div>
                        </div>
                    </fieldset>
                </form>                  
            </div>
        </div>

        <div class="row">
            <hr>
            <div class="col-lg-12">
                <h2 class="page-header">
                    <strong>LIB-K</strong> Solusi Perpustakaan Digital
                </h2>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-book"></i> Manajemen Koleksi</h4>
                    </div>
                    <div class="panel-body">
                        <p><strong>LIB-K</strong> membantu Anda menata koleksi buku perpustakaan Anda 
                            ke database koleksi secara digital, dengan interface yang sederhana dan mudah digunakan, sehingga semua koleksi tercatat dan terklasifikasi dengan baik, dan akan memudahkan Anda dalam menelusuri dan mengecek keberadaan koleksi Anda</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i> Katalog Online</h4>
                    </div>
                    <div class="panel-body">
                        <p><strong>LIB-K</strong> menyediakan database koleksi perpustakaan, mulai dari perpustakaan  pribadi hingga skala perpustakaan universitas yang memungkinkan sesama pengguna <strong>LIB-K</strong> untuk saling membantu dalam pencarian dan memenuhi kebutuhan literatur, serta memfasilitasi layanan literatur lintas perpustakaan</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-group"></i> Manajemen Anggota</h4>
                    </div>
                    <div class="panel-body">
                        <p>Bagi penggunaan personal, <strong>LIB-K</strong> memungkinkan untuk berbagi informasi kepemilikan buku yang mungkin akan mempertemukan Anda dengan pemilik literatur yang mungkin Anda butuhkan.<br> 
                        Untuk perpustakan umum, <strong>LIB-K</strong> menangani database keanggotaan perpustakaan Anda yang terintegrasi dengan layanan sirkulasi</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>


        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

