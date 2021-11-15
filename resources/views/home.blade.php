@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ホーム</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div>
                            <a href="{{ url('/create') }}" class ='btn btn-primary mb-3'>新規登録</a>
                        </div>
                        @if(0 < $posts->count())
                        <table class="table table-striped table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">タイトル</th>
                                    <th scope="col" style="width: 9em">公開日</th>
                                    <th scope="col" style="width: 12em">編集</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->published_at }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ action('HomeController@show', $post)}}"class = "btn btn-secondary btn-sm m-1" target="_blank">詳細</a>
                                        <a href="{{ action('HomeController@edit', $post)}}" class ='btn btn-secondary btn-sm m-1'>編集</a>
                                        <form action="{{ route('destroy', $post) }}" method="post">
                                            @csrf
                                            <input class="btn btn-danger btn-sm m-1" type="submit" value="削除" />
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
