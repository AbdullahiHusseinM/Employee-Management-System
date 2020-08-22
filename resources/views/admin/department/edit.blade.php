@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">

        @if (Session::has('message'))
        <div class='alert alert-success'>
            {{Session::get('message')}}
        </div>
        @endif
            <form action="{{route('departments.update', [$department->id])}}" method="POST">

            @method('PATCH')

            @csrf
            
            <div class="card">
                <div class="card-header">Update Department</div>

                <div class="card-body">
                   <div class="form-group">
                       <label for="">Name</label>
                       <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $department->name}}">
                    </div>

                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                
                 <div class="form-group">
                       <label for="">Description</label>
                       <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" >{{$department->description}}</textarea>
                    </div>

                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
