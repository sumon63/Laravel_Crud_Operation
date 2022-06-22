@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="w-50 m-auto">
            <a href="{{url('/show-data')}}" class="btn btn-info my-2">Show Data</a>
            <form action="{{url('/update-data/'.$editData->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$editData->Name}}" class="form-control">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" name="department" value="{{$editData->Department}}" class="form-control">
                    @error('department')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="roll">Roll</label>
                    <input type="number" name="roll" value="{{$editData->Roll}}" class="form-control">
                    @error('roll')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="shift">Shift</label>
                    <input type="text" name="shift" value="{{$editData->Shift}}" class="form-control">
                    @error('shift')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <input type="text" name="semester" value="{{$editData->Semester}}" class="form-control">
                    @error('semester')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="address" name="address" value="{{$editData->Address}}" class="form-control">
                    @error('address')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" value="submit" class="btn btn-success my-2">Update Data</button>
            </form>
        </div>
    </div>
</div>
@endsection

