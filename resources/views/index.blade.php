<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap 5.3 CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bg-image.css') }}">

    <title>

        GIBS

    </title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="col-10 col-sm-8 col-md-6 col-lg-4 bg-light px-3 py-5 px-sm-5 border border-primary border-5"
            style="border-radius: 25px">
            <!-- <h1 class="col-10 fs-5 text-center mx-auto mb-5 py-2 shadow" style="border-radius: 10px">
                Selamat Datang
            </h1> -->

            <!-- <h1 class="text-primary fs-1 fw-bold text-center mx-auto my-5 p-3 shadow"
                style="width: max-content; border-radius: 10px; transform: rotate(352deg)">
                TECH <br> NEWS
            </h1> -->

            <div class="d-flex flex-column align-items-center">
                <a href="{{ route('login') }}" class="btn btn-primary col-10 py-2">Login</a>
                <div class="my-2"><small>atau</small></div>
                <a href="{{ route('register') }}" class="btn btn-success col-10 py-2">Register</a>
            </div>
        </div>
    </div>

    {{-- Bootstrap 5.3 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
