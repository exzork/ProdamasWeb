@extends('layouts.desain')
@section('main-tentang', 'active')
@section('pokmas', 'active')

@section('title', 'Pokmas')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/pokmas.min.css') }}">
    <style>
        body {
            /* background-color: rgb(226, 225, 225); */
        }

        .banner {
            text-align: center;
            margin-top: 50px;
        }

        h2 h3 {
            font-family: "Inter", sans-serif;
        }

        p ol {
            font-family: "Montserrat", sans-serif;
        }

        .card {
            background-color: white;
            width: 100%;
            margin: auto;
            margin-top: 10px;
            border-radius: 5px;
        }

        .tableauPlaceholder {
            width: 100%;
            max-width: 1100px;
            margin: auto;
        }

    </style>
@endsection

@section('content')
    <div class="card">
        <!-- awal jumbotron -->
        <div class="container-fluid banner">
            <div class="container banner-content">
                <h2><u>POKMAS</u></h2>
                <h5>Kelompok Masyarakat (POKMAS) adalah warga masyarakat yang telah dipilih melalui Musyawarah Kelurahan untuk melaksanakan Swakelola Prodamas Plus</h5>
            </div>
        </div>
        <!-- akhir jumbotrom -->

        <!--pengertian pokmas-->
        <section class="tentang mt-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 py-5">
                        <img src="{{asset('img/pokmas.jpg')}}" class="img-fluid rounded-3">
                    </div>
                    <div class="col-md-6 py-5">
                        {{-- <h1 class="text-center mb-5">Tentang Prodamas</h1> --}}
                        <p>Pokmas adalah kelompok
                            masyarakat yang dibentuk di tingkat kelurahan melalui mekanisme musyawarah kelurahan,
                            untuk ditunjuk sebagai pelaksana pengadaan barang/jasa kegiatan Program
                            Pemberdayaan Masyarakat Plus.</p>
                        <p>Pokmas beranggotakan 10 (sepuluh) orang yang dapat dipilih dari berbagai unsur masyarakat yang memiliki
                            kemampuan dan komitmen untuk melaksanakan pekerjaan swakelola,
                            diutamakan dari Pengurus RT dan Pengurus RW.</p>
                        <p>Pokmas harus memenuhi ketentuan sebagai berikut :
                        <ol>
                            <li>Telah mendapatkan pengesahan dari Camat;</li>
                            <li>Memiliki struktur organisasi/pengurus yang ditandatangani oleh Ketua Pokmas;</li>
                            <li>Memiliki sekretariat yang berdomisili di kelurahan setempat dibuktikan dengan surat keterangan dari kelurahan.</li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--end pengertian pokmas-->

    <!--Judul data pokmas-->
    <div>
        <h3 style='text-align: center;'><u>Data Pokmas</u></h3>
        <br>
    </div>


    <!--Grafik Pokmas-->
    <div class='tableauPlaceholder' id='viz1641401977071' style='position: relative;'>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='ProfilPokmas&#47;Sheet3' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-GB' />
            <param name='filter' value='publish=yes' />
        </object>
    </div>
    <script type='text/javascript'>
        var divElement = document.getElementById('viz1641401977071');
        var vizElement = divElement.getElementsByTagName('object')[0];
        vizElement.style.width = '100%';
        vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>
    <!--end grafik pokmas-->




    </div>
    </div>
@endsection
