<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home - Kelulusan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors') }}/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="{{ asset('css') }}/shared/style.css">

    <link rel="shortcut icon" href="{{ asset('images') }}/favicon.ico" />

    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.2/sweetalert2.min.css" integrity="sha512-gPshpNHQcBrCcqKFYZ11amBNKuqpRgMwjUT7NE6986yWK9UQCHFUDYjpAnP5pVqOS/fD3MsAl5zgoZwvsGEGrA==" crossorigin="anonymous" />
    <style>
        #enclose:hover {
            animation: shake 0.5s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }

        .status {
            animation: shake 0.5s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-6 text-center">
                        <div class="text my-5">
                            <h1 class="text-white">Hai, {{ auth()->user()->name }}</h1>
                            <h3 class="text-white">Silahkan Buka Amplop Anda</h3>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </div>

                    </div>


                    <div class="col-lg-5 mx-auto text-center">
                        <a href="#" id="close" data-id="{{ auth()->user()->siswa->id }}">
                            <img src="{{ asset('images') }}/envelope/close.png" alt="" width="90%" id="enclose">
                            <div class="target text-center"></div>
                        </a>
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
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
        })

        Toast.fire({
            icon: 'error',
            title: '{{ session("error-log") }}'
        })
    </script>
    @endif

    <script>
        $("#close").on('click', function() {
            var id = $(this).attr('data-id');


            $.ajax({
                method: 'GET',
                url: '/siswa/get/' + id,
                success: function(result) {
                    if (result.status == 1) {
                        var ml = 40;
                        var status = 'Lulus';
                    } else if (result.status == 2) {
                        var ml = 25;
                        var status = 'Hubungi Wali Kelas';
                    } else {
                        var ml = 33;
                        var status = 'Tidak Lulus';
                    }
                    $("#enclose").hide();
                    var load = $(".target").append(`<div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
                                        <span class="sr-only">Loading...</span>
                                    </div>`);
                    var open = `<div>
                                <h1 class="text-dark status" style="position: absolute; z-index: 1; margin-top: 80px; margin-left: ` + ml + `%;">` + status + `</h1>
                                <img src="{{ asset('images') }}/envelope/open.png" alt="" width="90%" id="cnclose">
                            </div>`;
                    setTimeout(function() {
                        load.hide()
                        $("#close").append(open);
                    }, 3000);

                }
            })
        })
    </script>
</body>

</html>