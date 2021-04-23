@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> All Tags</div>
                <div class="card-body">
                    @if ($obj->count()>0)
                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col">Name</th>
                                <th scope="col">Update</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($obj as $i)
                            <tr>

                                <td>{{$i->name}}</td>
                                <td><a href="{{route('post.edit',['id'=>$i->id])}}"><i class="fas fa-edit"></i></a></td>
                                <td><a href="{{route('tag.delete',['id'=>$i->id])}}"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                     <p>dont found any posts</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

