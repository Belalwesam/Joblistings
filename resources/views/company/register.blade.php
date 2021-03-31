@extends('layouts.apps')
@section('content')
   <div class="container mt-5">
       <div class="col-12 col-md-6 offset-md-3">
           <div class="card">
               <div class="card-header">
                   Register an account
               </div>
               <div class="card-body">
                   <form action="#" method="post">
                       @csrf
                       <div class="form-group">
                           <input type="text" placeholder="Company name" class="form-control @error('companyName')
                           is-invalid
                       @enderror" name="companyName">
                       </div>
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
                           <input type="text" placeholder="Company address" class="form-control @error('address')
                           is-invalid
                       @enderror" name="address">
                       </div>
                       <div class="form-group">
                           <button type="submit" class="btn btn-success">Create</button>
                       </div>
                       <div class="form-group">
                           <p>already have an account ? <a href="{{ route('company.loginPage') }}">Login</a></p>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection
