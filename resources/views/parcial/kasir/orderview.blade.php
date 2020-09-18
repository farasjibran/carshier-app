@extends('layouts.main')

@section('content')
<div class="container-fluid mb-2">
    <div class="row">
        <div class="col-8 p-3">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #FCF0E2;">
                    <h6 class="m-0 font-weight-bold" style="color: black;">Order</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    @foreach($food as $foods)
                    <div class="col-2 mb-4 item-cashier" data-id="{{$foods['id_makanan']}}" data-name="{{$foods['nama_makanan']}}" data-price="{{$foods['harga']}}" data-image="{{$foods['foto_makanan']}}">
                        <div style="border: none;" class="card text-center">
                            <img style="border-radius: 15px !important; width: 90px;" class="rounded mx-auto d-block" src="img/{{ $foods['foto_makanan'] }}" class="card-img-top" alt="...">
                            <div class="card-body p-2">
                                <h5 class="h6 card-title mb-1 font-weight-bold text-dark">{{ $foods['nama_makanan'] }}</h5>
                                <p style="font-size: 12px;" class="card-text text-dark">Rp {{ $foods['harga'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-4 p-3">
            <div class="card shadow row mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #FCF0E2;">
                    <h6 class="mb-2 font-weight-bold col-9" style="color: black;">Curent Order</h6>
                    <div class="col-2 bg-white p-0"><button type="button" class="btn btn-sm btn-outline-danger" style="width: 68px;">Clear</button></div>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div style="height: 300px;" id="current-order" class="overflow-auto">
                        <!-- Content -->
                    </div>
                </div>
            </div>

            <div class="card shadow p-3 mt-3">
                <div class="row">
                    <p class="col-8">Subtotal : </p>
                    <p class="col-4 text-right"> Rp 20000 </p>
                </div>

                <hr>
                <div class="row">
                    <p class="col-8 h4">Total : </p>
                    <p class="col-4 text-right"> Rp 20000 </p>
                </div>
            </div>

            <button type="button" id="pay" class="btn btn-danger btn-lg btn-block mt-3 shadow">Pay</button>
        </div>
    </div>
</div>
@endsection
