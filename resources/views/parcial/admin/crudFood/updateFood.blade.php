@extends('layouts.main')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- Edit User Modal-->
<div class="modal fade" id="foodEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Food Data</h5>
                <a href="{{ route('userview')}}" class="close" type="button" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <form method="post" action="{{ route('updatefood', $f->id_makanan)}}" id="form-edit" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Food Name</label>
                        <input type="text" value="{{ $f->nama_makanan}}" name="nama_makanan" class="form-control @error('foodname') is-invalid @enderror" placeholder="Enter food name" required autofocus>
                        @error('foodname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Price Food</label>
                        <input type="text" value="{{ $f->harga}}" name="harga" class="form-control @error('pricefood') is-invalid @enderror" placeholder="Enter price" required>
                        @error('pricefood')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Food Stock</label>
                        <input type="text" value="{{ $f->stok_makanan}}" name="stok_makanan" class="form-control @error('stockfood') is-invalid @enderror" placeholder="Enter stock"> </input>
                        @error('stockfood')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Food Picture</label>
                        <input value="{{ $f->foto_makanan}}" type="file" name="foto" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('userview')}}" type="button" class="btn btn-secondary text-white">Cancel</a>
                    <button type="submit" form="form-edit" class="btn btn-primary">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script>
    $('#foodEditModal').modal('show')
</script>
