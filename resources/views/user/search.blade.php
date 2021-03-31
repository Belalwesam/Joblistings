@extends('layouts.app')
@section('content')
    <!--Search banner start-->
    <section id="banner-section" style="background-image: url('/images/header-bg.jpg')">
        <div class="banner-inner">
            <h1 class="text-center text-white">Search</h1>
            <div class="crumb text-center text-white">
                <p><a href="/">Home</a> <i class="fas fa-long-arrow-alt-right"></i> Search </p>
            </div>
        </div>
    </section>
    <!--Search banner end-->
    <!--Start of search results -->
     <section id="recentJobs-section">
        <div class="recentJobs-inner">
            <div class="container">
                <div class="row">
                   <div class="col-12 col-md-7 order-1 order-md-0 my-4 my-md-0">
                    @if ($jobListings->count() > 0)
                    <div class="recent-jobs">
                    @foreach ($jobListings as $jobListing)
                        <div class="single-job shadow mb-4">
                            <h3><a href="#">{{ $jobListing->jobTitle}}</a></h3>
                            <p class="company-name">{{ $jobListing->user->companyName}}</p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                            <p>Job Nature: full time</p>
                            <p class="job-location"><i class="fas fa-map-marker-alt"></i>{{ $jobListing->user->address}}</p>
                            <p class="job-pay"><i class="fas fa-dollar-sign"></i>{{$jobListing->exceptedPay}}</p>
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
    <!--End of search results -->
@endsection