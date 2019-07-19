@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card sticky-top">
                    <div class="card-header">
                        {{ __('Categories') }}
                    </div>
                    <div class="card-body">
                        ...
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                @foreach([1,2,3,4,5,6,7,9,0,10,12] as $a)
                <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">2 minutes ago</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">{{ __('Read more') }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
