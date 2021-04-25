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
                <div class="card-header">{{ __('Create User') }}</div>
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
                    @if($errors->any())
                    {{$errors->first()}}
                    @endif
                    <form  action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                          <label for="title" class="form-label">full name</label>
                          <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">your email</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="title" class="form-label">password</label>
                            <input type="password" class="form-control" name="password1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="title" class="form-label">confirm password</label>
                            <input type="password" class="form-control" name="password2" aria-describedby="emailHelp">
                          </div>

                        <button type="submit" class="btn btn-primary">create</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
