@extends('layouts.app')

@section('content')

<div class="row ">
    <div class="col-lg-10 m-auto">
        <div class="card">
            <span>Welcomt to {{ $logged_user}}</span>
            <div class="card-header text-center">
                <h1>User List</h1>
                <span style="float:right">Tutal User= {{ $total_user}}</span>
            </div>

            <div class="card-body">
                <table class="table table-striped ">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created Time</th>
                    </tr>
                    @foreach($user_list as $index=>$user)
                    <tr>
                        <td>{{$user_list->FirstItem()+$index}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>

                    </tr>
                    @endforeach
                </table>
                {{$user_list->links()}}
            </div>
        </div>
    </div>

</div>

@endsection