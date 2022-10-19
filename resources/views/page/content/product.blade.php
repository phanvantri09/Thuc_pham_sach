@extends('page.index')
@section('content')
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('./homepage/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Sản phẩm</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="{{ asset("/imgUploads/$data->img1")}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$data->name}}</h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    <div class="product__details__price">{{$data->price}}</div>
                    <p>{{$data->general}}</p>
                    
                    <a href="{{ route('home.addcart', [Auth::user()->id,$data->id]) }}" class="primary-btn">Thêm vào giỏ</a>
                    <ul>
                        <li><b>Còn lại:</b> <span>{{$data->amount}} sp</span></li>
                        <li><b>Giao hàng:</b> <span>Trong vòng <samp>24h</samp></span></li>
                        <li><b>Miễn phí ship:</b> <span>trong bán kính 3km hoặc đơn hàng trên 20sp</span></li>
                        <li><b>Liên lạc</b>
                            <div class="share">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="{{ asset("/imgUploads/$data->img2")}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="{{ asset("/imgUploads/$data->img3")}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Tâm Trường Hưng</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <p>Tâm Trường Hưng là đại lí bán sỉ và lẻ các loại thực phẩm tươi sống sạch như rau, củ, quả, thịt, hải sản, các gói hàng được trang trí theo yêu cầu của bạn thông qua số điện thoại (0931 452 452 hoặc 0941 681 681) để được tư vấng một cách chính xác và nhanh nhất.  </p>
                                <p>Sản phẩm của chúng tôi được láy từ các nhà cung cấp sạch có danh tiếng và lau đời vì vậy hãy mua hàng một cách thoải mái vì tất cả sản phẩm bạn đặt đã được chọn lọc một cách tỉ mĩ.</p>
                                <p>Khi lựa chọn thực phẩm dù là thực phẩm tươi sống hay thực phẩm đã đóng gói sẵn, việc đầu tiên cần quan tâm là nguồn gốc xuất xứ, thương hiệu phải uy tín và chất lượng, phải có giấy chứng nhận và các nhãn mác, logo của các đơn vị, sau đó hãy quan tâm đến giá cả. Và điều hiển nhiên, giá của những thực phẩm sạch đúng nghĩa sẽ cao hơn khá nhiều các loại thực phẩm bình thường. Vì vậy hãy ưu tiên mua hàng của chúng tôi, chúng tôi đáp ứng đầy đủ các yếu tố đó.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- Blog Section End -->
@endsection
