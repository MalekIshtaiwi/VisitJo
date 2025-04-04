@extends('admin.layouts.admin')
@section('title', 'Add Category')

@section('content')
<div class="container mt-5">
    <h3>Add New Category</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following errors:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="type" class="form-label">Category Type</label>
            <input type="text" name="name" class="form-control" placeholder="New Category Name" required value="{{ old('type') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description (optional)</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
        </div>

        <button class="btn" style="background-color: #793509; color: white;" type="submit">Add Category</button>
    </form>
</div>
@endsection
