@php use Illuminate\Support\Str; @endphp
@extends('admin.layouts.admin')
@push('extraStyle')
    <style>
        .card-header {
            background-color: #793509;
            color: white;
        }
    </style>
@endpush

@section('title', 'Admins')

@section('content')
    <div class="container mt-5 bg-light p-4 rounded">
        <div class="row justify-content-between mb-4">
            <div class="col-md-6">
                <h3 class="mb-0">Admins</h3>
            </div>
            <div class="col-md-3 text-md-end">
                <a href="#" class="btn" style="background-color: #793509; color: white;">
                    <i class="fas fa-plus me-1"></i> Add Admin
                </a>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">Admin List</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ Str::of($admin->role)->replace('_', ' ')->title() }}</td>
                                <td class="text-center">
                                    <a href="" style="color: #2c2c2c;" class="ms-1 me-1"><i
                                            class="far fa-edit"></i></a>
                                    <a href="" style="color: #2c2c2c;" class="ms-1 me-1"><i
                                            class="far fa-eye"></i></a>
                                    <a href="#" style="color: #2c2c2c;" class="ms-1 me-1" data-bs-toggle="modal"
                                        data-bs-target="#deleteConfirmModal">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
