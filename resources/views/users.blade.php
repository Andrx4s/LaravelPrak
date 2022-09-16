@extends('index')

@section('title', 'Страница всех пользователей')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">login</th>
                        <th scope="col">age</th>
                        <th scope="col">age</th>
                        <th scope="col">Functions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->fullname}}</td>
                        <td>{{$user->login}}</td>
                        <td>{{$user->age}}</td>
                        <td>{{$user->address}}</td>
                        <td>-</td>
                    </tr>
                    @empty
                        <tr>
                            <th colspan="4">В системе нет пользователей</th>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
