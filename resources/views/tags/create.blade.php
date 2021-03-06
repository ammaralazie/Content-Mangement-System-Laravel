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
                <div class="card-header">Create Tage</div>
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
                    <form  action="{{route('tag.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                          <label for="title" class="form-label">Tag Name</label>
                          <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
