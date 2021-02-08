@extends('layouts.new_layouts.master')
@section('content')

<div class="header-banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-9 col-sm-10">
                <div class="banner-content">
                    <h4 class="sub-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">SELAMAT DATANG DI SATELIT</h4>
                    <h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s"><span>GSJA</span> GETSEMANI </h1>
                    <a href="{{route('monitoring')}}" class="column wow fadeInUp btn btn-outline-danger hover-box mt-50" type="button" data-wow-duration="1.5s" data-wow-delay="2.6s" name="button">CEK KURSI</a>
                    <!-- <h5 class="column wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s">Ruko Permata Juanda Super Blok B/70-71 Jl. Raya Juanda - Waru Sidoarjo</h5> -->
                    <!-- <h4 class="column wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.6s" margin="left 30px">Cek Kursi</h4> -->

                    <!-- <a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="#contact">Ruko Permata Juanda Super Blok B/70-71 Jl. Raya Juanda - Waru Sidoarjo</a> -->
                </div> <!-- banner content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <!-- <div class="banner-image bg_cover" style="background-image: url({{URL::asset('assets/images/banner/banner-image.png')}})"></div> -->
    <div class="banner-image bg_cover" ></div>
</div> <!-- header banner -->

</header>

<!--====== HEADER PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about" class="about-area pt-80 pb-130">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="about-image mt-50 clearfix">
                <div class="single-image float-left">
                    <img src="{{asset('assets/images/about/about-1.png')}}" alt="About">
                </div> <!-- single image -->
                <div data-aos="fade-right" class="about-btn">
                    <a class="main-btn" href="#"><span>Renungan</span> Harian </a>
                </div>
                <div class="single-image image-tow float-right">
                    <img src="{{asset('assets/images/about/about-2.png')}}" alt="About">
                </div> <!-- single image -->
            </div> <!-- about image -->
        </div>
        <div class="col-lg-6">
            <div class="about-content mt-45">
                <h4 class="about-welcome">Tuhan Tahu Apa Yang Terbaik</h4>
                <h3 class="about-title mt-10">Kejadian (37:1-36);</h3>
                <p class="mt-25">Ketika Anda membaca kehidupan Yusuf, Anda melihat gambar Tuhan Yesus Kristus di dalam dirinya. Yusuf sangat dikasihi oleh ayahnya (3; Matius 3:17), dibenci dan dicemburui oleh saudara- saudaranya (Yohanes 15:25; Markus 15:10). Ada persekongkol- an untuk mencelakakannya, ia dijual sebagai budak, dipenjarakan secara tidak adil, dan dibuat menderita. Namun, ia beranjak dari penderitaan kepada kemuliaan dan menjadi penyelamat bagi orang- orang yang telah menolaknya. Tujuan Tuhan bagi semua anak-anak-Nya ialah bahwa kita menjadi seperti Putra-Nya (Roma 8:29).
                    <br> <br>Tujuan itu mulia, tetapi prosesnya menyakitkan. Baik Yesus maupun Yusuf harus menderita terlebih dulu sebelum mereka dapat memasuki kemuliaan (Lukas 24:26; 1 Petrus 5:10). Seandainya Yusuf tetap tinggal di rumah, ayahnya mungkin akan memanjakannya dan merusak karakternya. Tuhan tahu apa yang terbaik. Sebagaimana Firman Tuhan bagi kita saat ini, impian yang Tuhan berikan bagi Yusuf juga memberi keyakinan yang ia perlukan ketika perjalanan hidup terasa sulit.</p>
                <a class="main-btn mt-25" href="#">learn more</a>
            </div> <!-- about content -->
        </div>
    </div> <!-- row -->
