<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('add') }}">
    <p>@csrf</p>
    <div>
        <label>Name: <input type="text" class="form-text" name="user_name"></label>
    </div>
    <div>
        <label>Phone: <input type="text" class="form-text" name="phone"></label>
    </div>
    <div>
        <label>Email: <input type="text" class="form-text" name="email"></label>
    </div>
    <div>
        <input type="submit" value="submit">
    </div>
</form>
</body>
</html>
