@extends('main.index2')
@section('secondary')
    <span id="bc_img" name="mainproduct"></span>
    @foreach($products as $product)
    <div class="mainproduct">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 col-sm12-col-12 product-photo">
                    <section class="content">
                        <div class="big-image">
                          <img id="picture" src="{{asset('images/'.$product->image1.'')}}">
                        </div>
                        <div class="row">
                          <div class="col-lg-3 col-sm-3 col-3 col-md-3">
                            <div class="thumb" onclick="document.getElementById('picture').src=''+document.getElementById('image1').src+''">
                                <img id="image1" src="{{asset('images/'.$product->image1.'')}}">
                              </div>
                          </div>
                          <div class="col-lg-3 col-sm-3 col-3 col-md-3">
                            <div class="thumb" onclick="document.getElementById('picture').src=''+document.getElementById('image2').src+''">
                                <img id="image2" src="{{asset('images/'.$product->image2.'')}}">
                              </div>
                          </div>
                          <div class="col-lg-3 col-sm-3 col-3 col-md-3">
                            <div class="thumb" onclick="document.getElementById('picture').src=''+document.getElementById('image3').src+''">
                                <img id="image3" src="{{asset('images/'.$product->image3.'')}}">
                              </div>
                          </div>
                          <div class="col-lg-3 col-sm-3 col-3 col-md-3">
                            <div class="thumb" onclick="document.getElementById('picture').src=''+document.getElementById('image4').src+''">
                                <img id="image4" src="{{asset('images/'.$product->image4.'')}}">
                              </div>
                          </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6 product-info">
                    <p class="caption">{{$product->name}}</p>
                    @if($product->content == '')
                        <p>T??rkibi : {{$product->ingredient}}</p>
                        <p>{{$product->value}} qr. M??hsulun qida d??y??ri: </p>
                        <p>Z??lal, q.-{{$product->protein}} </p>
                        <p>Ya??, q.-{{$product->fat}}</p>
                        <p>Enerji d??y??ri ??? {{$product->energy}} kC (264 kkal)</p>
                        <p>Net ????kisi, kq.- {{$product->weight}} (+/-3%)</p>
                        <p>Saxlama m??dd??ti: {{$product->life}} saat</p>
                        <p>Saxlama ????raiti: {{$product->condition}}</p>
                    @else
                        <p>{!!$product->content!!}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
