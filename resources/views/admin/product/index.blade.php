@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            <br>
            <h4 class="font-weight-bold">Products Page</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="font-weight-bold text-center">Id</th>
                        <th class="font-weight-bold text-center">Category</th>
                        <th class="font-weight-bold text-center">Name</th>
                        <th class="font-weight-bold text-center">Selling Price</th>
                        <th class="font-weight-bold text-center">Image</th>
                        <th class="font-weight-bold text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        
                        <tr>
                            <td class="text-center">{{ $item->id }}</td>
                            <td class="text-center">{{ $item->category->name }}</td>
                            <td class="text-center"><h6>{{ $item->name }}</h6></td>
                            <td class="text-center">{{ $item->selling_price }}</td>
                            <td class="text-center">
                               <img src="{{ asset('assets/uploads/products/'.$item->image)}}" class="cate-image" alt="Image here">
                            </td>
                            <td class="text-center">
                                <a href="{{ url('edit-product/'.$item->id )}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ url('delete-product/'.$item->id )}}"  class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection