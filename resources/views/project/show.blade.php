<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.header')
<body>

<div class="container">
    <div class="list-group">
        <a href=" " class="list-group-item list-group-item-action active text-center">{{$project->title}}</a>
        @if($project->tasks()->count())
            @foreach($project->tasks as $task)
                <a href="/tasks/{{$task->id}}" class="list-group-item list-group-item-action text-center">
                    <form action="/tasks/{{$task->id}}" method="post" class="custom-control custom-checkbox">
                        @csrf
                        @method("PATCH")
                        <input type="checkbox" class="custom-control-input" name="completed" id="customCheck{{$task->id}}" onchange="this.form.submit()" {{$task->completed ?"checked":""}}>
                        <label class="custom-control-label" for="customCheck{{$task->id}}">{{$task->title}}</label>
                    </form>
                </a>
            @endforeach
        @endif
    </div>

<div class="">
    <br>
    <form action="/tasks" method="POST">
        @csrf
        <input type="hidden" name="projects_id" value="{{$project->id}}">
        <div class="form-group row">
            <label class="col-form-label col-2" for="title">Task title </label>
            <input class="form-control col-10" type="text" name="title" id="title" value="{{old('title')}}">
        </div>
        <div class="form-group row">
            <label class="col-form-label col-2" for="description">Task description</label>
            <textarea class="form-control col-10" name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
        </div>

        <div class="form-group row">
            <input class="form-control btn-success col-2" type="submit" value="Create Task">
        </div>
       @include('partials.errors')
    </form>
</div>
</div>
@include('partials.footer')
</body>
</html>
