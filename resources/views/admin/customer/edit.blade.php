@extends('admin.layouts.admin')

@section('title', 'Edit Customer')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>Edit Customer</h3>
                <a href="{{ route('customer.index') }}" class="btn btn-outline-secondary">Back to Customers</a>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Customer Information</h5>
                </div>
                <div class="card-body">
                    <form id="editCustomerForm" action="{{ route('customer.update', $customer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name"
                                    value="{{ $customer->first_name }}">
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name"
                                    value="{{ $customer->last_name }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phoneNumber" name="phone"
                                    value="{{ $customer->phone }}">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $customer->email }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="phoneNumber" class="form-label">BAN</label>
                                <input type="text" class="form-control" id="ban" name="bank_account_number"
                                    value="{{ $customer->bank_account_number }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="notes" class="form-label">Notes</label>
                                <textarea class="form-control" id="notes" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div>
                                <button type="button" class="btn btn-outline-secondary me-2">Cancel</button>
                                <button type="submit" class="btn" style="background-color: #793509; color: white;">
                                    <i class="far fa-save"></i> Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
