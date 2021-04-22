@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                         <form  action="{{route('category.update',['id'=>$obj->id])}}" method="POST">
                           {{ csrf_field() }}
                        <div class="mb-3">
                          <label for="title" class="form-label">update the category</label>
                          <input type="text" class="form-control" name="name" value="{{$obj->name}}" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
