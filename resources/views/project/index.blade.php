<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.header')
<body>
 <div class="container">
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active text-center">All Projects</a>
@if($projects)
    @foreach($projects as $project)
            <a href="/projects/{{$project->id}}" class="list-group-item list-group-item-action">{{ $project->title }}</a>
        @endforeach
    @endif
</div>
<form method="POST" action="/projects">
    @csrf
    <input type="text" name="title">
    <textarea name="description"></textarea>
    <input type="submit">
</form>
 </div>
{{--<form method="PATCH" action="/projects">--}}
    {{--@csrf--}}
    {{--<input type="text" name="title">--}}
    {{--<textarea name="description"></textarea>--}}
    {{--<input type="submit">--}}
{{--</form>--}}
@include('partials.footer')
</body>
</html>
