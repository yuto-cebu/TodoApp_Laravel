<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/folders/1/tasks">ToDo App</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-md-offset-3 col-md-6">
                    <nav class="panel panel-default">
                        <div class="panel-heading">フォルダを追加する</div>
                        <div class="panel-body">
                            <!-- ルール違反があるかを確認 -->
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('folders.create') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="title">フォルダ名</label>
                                    <!-- old関数 セッションの値を取得する(入力エラーがあるとき、入力値はセッションに一時保存されるから。)引数は取得したい入力欄のname属性 -->
                                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">送信</button>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </main>
</body>
</html>