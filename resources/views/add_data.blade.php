@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="w-50 m-auto">
            <a href="{{url('/show-data')}}" class="btn btn-info my-2">Show Data</a>
            <form action="{{'/store-data'}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" name="department" class="form-control">
                    @error('department')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="roll">Roll</label>
                    <input type="number" name="roll" class="form-control">
                    @error('roll')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="shift">Shift</label>
                    <input type="text" name="shift" class="form-control">
                    @error('shift')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <input type="text" name="semester" class="form-control">
                    @error('semester')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="address" name="address" class="form-control">
                    @error('address')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" value="submit" class="btn btn-success my-2">Store Data</button>
            </form>
        </div>
    </div>
</div>
@endsection

