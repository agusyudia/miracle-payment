@extends('layout.layouts')

@section('content')

<h1>shop</h1>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div class="row list-product">
    <div class="col-lg-2 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card shadow item">
            <div class="price-tag">$99</div>
            <img src="{{asset('assets/img/200x140.jpg')}}" class="img-product">
            <div class="middle d-flex justify-content-between">
                <div class="text"><a href=""><span class="fa fa-eye"></span></a></div>
                <div class="text"><a href=""><span class="fa fa-shopping-basket"></span></a></div>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-5">
                        <span class="aww"><img src="{{asset('assets/img/unity.png')}}" alt="" width="20px">Unity</span>
                    </div>
                    <div class="col-7 text-right aww">
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <p class="name-game text-center ">Cookie Cats Pop</p>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card shadow item">
            <div class="price-tag">$99</div>
            <img src="{{asset('assets/img/200x140.jpg')}}" class="img-product">
            <div class="middle d-flex justify-content-between">
                <div class="text"><a href=""><span class="fa fa-eye"></span></a></div>
                <div class="text"><a href=""><span class="fa fa-shopping-basket"></span></a></div>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-5">
                        <span class="aww"><img src="{{asset('assets/img/android.png')}}" alt="" width="20px">Android</span>
                    </div>
                    <div class="col-7 text-right aww">
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <p class="name-game text-center ">Cookie Cats Pop</p>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card shadow item">
            <div class="price-tag">$99</div>
            <img src="{{asset('assets/img/200x140.jpg')}}" class="img-product">
            <div class="middle d-flex justify-content-between">
                <div class="text"><a href=""><span class="fa fa-eye"></span></a></div>
                <div class="text"><a href=""><span class="fa fa-shopping-basket"></span></a></div>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-5">
                        <span class="aww"><img src="{{asset('assets/img/ios.png')}}" alt="" width="20px"> iOs</span>
                    </div>
                    <div class="col-7 text-right aww">
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <p class="name-game text-center ">Cookie Cats Pop</p>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card shadow item">
            <div class="price-tag">$99</div>
            <img src="{{asset('assets/img/200x140.jpg')}}" class="img-product">
            <div class="middle d-flex justify-content-between">
                <div class="text"><a href=""><span class="fa fa-eye"></span></a></div>
                <div class="text"><a href=""><span class="fa fa-shopping-basket"></span></a></div>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-5">
                        <span class="aww"><img src="{{asset('assets/img/unity.png')}}" alt="" width="20px">Unity</span>
                    </div>
                    <div class="col-7 text-right aww">
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <p class="name-game text-center ">Cookie Cats Pop</p>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card shadow item">
            <div class="price-tag">$99</div>
            <img src="{{asset('assets/img/200x140.jpg')}}" class="img-product">
            <div class="middle d-flex justify-content-between">
                <div class="text"><a href=""><span class="fa fa-eye"></span></a></div>
                <div class="text"><a href=""><span class="fa fa-shopping-basket"></span></a></div>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-5">
                        <span class="aww"><img src="{{asset('assets/img/android.png')}}" alt="" width="20px">Android</span>
                    </div>
                    <div class="col-7 text-right aww">
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <p class="name-game text-center ">Cookie Cats Pop</p>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card shadow item">
            <div class="price-tag">$99</div>
            <img src="{{asset('assets/img/200x140.jpg')}}" class="img-product">
            <div class="middle d-flex justify-content-between">
                <div class="text"><a href=""><span class="fa fa-eye"></span></a></div>
                <div class="text"><a href=""><span class="fa fa-shopping-basket"></span></a></div>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-5">
                        <span class="aww"><img src="{{asset('assets/img/ios.png')}}" alt="" width="20px"> iOs</span>
                    </div>
                    <div class="col-7 text-right aww">
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <p class="name-game text-center ">Cookie Cats Pop</p>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card shadow item">
            <div class="price-tag">$99</div>
            <img src="{{asset('assets/img/200x140.jpg')}}" class="img-product">
            <div class="middle d-flex justify-content-between">
                <div class="text"><a href=""><span class="fa fa-eye"></span></a></div>
                <div class="text"><a href=""><span class="fa fa-shopping-basket"></span></a></div>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-5">
                        <span class="aww"><img src="{{asset('assets/img/unity.png')}}" alt="" width="20px">Unity</span>
                    </div>
                    <div class="col-7 text-right aww">
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <p class="name-game text-center ">Cookie Cats Pop</p>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card shadow item">
            <div class="price-tag">$99</div>
            <img src="{{asset('assets/img/200x140.jpg')}}" class="img-product">
            <div class="middle d-flex justify-content-between">
                <div class="text"><a href=""><span class="fa fa-eye"></span></a></div>
                <div class="text"><a href=""><span class="fa fa-shopping-basket"></span></a></div>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-5">
                        <span class="aww"><img src="{{asset('assets/img/android.png')}}" alt="" width="20px">Android</span>
                    </div>
                    <div class="col-7 text-right aww">
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <p class="name-game text-center ">Cookie Cats Pop</p>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card shadow item">
            <div class="price-tag">$99</div>
            <img src="{{asset('assets/img/200x140.jpg')}}" class="img-product">
            <div class="middle d-flex justify-content-between">
                <div class="text"><a href=""><span class="fa fa-eye"></span></a></div>
                <div class="text"><a href=""><span class="fa fa-shopping-basket"></span></a></div>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-5">
                        <span class="aww"><img src="{{asset('assets/img/ios.png')}}" alt="" width="20px"> iOs</span>
                    </div>
                    <div class="col-7 text-right aww">
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <p class="name-game text-center ">Cookie Cats Pop</p>
            </div>
        </div>
    </div>
</div>

@endsection