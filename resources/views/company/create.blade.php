@extends('layouts.apps')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <p class="m-0">Create a joblisting</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('company.storeListing') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="jobTitle" class="form-control @error('jobTitle')
                                is-invalid
                            @enderror" >
                            </div>
                            <div class="form-group">
                                <select name="jobArea" class="form-control">
                                    <option value="">All areas</option>
                                    <option value="Usa">Usa</option>
                                    <option value="Europe">Europe</option>
                                    <option value="middleEast">Middle East</option>
                                    <option value="eastAsia">Eastern Asia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="jobCategory" class="form-control">
                                    <option value="">All categories</option>
                                    <option value="engineering">Engineering</option>
                                    <option value="medical">Medical</option>
                                    <option value="technology">Technology</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Excepted Pay" name="exceptedPay" class="form-control @error('exceptedPay')
                                is-invalid
                            @enderror">
                            </div>
                            <button class="btn btn-success">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection