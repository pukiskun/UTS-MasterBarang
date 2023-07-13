<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Master Barang</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.scss')
</head>

<body style="background-image: url('{{ Vite::asset('resources/images/1120.jpg') }}'); background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-center pt-5 mt-5">
                    <h1 class="text-dark">Master Barang</h1>
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image">
                    <div class="col-md-2 offset-md-5 mt-4">
                        <div class="d-grid gap-2">
                            <a class="btn btn-outline-light" href="{{ route('home') }}">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
