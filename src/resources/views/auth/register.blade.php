@extends('layouts.app')

@section('content')
<div class="container">
    <h1>PiGLy</h1>
    <div class="subtitle">新規会員登録</div>
    <p style="font-size: 12px; color: #888;">STEP1 アカウント情報の登録</p>

    <form action="/register" method="POST">
        @csrf <div class="form-group">
            <label>お名前</label>
            <input type="text" name="name" placeholder="名前を入力" required>
        </div>
        <div class="form-group">
            <label>メールアドレス</label>
            <input type="email" name="email" placeholder="メールアドレスを入力" required>
        </div>
        <div class="form-group">
            <label>パスワード</label>
            <input type="password" name="password" placeholder="パスワードを入力" required>
        </div>
        <button type="submit" class="btn-submit">次に進む</button>
    </form>
    <a href="/login" class="link-text">ログインはこちら</a>
</div>
@endsection