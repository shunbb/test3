@extends('layouts.app')

@section('content')
<div class="container">
    <h1>PiGLy</h1>
    <div class="subtitle">ログイン</div>

    <form action="/login" method="POST">
        @csrf
        <div class="form-group">
            <label>メールアドレス</label>
            <input type="email" name="email" placeholder="メールアドレスを入力" required>
        </div>
        <div class="form-group">
            <label>パスワード</label>
            <input type="password" name="password" placeholder="パスワードを入力" required>
        </div>
        <button type="submit" class="btn-submit">ログイン</button>
    </form>
    <a href="/register" class="link-text">アカウント作成はこちら</a>
</div>
@endsection
