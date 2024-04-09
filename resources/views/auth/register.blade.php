<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('template/assets/img/favicon.png') }}">
    <title>
    Argon Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('template/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('template/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('template/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body class="">
    <main class="main-content  mt-0">
        <div class="page-header align-items-start pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Register Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" role="form">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama" aria-label="Name" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" aria-label="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" aria-label="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control @error('sim') is-invalid @enderror" name="sim" value="{{ old('sim') }}" placeholder="Nomor SIM" required>
                                @error('sim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Nomor Telepon" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="address" rows="3" placeholder="Alamat"></textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Daftar</button>
                            </div>
                            <p class="text-sm mt-3 mb-0">Sudah punya akun ? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Login</a></p>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--   Core JS Files   -->
  <script src="{{ asset('template/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('template/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('template/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js') }}"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('template/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html/>