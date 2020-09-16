@extends('layouts.main')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View User</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Employes</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-900"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Action :</div>
                <a class="dropdown-item" href="#"><i class="fas fa-user-plus fa-sm fa-fw mr-3" style="color: green;"></i>Add Data</a>
                <a class="dropdown-item" href="#"></a>
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Account Create At</th>
                        <th>Account Update At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Account Create At</th>
                        <th>Account Update At</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($user as $u)
                    <tr>
                        <td>{{ $u->id}}</td>
                        <td>{{ $u->name}}</td>
                        <td>{{ $u->email}}</td>
                        <td>{{ $u->role}}</td>
                        <td>{{ $u->created_at}}</td>
                        <td>{{ $u->updated_at}}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-icon-split editbtn" style="padding-right: 6%;">
                                <span class="icon text-white">
                                    <i class="fas fa-edit"></i>
                                </span>
                                <span class="text">Edit Data</span>
                            </button>
                            <button type="button" class="btn btn-danger btn-icon-split deletebtn" style="padding-right: 2%; margin-top: 10px;">
                                <span class="icon text-white">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete Data</span>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
