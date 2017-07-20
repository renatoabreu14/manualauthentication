<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h1>Register page</h1>
            <pre>{{ var_dump($errors) }}</pre>
            <pre>{{ var_dump(session('fail')) }}</pre>
            <form action="/auth/register" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control">
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" placeholder="Password confirmation" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Register" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>