@extends('template')
@section('main')
<div class="row">
    <div class="col-sm-12">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    </div>

    <div>
        <a style="margin: 19px;" href="{{ route('users.create')}}" class="btn btn-primary">New user</a>
    </div>

    <div class="col-sm-12">
        <h1 class="display-3">Users</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Avatar</td>
                    <td>Email</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img src="/storage/{{ $user->avatar }}" alt="Avatar" width="40" height="40"></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>
                        <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <div>
</div>
@endsection
