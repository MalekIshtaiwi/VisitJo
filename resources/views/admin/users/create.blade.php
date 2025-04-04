@extends('admin.layouts.admin')

@section('title', 'Add User')

@section('content')
    <div class="container mt-5">
        <h3>Add New User</h3>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone">
            </div>

            <div class="mb-3">
                <label>Address</label>
                <input type="text" class="form-control" name="address">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn" style="background-color: #793509; color: white;">Add User</button>
        </form>
    </div>
@endsection
