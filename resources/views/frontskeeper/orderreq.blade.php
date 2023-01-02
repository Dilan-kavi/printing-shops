@extends('layouts.customer')

@section('content')
    <div class="container-fluid">
        <h1 class="text-start text-dark mb-1">Orders</h1>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Index Number</th>
                        <th>Contact Number</th>
                        <th>Ordered Date & Time&nbsp;</th>
                        <th>Time slot</th>
                        
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>   
                        <td>{{ $order->fname }}</td>
                        <td>{{ $order->index_no }}</td>
                        
                        <td>{{ $order->contact_no }}</td>
                        <td>{{ $order->created_at }}</td>

                        <td>{{ $order->timeslot }}</td>
                        <td>
                                <a class="btn btn-warning link-light" href="{{ route('fskeepers.show',$order->id) }}">View</a>
                          
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" href="{{ route('fcustomers.destroy',$order->id) }}">Delete</button>
                        
                                    <button type="button" class="btn btn-success">Processing</button>

                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notification</button>
                                
                                

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

@endsection
