@extends('layouts.app')
@section('content')
    <!--Start of hero -->
    <section id="hero-section" style="background-image: url('/images/header-bg.jpg');">
        <div class="hero-inner">
                <h1 class="text-center"><span style="color: #49e4fa;">1500+</span> Jobs Posted Last Week</h1>
               <div class="container">
                    <form action="{{ route('users.search')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-4 mb-2 mb-md-0">
                                <input type="text" name="jobTitle" placeholder="What are you looking for?" class="form-control @if (session('status'))is-invalid @endif">
                            </div>
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                            <select name="jobArea" class="form-control">
                                <option value="">All areas</option>
                                <option value="Usa">Usa</option>
                                <option value="Europe">Europe</option>
                                <option value="middleEast">Middle East</option>
                                <option value="eastAsia">Eastern Asia</option>
                            </select>
                            </div>
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                            <select name="jobCategory" class="form-control">
                                <option value="">All categories</option>
                                <option value="engineering">Engineering</option>
                                <option value="medical">Medical</option>
                                <option value="technology">Technology</option>
                                <option value="other">Other</option>
                            </select>
                            </div>
                            <div class="col-12 col-md-2 mb-2 mb-md-0">
                                <button><i class="fas fa-search"></i> Search</button>
                            </div>
                        </div>
                </form>
                <h6 class="text-center"><span style="color: #49e4fa; font-weight:lighter;">Search by tags : </span>Tecnology, Business, Consulting, IT Company, Design, Development</h6>
            </div>
        </div>
    </section>
    <!--End of hero -->
    <!--Start Recent Jobs section-->
    <section id="recentJobs-section">
        <div class="recentJobs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7 order-1 order-md-0 my-4 my-md-0">
                        @if ($joblistings->count() > 0)
                        <div class="recent-jobs">
                        @foreach ($joblistings as $joblisting)
                            <div class="single-job shadow mb-4">
                                <h3><a href="#">{{ $joblisting->jobTitle}}</a></h3>
                                <p class="company-name">{{ $joblisting->user->companyName}}</p>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                <p>Job Nature: full time</p>
                                <p class="job-location"><i class="fas fa-map-marker-alt"></i>{{ $joblisting->user->address}}</p>
                                <p class="job-pay"><i class="fas fa-dollar-sign"></i>{{$joblisting->exceptedPay}}</p>
                            </div>
                      @endforeach
                        </div>
                        @else
                             <h3>No information found</h3>
                        @endif
                       </div>
                    <div class="col-12 col-md-4 offset-md-1">
                        <div class="jobsLocation px-3 py-4" style="background-color: rgb(245, 242, 242)">
                           <h4 class="mb-2">Jobs By Location</h4>
                           <div class="card bg-white px-3 py-2 mb-2">
                            <div class="d-flex justify-content-between align-items-center">
                                 <h6 style="margin: 0 !important;">New York</h6>
                                 <p style="margin: 0 !important;">57</p>
                            </div>
                         </div>
                            <div class="card bg-white px-3 py-2 mb-2">
                               <div class="d-flex justify-content-between align-items-center">
                                    <h6 style="margin: 0 !important;">New York</h6>
                                    <p style="margin: 0 !important;">57</p>
                               </div>
                            </div>
                            <div class="card bg-white px-3 py-2 mb-2">
                                <div class="d-flex justify-content-between align-items-center">
                                     <h6 style="margin: 0 !important;">New York</h6>
                                     <p style="margin: 0 !important;">57</p>
                                </div>
                             </div>
                             <div class="card bg-white px-3 py-2 mb-2">
                                <div class="d-flex justify-content-between align-items-center">
                                     <h6 style="margin: 0 !important;">New York</h6>
                                     <p style="margin: 0 !important;">57</p>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Recent Jobs section-->
@endsection
