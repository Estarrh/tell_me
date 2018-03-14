@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Article {{ $article->id }}</h4>
                    <span>
                    <small>
                        <a href="{{ asset('/articles') }}/{{$article->id}}/edit">Edit</a>
                    </small>
                    </span>
                    <span class="pull-right">{{$article->created_at->diffForHumans()}}</span>
                </div>
                <div class="panel-body">
                    {{ $article->content }}
                </div>
                <div class="panel-footer clearfix" style="background-color:white">
                @if($article->user_id == Auth::id())
                    <form action="{{ asset('/articles') }}/{{$article->id}}" method="post" class="pull-right"
                          style="margin-left: 25px">

                        {{ csrf_field() }}

                        {{method_field('DELETE')}}

                        <button class="byn btn-danger btn-sm">Delete</button>
                    </form>
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection
