@extends('layouts.app')
@section('style')
<style>
     .form-select {
    text-transform: none;
    width: 100%;
    border-radius: 3px;
    height: 38px;
    color: #8a7373;
    border: 1px solid #d0d0d0;
}
</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit Settings</div>
                <div class="card-body">
                   @if(count($errors)>0)
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @foreach($errors->all() as $error)
                        <li class="nav-item dropdown">
                            <p>{{ $error }}</p>
                        </li>
                        @endforeach

                    </ul>
                    @endif
                    <form  action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                          <label for="title" class="form-label">blog name</label>
                          <input type="text" class="form-control" name="blog_name" value="{{$obj->blog_name}}" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">blog phone</label>
                            <input type="text" class="form-control" name="blog_phone" value="{{$obj->blog_phone}}" aria-describedby="emailHelp">
                        </div>
                          <div class="mb-3">
                            <label for="title" class="form-label">blog email</label>
                            <input type="text" class="form-control" name="blog_email" value="{{$obj->blog_emil}}" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">address</label>
                            <input type="text" class="form-control" name="address" value="{{$obj->address}}" aria-describedby="emailHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">update</button>
                      </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
