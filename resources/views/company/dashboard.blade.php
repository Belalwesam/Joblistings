@extends('layouts.apps')
@section('content')
    <div class="container mt-5">
        <div class="alert alert-danger d-flex justify-content-between align-items-center">
           <p class="m-0">You're logged in</p>
           <form action="{{ route('logout')}}" method="POST">
            @csrf
               <button type="submit" class="btn btn-danger">logout</button>
           </form>
        </div>
        @if (session('createSuccess'))
            <div class="alert alert-success">
                {{ session('createSuccess') }}
            </div>
        @endif
        <div class="text-center">
            <a href="{{ route('user.create') }}" class="btn btn-success">Post a new joblisting</a>
        </div>
        <!-- My Listings -->
        <div class="my-listings my-5">
            <h4>Your listings</h4>
           @if ($listings->count() > 0)
           <table style="width: 100%;" class="table-striped">
                   @foreach ($listings as $listing)
                        <tr id="row-{{$listing->id}}">
                            <td style="width: 70%;">
                                <a href="#">{{$listing->jobTitle}}</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('listing.destroy' , $listing->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger deleteBtn" data-id="{{$listing->id}}" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                   @endforeach
           </table>
           @endif
        </div>
        <!--end of conatiner-->
    </div>
@endsection
<style>
    table td {
        padding: 20px; 
    }
</style>