@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">修改文章</div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <form action="{{ url('admin/articles/'.$article->id.'') }}" method="POST">
                            {{ method_field('PUT') }}
                            {!! csrf_field() !!}
                            <input type="text" name="title" class="form-control" required="required" value="{{ $article->title }}" placeholder="">
                            <br>
                            <textarea name="body" rows="10" class="form-control" required="required" placeholder="">{{ $article->body }}</textarea>
                            <br>
                            <button class="btn btn-lg btn-info">修改文章</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection