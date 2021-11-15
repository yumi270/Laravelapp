@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">編集</div>

                <div class="card-body">
                    {!! Form::model($post, [
                        'method' => 'post',
                        'action' => ['HomeController@update',$post->id]]) !!}
                    @method('PUT')
                    @include('form')
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