</div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="service" class="services-area pt-125 pb-130 gray-bg">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="section-title text-center pb-20">
                <h5 class="sub-title mb-15">JADWAL KEGIATAN</h5>
            </div> <!-- section title -->
        </div>
    </div> <!-- row -->
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <div class="services-icon">
                    <i class="lni-paint-roller"></i>
                </div>
                <div class="services-content mt-15">
                    <h4 class="services-title">Ibadah Umum Pagi</h4>
                    <p class="mt-20">Minggu Jam 08.00 WIB - Selesai</p>
                </div>
            </div> <!-- single services -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                <div class="services-icon">
                    <i class="lni-blackboard"></i>
                </div>
                <div class="services-content mt-15">
                    <h4 class="services-title">Ibadah Sekolah Minggu</h4>
                    <p class="mt-20">Minggu Jam 08.30 WIB - Selesai</p>
                </div>
            </div> <!-- single services -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                <div class="services-icon">
                    <i class="lni-home"></i>
                </div>
                <div class="services-content mt-15">
                    <h4 class="services-title">Ibadah Kaum Muda</h4>
                    <p class="mt-20">Minggu Jam 08.30 WIB - Selesai</p>
                </div>
            </div> <!-- single services -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <div class="services-icon">
                    <i class="lni-briefcase"></i>
                </div>
                <div class="services-content mt-15">
                    <h4 class="services-title">Ibadah Umum Sore</h4>
                    <p class="mt-20">Minggu Jam 16.00 WIB - Selesai</p>
                </div>
            </div> <!-- single services -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                <div class="services-icon">
                    <i class="lni-handshake"></i>
                </div>
                <div class="services-content mt-15">
                    <h4 class="services-title">Doa Puasa</h4>
                    <p class="mt-20">Jumat Jam 12.00 WIB - Selesai</p>
                </div>
            </div> <!-- single services -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                <div class="services-icon">
                    <i class="lni-grow"></i>
                </div>
                <div class="services-content mt-15">
                    <h4 class="services-title">Kebaktian Doa Malam</h4>
                    <p class="mt-20">Minggu Jam 19.00 WIB - Selesai</p>
                </div>
            </div> <!-- single services -->
        </div>
    </div> <!-- row -->
</div> <!-- container -->
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== TEAM PART START ======-->

<section id="team" class="team-area pt-125 pb-130 gray-bg">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="section-title text-center pb-20">
                <h5 class="sub-title mb-15">Laporan Kegiatan Gereja</h5>
            </div> <!-- section title -->
        </div>
    </div> <!-- row -->
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <div class="team-image">
                    <img src="{{asset('assets/images/team/team-1.jpg')}}" alt="Team">
                </div>
                <div class="team-content">
                    <h4 class="team-name"><a href="#">Rob Hope</a></h4>
                    <span class="sub-title">CEO & Founder</span>
                    <ul class="social mt-25">
                        <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                    </ul>
                </div>
            </div> <!-- single team -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                <div class="team-image">
                    <img src="{{asset('assets/images/team/team-2.jpg')}}" alt="Team">
                </div>
                <div class="team-content">
                    <h4 class="team-name"><a href="#">Patric Green</a></h4>
                    <span class="sub-title">Chief Designer</span>
                    <ul class="social mt-25">
                        <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                    </ul>
                </div>
            </div> <!-- single team -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                <div class="team-image">
                    <img src="{{asset('assets/images/team/team-3.jpg')}}" alt="Team">
                </div>
                <div class="team-content">
                    <h4 class="team-name"><a href="#">Daryl Dixon</a></h4>
                    <span class="sub-title">Consultant</span>
                    <ul class="social mt-25">
                        <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                    </ul>
                </div>
            </div> <!-- single team -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                <div class="team-image">
                    <img src="{{asset('assets/images/team/team-4.jpg')}}" alt="Team">
                </div>
                <div class="team-content">
                    <h4 class="team-name"><a href="#">Mark Parker</a></h4>
                    <span class="sub-title">Intern</span>
                    <ul class="social mt-25">
                        <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                    </ul>
                </div>
            </div> <!-- single team -->
        </div>
    </div> <!-- row -->
</div> <!-- container -->
</section>

@endsection
