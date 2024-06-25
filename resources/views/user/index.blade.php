@extends('layouts.component.frontend.admin')
@section('content')
<h6 class="mb-0 text-uppercase">Striped rows</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div>
            <a href="{{ route('user.create') }}" class="btn btn-success px-4 raised d-flex gap-2"><i
                    class="material-icons-outlined">account_circle</i>Add User</a>
        </div>
        <table class="table mb-0 table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Is Admin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->is_admin ? 'Admin' : 'User'}}</td>
                    <td>
                        <a href="{{ route('user.edit', $item->id) }}" type="button" class="btn btn-outline-info px-2">EDIT</a>
                        <a href="{{ route('user.show', $item->id) }}" type="button" class="btn btn-outline-primary px-2"><i class="material-icons-outlined">search</i></a>
                        <button type="button" class="btn btn-outline-danger px-2">DELETE</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
