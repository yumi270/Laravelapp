@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">詳細ページ</div>

                <div class="card-body">
                    <h2>{{ $post->title }}</h2>
                    <time>{{ $post->published_at->format('Y年m月d日') }}</time>
                    <div>{!! nl2br(e($post->create)) !!}</div>
                    {!! link_to_route(
                        'home', '一覧へ戻る', null,
                        ['class' => 'btn btn-secondary'])
                    !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
