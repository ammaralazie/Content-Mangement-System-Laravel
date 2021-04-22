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
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Update</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($obj as $i)
                            <tr>
                                <th scope="row">{{$i->id}}</th>
                                <td>{{$i->name}}</td>
                                <td><a href="{{route('category.edit',['id'=>$i->id])}}"><i class="fas fa-edit"></i></a></td>
                                <td><a href="{{route('category.delete',['id'=>$i->id])}}"><i class="fas fa-trash"></i></a></td>
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
