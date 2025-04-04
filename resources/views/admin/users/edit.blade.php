@extends('admin.layouts.admin')
@section('title', 'Edit User')

@section('content')
    <div class="container mt-5">
        <h3>Edit User</h3>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}">
            </div>

            <div class="mb-3">
                <label>Address</label>
                <textarea class="form-control" name="address">{{ old('address', $user->address) }}</textarea>
            </div>

            <button type="submit" class="btn" style="background-color: #793509; color: white;">
                Update User
            </button>
        </form>
    </div>
@endsection
