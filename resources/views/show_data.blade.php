@extends('index')
@section('content')
    <div class="container">
        <a href="{{url('/add-data')}}" class="btn btn-info my-3">Add Data</a>
        @if (Session::has('msg'))
            <p class="alert alert-success">{{Session::get('msg')}}</p>
         @endif
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($showData as $key=>$data)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$data->Name}}</td>
                  <td>{{$data->Department}}</td>
                  <td>{{$data->Roll}}</td>
                  <td>{{$data->Shift}}</td>
                  <td>{{$data->Semester}}</td>
                  <td>{{$data->Address}}</td>
                  <td>
                     <a href="{{url('/edit-data/'.$data->id)}}" class="btn btn-success m-1">Edit</a>
                     <a href="{{url('/delete-data/'.$data->id)}}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger m-1">Delete</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$showData->links()}}
    </div>
@endsection

