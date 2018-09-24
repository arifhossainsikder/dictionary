@extends('layouts.admin')


@section('content')
    <h3>All Users</h3>
    @if(session()->has('message.level'))
        <div class="alert alert-{{ session('message.level') }}">
            {!! session('message.content') !!}
        </div>
    @endif
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role['name']}}</td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>


    </div>

@endsection