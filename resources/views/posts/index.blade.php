@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> __('All Categories')</div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">updated_at</th>
                                <th scope="col">deleted_at</th>
                                <th scope="col">Update</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($obj as $i)
                            <tr>
                                <th scope="row"><img style="width: 100%" src="{{$i->featured}}" alt=""></th>
                                <td>{{$i->title}}</td>
                                <td>{{$i->updated_at}}</td>
                                <td>{{$i->deleted_at}}</td>

                                <td><a href="{{route('category.edit',['id'=>$i->id])}}"><i class="fas fa-edit"></i></a></td>
                                <td><a href="{{route('post.destroy',['slug'=>$i->id])}}"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
