@extends('layouts.apps')
@section('content')
<div class="container mt-5">
    <div class="col-12 col-md-6 offset-md-3">
        @if (session('loginError'))
            <div class="alert alert-danger">
                {{session('loginError')}}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                Log in to your account
            </div>
            <div class="card-body">
                <form action="{{ route('company.login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="email" placeholder="Company email" class="form-control @error('email')
                        is-invalid
                    @enderror" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control @error('password')
                        is-invalid
                    @enderror" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection