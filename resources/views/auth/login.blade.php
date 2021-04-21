<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Kelulusan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors') }}/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="{{ asset('css') }}/shared/style.css">


    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.2/sweetalert2.min.css" integrity="sha512-gPshpNHQcBrCcqKFYZ11amBNKuqpRgMwjUT7NE6986yWK9UQCHFUDYjpAnP5pVqOS/fD3MsAl5zgoZwvsGEGrA==" crossorigin="anonymous" />

</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-6 text-center">
                        <div class="text my-5">
                            <h4 class="text-white">Pengumuman Kelulusan</h4>
                            <h1 class="text-white">Dibuka Dalam</h1>
                        </div>

                        <div id="target">

                        </div>
                    </div>


                    <div class="col-lg-4 mx-auto">
                        <div class="auto-form-wrapper">
                            <h2 class="mb-3">Login</h2>
                            <form action="/login" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="label">Username</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Username" name="username">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>

                                    @error('username')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="*********" name="password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>

                                    @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                                <div class="form-group d-flex justify-content-between text-center">
                                    <p>Silahkan Login Menggunakan Username dan Password Ujian Sekolah.</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('vendors') }}/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('vendors') }}/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('js') }}/shared/off-canvas.js"></script>
    <!-- endinject -->
    <script src="{{ asset('js') }}/shared/jquery.cookie.js" type="text/javascript"></script>

    <!-- SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.2/sweetalert2.min.js" integrity="sha512-WQHFU2G1j9ca/OT3ozRySJtB2K/yy/Fg44kHveA65IrrYM2qbzgXLgJBvwV6Spd4aziAJaklY8T7thMcBejq4w==" crossorigin="anonymous"></script>


    @if(session('error-log'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000,
        })

        Toast.fire({
            icon: 'error',
            title: '{{ session("error-log") }}'
        })
    </script>
    @endif
    @if($setting)

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("{{ $setting->waktu }}").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("target").innerHTML = '<h1 class="text-white">' + days + "H " + hours + "J " +
                minutes + "M " + seconds + "D " + '</h1>';

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("target").innerHTML = '<h1 class="text-white"> Silahkan Login </h1>';
            }
        }, 1000);
    </script>
    @endif
</body>

</html>