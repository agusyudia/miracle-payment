@extends('layout.layouts')

@section('content')

<h1>shop</h1>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <img src="{{asset('assets/img/400x400.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">item 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="row mx-auto">
                    <a href="{{route('detail')}}" class="btn btn-success ps-4 pe-4">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection