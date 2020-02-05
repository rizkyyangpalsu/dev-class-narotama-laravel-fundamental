@extends('skeleton')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 6 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=""> Create New Product</a>
            </div>
        </div>
    </div>
   
    {{--TODO: Alert Success--}}
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        <tr>
            <td>0</td>
            <td>Test Products</td>
            <td>It's Detail</td>
            <td>
                <form action="" method="POST">

                    <a class="btn btn-info" href="">Show</a>
    
                    <a class="btn btn-primary" href="">Edit</a>

                    {{--TODO: Delete--}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </table>
      
@endsection