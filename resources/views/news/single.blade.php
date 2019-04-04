@extends('layouts.app')
@section('content')
    <div class="main-content">
        <div class="content-top">
            <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск,
                скачать
                Steam игры после оплаты
            </div>
            <div class="image-container"><img src="/img/slider.png" alt="Image" class="image-main"></div>
        </div>
        <div class="content-middle">
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">{{$news->name}}</div>
                </div>
                @include('layouts.search')
            </div>
            <div class="content-main__container">
                <div class="product-container">
                    <div class="product-container__image-wrap"><img src="{{$news->picture}}"
                                                                    class="image-wrap__image-product"></div>
                    <div class="product-container__content-text">
                        <div class="product-container__content-text__title">{{$news->name}}</div>
                        <div class="product-container__content-text__price">
                        </div>
                        <div class="product-container__content-text__description">
                            <p>
                                {{$news->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-bottom">
            <div class="line"></div>
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
                </div>
            </div>
            <div class="content-main__container">
                <div class="products-columns">
                    @foreach($randomProducts as $product)
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product">
                                <a href="{{route('products.single',['products'=>$product])}}" class="products-columns__item__title-product__link">{{$product->name}}</a>
                            </div>
                            <div class="products-columns__item__thumbnail">
                                <a href="{{route('products.single',['products'=>$product])}}" class="products-columns__item__thumbnail__link">
                                    <img src="{{$product->getPicture()}}" alt="Preview-image"
                                         class="products-columns__item__thumbnail__img">
                                </a>
                            </div>
                            <div class="products-columns__item__description">
                                <span class="products-price">{{$product->prise}}руб.</span>
                                <a href="{{route('cart.addToCart',['products'=>$product])}}" class="btn btn-blue">Купить
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection