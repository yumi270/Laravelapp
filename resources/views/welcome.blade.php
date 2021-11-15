<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
                </div>
                <div class="card-body">
                    <div class="navbar justify-content-center bg-white btn btn-primary mb1 black bg-yellow">
                        @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ url('/home') }}" >ホーム</a>
                            @else
                                <a href="{{ route('login') }}">ログイン</a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}">新規登録</a>
                                @endif
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






