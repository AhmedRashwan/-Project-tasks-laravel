<!DOCTYPE html>
<html lang="en">
@include('partials.header')
<body>
<form action="/tasks/{{$task->id}}" method="post">
    @csrf
    @method("PATCH")

    <input type="text" name="title" id="" value="{{$task->title}}">
    <textarea name="description" id="" cols="30" rows="10">{{$task->description}}</textarea>
    <input type="submit" value="Update Project">
</form>

<form action="/tasks/{{$task->id}}" method="post">
    @csrf
    @method("DELETE")
    <input type="submit" value="DELETE">
</form>
@include('partials.footer')
</body>
</html>