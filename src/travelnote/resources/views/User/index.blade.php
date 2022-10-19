<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ログイン</title>

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Font Awesome5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
<nav class="navbar navbar-light navbar-dark bg-dark">
    <a class="navbar-brand" href="#">旅ノート<img src="{{ url('storage/icon/top-icon.svg') }}" alt="旅ノート" style="width: 40px;"></a>
</nav>

<div class="container mt-5 p-lg-5 bg-light">

    <form>
        <div class="form-group row">
            <label for="inputId" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputId" placeholder="ID">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">パスワード</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="パスワード">
                <small id="passwordHelpBlock" class="form-text text-muted">パスワードは、文字と数字を含めて8～20文字で、空白、特殊文字、絵文字を含むことはできません。</small>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block">ログイン</button>
            </div>
        </div>

    </form>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</html>
