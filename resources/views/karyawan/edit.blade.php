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
    <title>Edit Karyawan</title>

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
                            <h1 class="m-0">Edit Karyawan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Karyawan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="container mt-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('updateKaryawan', ['id' => $karyawan->id_karyawan]) }}" method="post">
                                @csrf
                                <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id_user }}">
                                <div class="form-group">
                                    <label for="nama">Nama Karyawan</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required='required' placeholder="Masukkan Nama Karyawan" value="{{ old('nama', $karyawan->nama) }}">
                                </div>
                                <div class="form-group">
                                    <label for="posisi">Posisi</label>
                                    <input type="text" name="posisi" id="posisi" class="form-control" required='required' placeholder="Masukkan Posisi Karyawan" value="{{ old('posisi', $karyawan->posisi) }}">
                                </div>
                                <div class="form-group">
                                    <label for="gaji">Gaji</label>
                                    <select name="gaji" id="gaji" class="form-control" required='required'>
                                        <option value="" disabled>Pilih Gaji Karyawan</option>
                                        <option value="3000000" {{ old('gaji', $karyawan->gaji) == 3000000 ? 'selected' : '' }}>Rp 3.000.000</option>
                                        <option value="4000000" {{ old('gaji', $karyawan->gaji) == 4000000 ? 'selected' : '' }}>Rp 4.000.000</option>
                                        <option value="5000000" {{ old('gaji', $karyawan->gaji) == 5000000 ? 'selected' : '' }}>Rp 5.000.000</option>
                                        <option value="6000000" {{ old('gaji', $karyawan->gaji) == 6000000 ? 'selected' : '' }}>Rp 6.000.000</option>
                                        <option value="7000000" {{ old('gaji', $karyawan->gaji) == 7000000 ? 'selected' : '' }}>Rp 7.000.000</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="number" name="umur" id="umur" class="form-control" required='required' placeholder="Masukkan Umur Karyawan" value="{{ old('umur', $karyawan->umur) }}">
                                </div>
                                <div class="form-group">
                                    <label for="kontak">Kontak</label>
                                    <input type="number" name="kontak" id="kontak" class="form-control" required='required' placeholder="Masukkan Kontak Karyawan" value="{{ old('kontak', $karyawan->kontak) }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control" required='required' placeholder="Masukkan Alamat Karyawan" rows="3">{{ old('alamat', $karyawan->alamat) }}</textarea>
                                </div>
                                <div class="text-right">
                                    <a href="{{ route('daftarKaryawan') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('layouts.logoutModal')

    <!-- Bootstrap core JavaScript-->
    {{-- @include('sweetalert::alert') --}}
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

</body>

</html>
