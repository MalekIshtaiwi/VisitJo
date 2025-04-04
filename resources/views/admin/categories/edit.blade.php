@extends('admin.layouts.admin')

@section('title', 'Edit Category')

@section('content')
<div class="container mt-5 bg-light p-4 rounded">
    <h3 class="mb-4">Edit Category</h3>

    {{-- Show validation errors --}}
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

    {{-- Edit Category Form --}}
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Category Name --}}
        <div class="mb-3">
            <label for="type" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('name', $category->name) }}" required>
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description (optional)</label>
            <textarea class="form-control" name="description" rows="3">{{ old('description', $category->description) }}</textarea>
        </div>

        <button class="btn" style="background-color: #793509; color: white;" type="submit">Update Category</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection
