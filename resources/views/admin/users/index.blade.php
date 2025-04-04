@extends('admin.layouts.admin')

@section('title', 'Users')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-11">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <h3>Users</h3>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search anything..."
                                        aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group mb-3">
                                <select class="form-select" name="" id="">
                                    <option value="">Newest to Old</option>
                                    <option value="">Old to Newest</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <a href="{{ route('users.create') }}" class="btn" style="background-color: #793509; color: white;">
                                <i class="fas fa-plus"></i> User
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered" style="border: 1px solid #dddddd">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>#Bookings</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->bookings->count() }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="ms-1 me-1 text-warning">
                                            <i class="far fa-edit" style="color: #2c2c2c;"></i>
                                        </a>
                                        <a href="#" class="ms-1 me-1"
                                        style="color: #2c2c2c;"
                                           data-bs-toggle="modal"
                                           data-bs-target="#deleteConfirmModal"
                                           data-delete-url="{{ route('users.destroy', $user->id) }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Hidden Delete Form --}}
                    <form id="deleteUserForm" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this user? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete User</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Delete Logic Script --}}
    <script>
        document.querySelectorAll('[data-delete-url]').forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('deleteUserForm').action = this.getAttribute('data-delete-url');
            });
        });

        document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
            document.getElementById('deleteUserForm').submit();
        });
    </script>
@endsection
