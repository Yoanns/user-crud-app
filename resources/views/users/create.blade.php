@extends('template')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add a user</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">    
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" name="firstname"/>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" name="lastname"/>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password"/>
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar:</label>
                    <input type="file" class="form-control" name="avatar"/>
                </div>
                                
                <button type="submit" class="btn btn-primary">Add user</button>
            </form>
        </div>
    </div>
</div>
@endsection