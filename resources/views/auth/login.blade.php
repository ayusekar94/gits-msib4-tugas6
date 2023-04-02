@extends('layout.app2')

@section('content')

        <div class="card">
            <div class="card-body">
                <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <h2>Login</h2>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
                            @error('email')
                                <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                            @error('password')
                                <div id="passwordHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <p>
                            Belum punya akun?
                            <a href="{{ url('register') }}">Silakan Register.</a>
                        </p>
                        <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>

@endsection
