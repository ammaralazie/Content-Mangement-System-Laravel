@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__('All users')}}</div>
                <div class="card-body">
                    @if ($obj->count()>0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Admin State</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($obj as $i)
                            <tr>
                                <th scope="row"><img style="width: 50px;height:50px;border-radius:24px" src="{{asset('media/avatar/default_avatar.png')}}" alt=""></th>
                                <td>{{$i->name}}</td>

                                @if($i->admin)
                                    <td><a href="{{route('user.admin',['id'=>$i->id,'state'=>$i->admin])}}">delete admin</i></a></td>
                                @else
                                    <td><a href="{{route('user.admin',['id'=>$i->id,'state'=>$i->admin])}}">make admin</i></a></td>
                                @endif
                                <td><a href="{{--route('post.destroy',['slug'=>$i->id])--}}"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                     <p>dont found any user</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
