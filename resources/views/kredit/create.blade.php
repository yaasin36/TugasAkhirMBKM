{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('assets/img/uang.png') }}">
    <title>Kredit</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    @include('layouts.sidebar')

    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        @include('layouts.navbar')
        <!-- End of Topbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Kredit</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Tambah Kredit</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container mt-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('storeKredit') }}" method="post">
                                @csrf
                                <div>
                                    <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id_user }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama_kredit">Nama Kredit</label>
                                    <input type="text" name="nama_kredit" id="nama_kredit" class="form-control" required='required' placeholder="Masukkan Nama Kredit">
                                </div>
                                <div class="form-group">
                                    <label for="awal_kredit">Tanggal Kredit</label>
                                    <input type="date" name="awal_kredit" id="awal_kredit" class="form-control" required='required' placeholder="Masukkan Tanggal Kredit" onchange="calculateJatuhTempo()">
                                </div>
                                <div class="form-group">
                                    <label for="tenor">Tenor</label>
                                    <select class="form-control" name="tenor" id="tenor" required="required" onchange="calculateJatuhTempo()">
                                        <option value="1">1 Bulan</option>
                                        <option value="3">3 Bulan</option>
                                        <option value="6">6 Bulan</option>
                                        <option value="12">12 Bulan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="akhir_kredit">Jatuh Tempo</label>
                                    <input type="date" name="akhir_kredit" id="akhir_kredit" class="form-control" required='required' readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <select class="form-control" name="jumlah" id="jumlah" required="required">
                                        <option value="1000000">Rp 1.000.000</option>
                                        <option value="5000000">Rp 5.000.000</option>
                                        <option value="10000000">Rp 10.000.000</option>
                                        <option value="20000000">Rp 20.000.000</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status" required="required">
                                        <option value="Lunas">Lunas</option>
                                        <option value="Belum Lunas" selected>Belum Lunas</option>
                                    </select>
                                </div>

                                <div class="text-right">
                                    <a href="{{ route('daftarKredit') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Kelompok XX 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('layouts.logoutModal')

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>

    <script>
        function calculateJatuhTempo() {
            const awalKredit = document.getElementById('awal_kredit').value;
            const tenor = document.getElementById('tenor').value;

            if (awalKredit && tenor) {
                const awalKreditDate = new Date(awalKredit);
                const jatuhTempoDate = new Date(awalKreditDate.setMonth(awalKreditDate.getMonth() + parseInt(tenor)));
                const formattedDate = jatuhTempoDate.toISOString().split('T')[0];
                document.getElementById('akhir_kredit').value = formattedDate;
            }
        }
    </script>

</body>

</html>
