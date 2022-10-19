@extends('page.index')
@section('content')
<!-- Hero Section End -->

<!-- Categories Section Begin -->
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản Phẩm Của Chúng Tôi</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*"><a style="color:rgb(17 76 120);" href="{{ route('home') }}">Giấy ăn</a></li>
                        <li data-filter=".fresh-meat"><a style="color:rgb(17 76 120);" href="{{ route('home.thit') }}">Giấy vệ sinh</a></li>
                        <!-- <li data-filter=".oranges"><a href="{{ route('home.haisan') }}">Hải sản</a></li>
                        <li data-filter=".fresh-meat"><a href="{{ route('home.donglanh') }}">Đông lạnh</a></li>
                        <li data-filter=".vegetables"><a href="{{ route('home.goihang') }}">Gói hàng</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @auth
            @foreach ($data as $item)
            <div  class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{ asset("/imgUploads/$item->img1")}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{ route('home.product', $item->id) }}"><i class="fa fa-eye blue-color"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> --}}
                            <li><a href="{{ route('home.themcart', [Auth::user()->id,$item->id]) }}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{ route('home.product', $item->id) }}"><b>{{$item->name}}</b></a></h6>
                        <h5 class="">Còn lại: <span style="color:rgb(17 76 120);" class="text-primary">{{$item->amount}}</span>sp - <span class="text-primary">{{$item->price}} VNĐ</span>/sp</h5>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            @foreach ($data as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{ asset("/imgUploads/$item->img1")}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{ route('home.register') }}"><i class="fa fa-eye blue-color"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> --}}
                            <li><a href="{{ route('home.register') }}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{ route('home.register') }}"><b>{{$item->name}}</b></a></h6>
                        <h5 class="">
                            {{-- Còn lại: <span class="text-primary">{{$item->amount}}</span>sp -  --}}
                            <span style="color:rgb(17 76 120);" >{{$item->price}} VNĐ</span>/sp</h5>
                    </div>
                </div>
            </div>
            @endforeach
            @endauth
        </div>
    </div>
    
    <div style="display: flex; justify-content: center;">
        {{$data->appends(request()->all())->links()}}
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<!-- Banner End -->

<!-- Latest Product Section Begin -->

<!-- Latest Product Section End -->

<!-- Blog Section Begin -->
<!-- <section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>Cung cấp suất ăn công nghiệp</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if (empty($data1[0]->id))
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{ asset('./homepage/img/blog/blog-2.jpg') }}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> Tháng 12, 2021</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="{{ route('home') }}">Lựa trái cây như nào thì tốt</a></h5>
                        <p>Lựa trái có màu sắt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src=" {{ asset('./homepage/img/blog/blog-3.jpg') }} " alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> Tháng 12, 2021</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="{{ route('home') }}">Chúng tôi láy trái cây từ đau</a></h5>
                        <p>Đợi ông chủ khai</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{ asset('./homepage/img/blog/blog-3.jpg') }} " alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> Tháng 12, 2021</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="{{ route('home') }}">Chúng tôi láy trái cây từ đau</a></h5>
                        <p>Đợi ông chủ khai</p>
                    </div>
                </div>
            </div>
            @else
            @auth
            @foreach ($data1 as $item1)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src=" {{ asset("/imgUploads/$item1->img")}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> Tháng 12, 2021</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="{{ route('home.blog', $item1->id) }}">{{$item1->name}}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            @foreach ($data1 as $item1)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src=" {{ asset("/imgUploads/$item1->img")}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> Tháng 12, 2021</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="{{ route('home.register') }}">{{$item1->name}}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach
            @endauth
            @endif
        </div>
    </div>
</section> -->
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- Blog Section End -->
@endsection