@extends('frontEnd/layouts/master')
@section('main-content')
        <div class="features_items">
            <h2 class="title text-center">My WishList</h2>
            @foreach($favourites as $favourite)

                @if($favourite->customer_id == \Auth::user()->id)
                {{--@foreach($favourite->productImages as $image)--}}
                        {{--@dd($favourite->productImages[0]->product_id);--}}
                {{--@foreach($products as $product)--}}
                    {{--@dd($product->product->name)--}}
                    {{--@if($favourite->productImages[0]->product_id == $product->product->id)--}}
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/uploads/products/{{ $favourite->productImages[0]->images }}" alt="" value="{{ $favourite->productImages[0]->product_id}}" width="100px;" height="150px;"/>
                                    {{--<h2>{{$product->product->name}}</h2>--}}
                                    <p></p>
                                    <a href="{{ route('cart.add',[$favourite->productImages[0]->product_id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>

                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        {{--<h2>{{$product->product->name}}</h2>--}}
                                        <p></p>
                                        <a href="{{ route('cart.add',[$favourite->productImages[0]->product_id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="{{ route('deleteWishList',[$favourite->product_id]) }}"><i class="fa fa-close"></i>Delete from Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="row"> {{ $favourites->links() }} </div>
@endsection
