@extends('page.index')
@section('content')
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('./homepage/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Thông tin đặt hàng</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Nhập Thông Tin Để Đặt Hàng</h4>
            <form action="{{ route('home.postthanhtoan') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Họ Và Tên Của Bạn<span>*</span></p>
                                    <input type="text" name="name">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Địa chỉ chi tiết người nhận<span>*</span></p>
                            <input type="text" name="sonha" placeholder="Số nhà - Tên đường" class="checkout__input__add">
                            @error('sonha')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            <input type="text" name="xa"  placeholder="Thôn - xã - thị trấn">
                            @error('xa')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="checkout__input">
                            <p>Quận/Huyện<span>*</span></p>
                            <input type="text" name="huyen">
                            @error('huyen')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="checkout__input">
                            <p>Tỉnh/Thành phố<span>*</span></p>
                            <input type="text" name="tinh">
                            @error('tinh')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Số Điện Thoại (<span>Ví dụ: 0372868***</span>)</p>
                                    <input type="text" name="numberPhone">
                                    @error('numberPhone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" name="email" value="{{Auth::user()->email}}">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Sản Phẩm Của Bạn</h4>
                            <div class="checkout__order__products">Sản phẩm <span>Tiền</span></div>
                            <ul>
                                @foreach ($data as $item)
                                @foreach ($products as $pro)
                                @if ($pro->id == $item->idProduct)
                                <li>{{$pro->name}}: {{$item->amount}} <span>{{$item->amount*$pro->price}} vnĐ</span></li>
                                @endif 
                                @endforeach
                                @endforeach
                            </ul>
                            <div class="checkout__order__total">Tổng tiền <span>{{$total}} vnĐ</span></div>
                            <input type="hidden" name="price" value="{{$total}}">
                            <button type="submit" class="site-btn">Đặt Sản Phẩm</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- Blog Section End -->
@endsection
