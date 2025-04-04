@extends('admin.layouts.admin')

@section('title', 'Service Categories')

@section('content')
@if (session('success'))
    <div class="row justify-content-center mt-3">
        <div class="col-md-11">
            <div class="alert alert-success alert-dismissible fade show shadow-sm border-start border-success border-4" role="alert">
                <div class="d-flex align-items-center">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>{{ session('success') }}</strong>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif

    <div class="container mt-5 bg-light p-4 rounded">
        <div class="row justify-content-between mb-4">
            <div class="col-md-6">
                <h3 class="mb-0">All Categories</h3>
            </div>
            <div class="col-md-3 text-md-end">
                <a href="{{ route('categories.create') }}" class="btn" style="background-color: #793509; color: white;">
                    <i class="fas fa-plus me-1"></i> Add Category
                </a>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">Category List</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{ route('categories.edit', $category->id) }}" style="color: #2c2c2c;"
                                        class="ms-1 me-1"><i class="far fa-edit"></i></a>
                                    <a href="" style="color: #2c2c2c;" class="ms-1 me-1"><i
                                            class="far fa-eye"></i></a>
                                    <a href="/" class="ms-1 me-1" style="color: #2c2c2c;" data-bs-toggle="modal"
                                        data-bs-target="#deleteConfirmModal"
                                        data-delete-url="{{ route('categories.destroy', $category->id) }}">
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
    <!-- Delete Confirmation Modal -->
    <form method="POST" id="deleteCategoryForm">
        @csrf
        @method('DELETE')
        <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this category? This action cannot be undone.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete
                            Category</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        document.querySelectorAll('[data-delete-url]').forEach(button => {
            button.addEventListener('click', function() {
                const deleteUrl = this.getAttribute('data-delete-url');
                document.getElementById('deleteCategoryForm').action = deleteUrl;
            });
        });

        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            document.getElementById('deleteCategoryForm').submit();
        });
    </script>


@endsection
