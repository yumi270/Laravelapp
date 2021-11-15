@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新規投稿</div>
                    <div class="card-body">
                        {{ Form::open(['route' => 'store']) }}
                        <!--title-->
                        <div class="form-group row">
                            {{ Form::label('title', 'タイトル', ['class' => 'col-sm-2 col-form-label']) }}
                            <div class="col-sm-10">
                                {{ Form::text('title', null, [
                                    'class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''),
                                    'required'
                                ]) }}
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!--create-->
                        <div class="form-group row">
                            {{ Form::label('create', '内容', ['class' => 'col-sm-2 col-form-label']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('body', null, [
                                    'class' => 'form-control' . ($errors->has('create') ? ' is-invalid' : ''),
                                    'rows' => 5
                                ]) }}
                                @error('create')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!--published_at-->
                        <div class="form-group row">
                            {{ Form::label('published_at', '公開日', ['class' => 'col-sm-2 col-form-label']) }}
                            <div class="col-sm-10">
                                {{ Form::datetime('published_at',
                                    isset($post->published_at)
                                        ? $post->published_at->format('Y-m-d H:i')
                                        : now()->format('Y-m-d H:i'),
                                [
                                    'class' => 'form-control' . ($errors->has('published_at') ? ' is-invalid' : '')
                                ]) }}
                                @error('published_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="button_wrapper remodal-bg">
                                    {{ Form::submit('保存', ['class' => 'btn btn-primary']) }}
                                    {!! link_to_route(
                                        'home', '一覧へ戻る', null,
                                        ['class' => 'btn btn-secondary'])
                                    !!}
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
