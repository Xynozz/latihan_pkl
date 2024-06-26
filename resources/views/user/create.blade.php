@extends('layouts.component.frontend.admin')
@section('content')
<div class="col-12 col-xl">
    <div class="card">
        <div class="card-body p-4">
            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <label for="input13" class="form-label">Full Name</label>
                    <div class="position-relative input-icon">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="input13" value="{{ old('name') }}" placeholder="Full Name">
                        <span class="position-absolute top-50 translate-middle-y"><i
                                class="material-icons-outlined fs-5">person_outline</i>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input16" class="form-label">Email</label>
                    <div class="position-relative input-icon">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" id="input16" placeholder="Email">
                            <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">email</i></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input17" class="form-label">Password</label>
                    <div class="position-relative input-icon">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" id="input17" placeholder="Password">
                        <span class="position-absolute top-50 translate-middle-y"><i
                                class="material-icons-outlined fs-5">lock_open</i></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input17" class="form-label">Confirm Password</label>
                    <div class="position-relative input-icon">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password_confirmation" id="input17" placeholder="Password Confirm">
                        <span class="position-absolute top-50 translate-middle-y"><i
                                class="material-icons-outlined fs-5">lock_open</i></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input19" class="form-label">Is Admin</label>
                    <select id="input19" name="is_admin" class="form-select">
                        <option>Choose...</option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-danger px-4">Register</button>
                        <a href="{{ route('user.index') }}" class="btn btn-grd-primary px-4">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
