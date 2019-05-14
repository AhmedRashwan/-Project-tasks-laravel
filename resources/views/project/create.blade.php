<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EDIT PROJECT</title>

</head>
<body class="container-fluid">
<div class="row">
    <div class="col-2">
        <form class="form-group" action="/projects" method="post">
            @csrf
            <label>Title
                <input class="form-control" type="text" name="title" id="" value="">
            </label>
            <br>
            <label>Description
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </label>
            <input type="submit" value="Update Project">
        </form>
    </div>
</div>
<br>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
            <li> ERROR:{{$err}}</li>
        @endforeach
    </ul>
@endif
</body>
</html>