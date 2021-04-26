<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/login" method="POST">
                @csrf
                    <div class="form-group">
                      <label for="username">USERNAME</label>
                      <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">SILAHKAN MASUK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>