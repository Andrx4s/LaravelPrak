@extends('index')

@section('title', 'Страница регистрации')

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{route('register')}}" method="POST">
                    @if(session()->has('success'))
                        <h3>Операция регистрации успешно выполнена</h3>
                    @endif
                    @csrf
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Ваше ФИО</label>
                            <input type="text"
                                   class="form-control @error('fullname') is-invalid @enderror"
                                   id="inputName"
                                   name="fullname"
                                   aria-describedby="invalidFullname">
                            @error('fullname')
                            <div id="invalidFullname" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputLogin" class="form-label">Ваш логин</label>
                            <input type="text"
                                   class="form-control @error('login') is-invalid @enderror"
                                   id="inputLogin"
                                   name="login"
                                   aria-describedby="invalidLogin">
                            @error('login')
                            <div id="invalidLogin" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputAge" class="form-label">Возраст</label>
                            <input type="number"
                                   class="form-control @error('age') is-invalid @enderror"
                                   id="inputAge"
                                   name="age"
                                   aria-describedby="invalidAge">
                            @error('age')
                            <div id="invalidAge" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Ваш адрес</label>
                            <input type="text"
                                   class="form-control @error('address') is-invalid @enderror"
                                   id="inputAddress"
                                   name="address"
                                   aria-describedby="invalidAge">
                            @error('address')
                            <div id="invalidAge" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                                </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Ваш пароль</label>
                            <input type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   id="inputPassword"
                                   name="password"
                                   aria-describedby="invalidPassword">
                            @error('password')
                            <div id="invalidPassword" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputPasswordConfirmation" class="form-label">Повторите ваш пароль</label>
                            <input type="password"
                                   class="form-control @error('password_confirmation') is-invalid @enderror"
                                   id="inputPasswordConfirmation"
                                   name="password_confirmation"
                                   aria-describedby="invalidPasswordConfirmation">
                            @error('password_confirmation')
                            <div id="invalidPasswordConfirmation" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    <button type="submit" class="btn btn-primary">Регистрация</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
