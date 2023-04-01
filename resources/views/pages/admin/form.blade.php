@extends('layouts/adminindex')

@section('title')
Tambah Barang
@endsection

    <!-- Custom fonts for this template-->
   @include('includes.admin.style')

@section('name')
    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('includes.admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Form Tambah Barang </h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kode_barang"> Kode Barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                            </div>
                            <div class="form-group">
                                <label for="kode_barang"> Kode Barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           @include('includes.admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('includes.admin.topbutton')

    <!-- Logout Modal-->
    @include('includes.admin.logout')

    <!-- Bootstrap core JavaScript-->
   @include('includes.admin.scripts')

    @endsection