@extends('layout.layouts')

@section('content')

<h1>Detail Item </h1>
<br>
<div class="row">
    <div class="col-9">
        <img src="{{asset('assets/img/400x400.png')}}" alt="">
        <h1>Item 1</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsam, eos natus quasi dicta velit tenetur quidem odit enim maxime quibusdam magni quisquam sit blanditiis dignissimos dolorum deleniti vitae alias.</p>
    </div>
    <div class="col-3">
        <div class="card">
            <div class="card-header">
                Payment
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <a href="#" class="btn btn-primary">Buy Now</a>

                <form action="{{route('payment')}}" method="post">
                    @csrf
                    <input type="hidden" name="amount" value="100">
                    <button type="submit" class="btn btn-warning">Pay with Paypal</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection