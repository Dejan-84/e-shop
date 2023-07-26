@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            <br>
            <h4 class="font-weight-bold">Registered Users</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="font-weight-bold text-center">Id</th>
                        <th class="font-weight-bold text-center">Name</th>
                        <th class="font-weight-bold text-center">Email</th>
                        <th class="font-weight-bold text-center">Phone</th>
                        <th class="font-weight-bold text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        
                        <tr>
                            <td class="text-center">{{ $item->id }}</td>
                            <td class="text-center"><h6>{{ $item->name.' '.$item->lname }}</h6></td>
                            <td class="text-center">{{ $item->email }}</td>
                            <td class="text-center">{{ $item->phone }}</td>
                           
                            <td class="text-center">
                                <a href="{{ url('view-user/'.$item->id )}}" class="btn btn-primary btn-sm">View</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection