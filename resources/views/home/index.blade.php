@extends('layout.layouts')

@section('content')
<section class="bg-position-center-top" style="background-image: url('assets/img/1920x450.jpg');">
    <div class="mb-lg-3 pb-5 pt-5">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-3 mx-auto text-center pt-5 dis-0">
                    <h2 class=" text-white"><b>1.000+</b></h2>
                    <h5 class=" text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                </div>
                <div class="col-lg-6 pt-3">
                    <div class="mb-4 mb-sm-5">
                        <div class="col-lg-7 col-md-9 text-center mx-auto">
                            <h1 class="text-white line-height-base">MIRACLE GATES</h1>
                            <h2 class="h4 text-white font-weight-light">Buy and Download game templates to create amazing games!</h2>
                        </div>
                        <div class="text-center mx-auto pt-2">
                            <a href="" class="btn btn-success m-1">Unity</a>
                            <a href="" class="btn btn-warning m-1">Android</a>
                            <a href="" class="btn btn-danger m-1">iOs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mx-auto text-center pt-5 dis-0">
                    <h2 class=" text-white"><b>5.000+</b></h2>
                    <h5 class=" text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <!-- Featured Item -->
    <div class="row mb-2 pb-2 border-bottom pt-4">
        <div class="col-lg-6">
            <h2>Featured Items</h2>
        </div>
        <div class="col-lg-6 text-right"><button class="btn btn-success">View All Item</button></div>
        <hr />
    </div>
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




    <!-- Popular Item -->
    <div class="row mb-2 pb-2 border-bottom">
        <div class="col-lg-6">
            <h2>Popular Items</h2>
        </div>
        <div class="col-lg-6 text-right"><button class="btn btn-success">View All Item</button></div>
        <hr />
    </div>
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
    <!-- Popular Item -->
    <div class="row mb-2 pb-2 border-bottom">
        <div class="col-lg-6">
            <h2>Popular Items</h2>
        </div>
        <div class="col-lg-6 text-right"><button class="btn btn-success">View All Item</button></div>
        <hr />
    </div>
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

</div>

@endsection