@extends('layouts/adminindex')


@section('title')
Gallery
@endsection

@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('includes.admin.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                            <a href="#" class="btn btn-success btn-icon-split"data-toggle="modal" data-target="#adddata">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add Data</span>
                            </a>
                           
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    
                                  
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td> 
                                                <a href="#" class="btn btn-primary icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                    <span class="text">Edit</span>
                                                </a>
                                                         
                                                 <a href="#" class="btn btn-danger btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text">Delete</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="adddata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add data</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <!--add modal-->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                      <label for="id">Id</label>
                                      <input type="id" class="form-control" id="id" aria-describedby="id">
                                    </div>
                                    <div class="form-group">
                                      <label for="text">Tanggal</label>
                                      <input type="date" class="form-control" id="inputtext">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Nama Produk</label>
                                        <input type="text" class="form-control" id="inputtext">
                                      </div>
                                      <div class="form-group">
                                        <label for="text">Harga</label>
                                        <input type="text" class="form-control" id="inputtext">
                                      </div>
                                      <div class="form-group">
                                        <label for="text">Stok</label>
                                        <input type="text" class="form-control" id="inputtext">
                                      </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Add gambar</label>
                                        <input type="file" class="form-control-file" id="inputfile">
                                      </div>
                                      <div class="modal-footer">
                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                          <a class="btn btn-primary" href="#">Save</a>
                                      </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                        </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
@endsection