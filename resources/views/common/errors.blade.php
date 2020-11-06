@if (count($errors) > 0)

    <!-- フォームのエラーリスト -->
    <div class="alert alert-danger">
        <strong>入力内容に誤りがあります。</strong>
        <br><br>

		<!--フラッシュデータに保存しておいた警告データをリスト化して画面に表示-->
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif