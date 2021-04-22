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
                <div class="card-header">{{ __('posts') }}</div>
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
                    <form  action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">title</label>
                          <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name='category_id'>
                            <option  selected>select your categoury</option>
                            @foreach ($obj as $i)
                                <option value="{{$i->id}}">{{$i->name}}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" name="content" placeholder="leave your content here" cols="8" rows="8" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">content</label>
                         </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">take your photo</label>
                            <input class="form-control" type="file" name="avater" id="formFile">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
