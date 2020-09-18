@extends('layouts.main')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Voice Food</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Voice</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-900"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Action :</div>
                <a class="dropdown-item" href="#"><i class="fas fa-file-pdf fa-sm fa-fw mr-3" style="color: blue;"></i>Generate Pdf</a>
                <a class="dropdown-item" href="#"><i class="fas fa-file-excel fa-sm fa-fw mr-3" style="color: green;"></i>Generate Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Item</th>
                        <th>Date</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Item</th>
                        <th>Date</th>
                        <th>Price</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php ($no = 1)
                    @foreach($transaksi as $transaction)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <th>{{ $transaction->id_transaksi }}</th>
                        <th>
                            @foreach($transaction->detailorder as $food)
                            {{ $food->food->nama_makanan }} x{{ $food->qty }}
                            <br>
                            @endforeach
                        </th>
                        <th> {{ $transaction->tanggal_order }} </th>
                        <th> {{ $transaction->total_bayar }} </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add User Modal-->
<div class="modal fade" id="foodAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Food Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="{{ route('addfood') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Food Name</label>
                        <input type="text" name="nama_makanan" class="form-control @error('foodname') is-invalid @enderror" placeholder="Enter food name" required autofocus>
                        @error('foodname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Price Food</label>
                        <input type="text" name="harga" class="form-control @error('pricefood') is-invalid @enderror" placeholder="Enter price" required>
                        @error('pricefood')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Food Stock</label>
                        <input type="text" name="stok_makanan" class="form-control @error('stockfood') is-invalid @enderror" placeholder="Enter stock"> </input>
                        @error('stockfood')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Food Picture</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Add Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
