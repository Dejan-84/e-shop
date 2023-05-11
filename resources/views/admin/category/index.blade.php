@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            <br>
            <h4 class="font-weight-bold">Category Page</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="font-weight-bold text-center">Id</th>
                        <th class="font-weight-bold text-center">Name</th>
                        <th class="font-weight-bold text-center">Description</th>
                        <th class="font-weight-bold text-center">Image</th>
                        <th class="font-weight-bold text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        
                        <tr>
                            <td class="text-center">{{ $item->id }}</td>
                            <td><h6>{{ $item->name }}</h6></td>
                            <td>{{ $item->description }}</td>
                            <td class="text-center">
                               <img src="{{ asset('assets/uploads/category/'.$item->image)}}" class="cate-image" alt="Image here">
                            </td>
                            <td class="text-center">
                                <a href="{{ url('edit-category/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-category/'.$item->id)}}"  class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection