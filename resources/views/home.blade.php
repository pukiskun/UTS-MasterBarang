<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/main.css')
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <section class="section about-section bg-dark" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="light-color">Ramaditya Bhaskara Mawanta</h3>
                            <h6 class="theme-color lead">Mahasiswa Sistem Informasi</h6>
                            <p class="text-justify text-light">Ini adalah bagian dari project UTS mata kuliah Pemrograman
                                Framwork
                                kelas IS 03-02 yang
                                diampu oleh Pak Adzanil.</p>
                            <div class="row about-list">
                                <div class="col-md-6">

                                    <div class="media text-light">
                                        <h4 class="text-danger">NIM</h4>
                                        <p>1204200109</p>
                                    </div>
                                    <div class="media">
                                        <h4 class="text-danger">TTL</h4>
                                        <p>13 July 2002</p>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <h4 class="text-danger">E-mail</h4>
                                        <p>fatalitycloud@gmail.com</p>
                                    </div>
                                    <div class="media">
                                        <h4 class="text-danger">No. Telp</h4>
                                        <p>087-765-863-710</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="{{ Vite::asset('resources/images/foto.jpg') }}" title="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>

</html>
