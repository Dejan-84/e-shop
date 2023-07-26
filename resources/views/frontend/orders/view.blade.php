@extends('layouts.front')


@section('title')
    My Orders
@endsection

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Order View
                            <a href="{{ url('my-orders') }}" class="btn btn-warning float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Shipping Details</h4>
                                <hr>
                                <label for="" class="ms-2">First Name</label>
                                <div class="border">{{ $orders->fname}}</div>

                                <label for="" class="ms-2">Last Name</label>
                                <div class="border">{{ $orders->lname}}</div>

                                <label for="" class="ms-2">Email</label>
                                <div class="border">{{ $orders->email}}</div>

                                <label for="" class="ms-2">Contact No.</label>
                                <div class="border">{{ $orders->phone}}</div>

                                <label for="" class="ms-2">Shipping Address</label>
                                <div class="border">
                                    {{ $orders->address1}},<br>
                                    {{ $orders->address2}},<br>
                                    {{ $orders->city}},<br>
                                    {{ $orders->state}},
                                    {{ $orders->country}}
                                </div>

                                <label for="" class="ms-2">Zip Code</label>
                                <div class="border">{{ $orders->pincode}}</div>

                            </div>
                            <div class="col-md-6">
                                <h4>Order Details</h4>
                                <hr>
                                <table class="table table-bordered" style="margin-top: 40px;">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                            
                                            <tr class="text-center">
                                                <td>{{ $item->products->name}}</td>
                                                <td>{{ $item->qty}}</td>
                                                <td>${{ $item->price}}</td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px;" alt="Product Image">
                                                </td>
                                            </tr>
                
                                        @endforeach
                                    </tbody>
                                </table>
                                <h5 class="px-2">Grand Total:<span class="float-end">${{ $orders->total_price}}</span></h5>
                                <h6 class="px-2">Payment Mode:{{ $orders->payment_mode}}</h6>
                            </div>
                        </div>
                      
                    </div>
                </div>
               
            </div>
        </div>
    </div>

@endsection