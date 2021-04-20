<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }} - Kelulusan</title>

    <link rel="stylesheet" href="{{ asset('vendors') }}/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('vendors') }}/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="{{ asset('css') }}/shared/style.css">

    <link rel="stylesheet" href="{{ asset('css') }}/demo_1/style.css">

    <link rel="shortcut icon" href="{{ asset('images') }}/favicon.ico" />

    <!-- Sweetalert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.2/sweetalert2.min.css" integrity="sha512-gPshpNHQcBrCcqKFYZ11amBNKuqpRgMwjUT7NE6986yWK9UQCHFUDYjpAnP5pVqOS/fD3MsAl5zgoZwvsGEGrA==" crossorigin="anonymous" />

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
</head>

<body>
    <div class="container-scroller">

        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <h2 class="navbar-brand text-white">Kelulusan</h2>
                <!-- <a class="navbar-brand brand-logo" href="../../index.html">
                    <img src="{{ asset('images') }}/logo.svg" alt="logo" /> </a>
                <a class="navbar-brand brand-logo-mini" href="../../index.html">
                    <img src="{{ asset('images') }}/logo-mini.svg" alt="logo" /> </a> -->
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav">
                </ul>
                <form class="ml-auto search-form d-none d-md-block" action="#">

                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="{{ asset('images') }}/faces/face8.jpg" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="{{ asset('images') }}/faces/face8.jpg" alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->name }}</p>
                            </div>
                            <a class="dropdown-item">My Profile<i class="dropdown-item-icon ti-dashboard"></i></a>
                            <form action="/logout" method="post" class="logout">
                                @csrf

                                <button type="button" class="dropdown-item" onclick="logout()">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <!-- <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="profile-image">
                                <img class="img-xs rounded-circle" src="{{ asset('images') }}/faces/face8.jpg" alt="profile image">
                                <div class="dot-indicator bg-success"></div>
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">Allen Moreno</p>
                                <p class="designation">Premium user</p>
                            </div>
                        </a>
                    </li> -->
                    <li class="nav-item nav-category">Main Menu</li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon typcn typcn-coffee"></i>
                            <span class="menu-title">Data Users</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.index') }}">Data Administrator</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('guru.index') }}">Data Guru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('siswa.index') }}">Data Siswa</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nilai.index') }}">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">Data Nilai</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('surat.index') }}">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">Data Surat</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('setting.index') }}">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">Setting</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row page-title-header">
                        <div class="col-12">
                            <div class="page-header">
                                <h4 class="page-title">{{ $title }}</h4>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>

                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © kelulusan.com 2021</span>
                    </div>
                </footer>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('vendors') }}/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('vendors') }}/js/vendor.bundle.addons.js"></script>

    <script src="{{ asset('js') }}/shared/off-canvas.js"></script>
    <script src="{{ asset('js') }}/shared/misc.js"></script>

    <script src="{{ asset('js') }}/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- Sweetalert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.2/sweetalert2.min.js" integrity="sha512-WQHFU2G1j9ca/OT3ozRySJtB2K/yy/Fg44kHveA65IrrYM2qbzgXLgJBvwV6Spd4aziAJaklY8T7thMcBejq4w==" crossorigin="anonymous"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap.min.js"></script>


    @if(session('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
        })

        Toast.fire({
            icon: 'success',
            title: '{{ session("success") }}'
        })
    </script>
    @endif

    <script>
        $(".logout").on('click', function(e) {
            e.preventDefault();
            var form = this;
            Swal.fire({
                title: 'Logout ?',
                text: "Anda yakin logout?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    return form.submit();
                }
            })
        })


        $('.delete-form').on('click', function(e) {
            e.preventDefault();
            var form = this;
            Swal.fire({
                title: 'Hapus data ?',
                text: "Klik hapus untuk menghapus data",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    return form.submit();
                }
            })

        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('.table').DataTable({
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                columnDefs: [{
                        className: 'dtr-control',
                        responsivePriority: 1,
                        targets: 0
                    },
                    {
                        responsivePriority: 2,
                        targets: 1
                    }
                ]
            });

            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
    @yield('footer')
</body>

</html>