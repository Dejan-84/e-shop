@extends('layouts.front')


@section('title')
    My Cart
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0" >
                <a href="{{ url('/') }}" class="text-dark">
                    Home
                </a> /
                <a href="{{ url('cart') }}" class="text-dark">
                    Cart
                </a>
            </h6>
        </div>
    </div>

    <div class="container my-5">
        <div class="card shadow cartitems">
            @if ($cartitems->count() > 0)
                
                <div class="card-body pb-0">
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cartitems as $item)

                        <div class="row product_data">
                            <div class="col-md-2">
                                <img class="m-2" src="{{asset('assets/uploads/products/'.$item->products->image)}}" height="70px;" width="100px;" alt="Image here">
                            </div>
                            <div class="col-md-3 my-auto">
                                <h6>{{$item->products->name}}</h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6> $ {{$item->products->selling_price}}</h6>
                            </div>
                            <div class="col-md-3 my-auto">
                                <input type="hidden" class="prod_id" value="{{ $item->prod_id}}">
                                @if ($item->products->qty >= $item->prod_qty)
                                    <label for="Quantity">Quantity</label>
                                    <div class="input-group text-center mb-3" style="width:130px;">
                                        <button class="input-group-text changeQuantity decrement-btn">-</button>
                                        <input type="text" name="quantity" class="form-control qty-input text-center" value="{{ $item->prod_qty}}">
                                        <button class="input-group-text changeQuantity increment-btn">+</button>
                                    </div>
                                    @php
                                    $total +=$item->products->selling_price * $item->prod_qty ;
                                    @endphp
                                @else
                                <h6 class="text-danger ms-3">Out of Stock</h6>
                                @endif
                            </div>
                            <div class="col-md-2">
                                <button class="bth btn-danger delete-cart-item mt-4" style="border-radius: 8px;"><i class="fa fa-trash"></i> Remove</button>
                            </div>
                            <span class="border-bottom mb-0"></span>
                        </div>

                        

                    @endforeach

                </div>
                <div class="card-footer">
                    <h5 class="d-inline-block">Total Price : ${{ $total }}</h5>
                    <a href="{{ url('checkout')}}" class="btn btn-outline-success float-end">Proceed</a>
                </div>
            @else
                <div class="card-body text-center">
                    <h2>Your <i class="fa fa-shopping-cart"></i> Cart is empty.</h2>
                    <a href="{{ url('category') }}" class="btn btn-outline-primary float-end">Continue Shopping</a>
                </div>
            @endif
        </div>
    </div>
@endsection