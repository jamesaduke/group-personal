@extends('layouts.app')

@section('title')Home @endsection

@section('content')
    <div class="container">
        <div class="row">
            <form action="">
                {{-- <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Where are you going?" class="form-control" name="search">
                    </div>
                    <div class="col-md-2">
                        <input type="text" placeholder="Start Date" class="form-control" name="start_date">
                    </div>
                    <div class="col-md-2">
                        <input type="text" placeholder="End Date" class="form-control" name="end_date">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-primary" value="Search">
                    </div>
                </div> --}}
            </form>

            <hr>


            <br>
            <div class="text-center">
                <h2>Find a good apartment easily</h2>
                <p>Easily list and group apartments in the Meru County and its environs</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <a href="#">
                        <div class="discovery-card" style="background-image: url({{ asset('/images/New_York.jpeg') }})">
                            <div class="va-container">
                                <div class="va-middle text-center">
                                    <h2><strong>Meru</strong></h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="">
                        <div class="discovery-card" style="background-image: url({{ asset('/images/San_Francisco.jpeg') }})">
                            <div class="va-container">
                                <div class="va-middle text-center">
                                    <h2><strong>Nkubu</strong></h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="">
                        <div class="discovery-card" style="background-image: url({{ asset('/images/Chicago.jpeg') }})">
                            <div class="va-container">
                                <div class="va-middle text-center">
                                    <h2><strong>Chuka</strong></h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="text-center">
                    <h2>Listings available</h2>
                </div>

                <br>

                

                <br>

                <div class="row">
                    @foreach($rooms as $room)
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading preview">
                                    <img src="{{ asset("images/rooms/".$room->photos[0]->name) }}">
                                </div>
                                <div class="panel-body">
                                    <img class="img-circle avatar-small" src="{{ Gravatar::get($room->user->email) }}" alt="">
                                    <a href="/rooms/{{$room->id}}">{{ $room->listing_name }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <a href="/sendMessage">Test</a>
@endsection
