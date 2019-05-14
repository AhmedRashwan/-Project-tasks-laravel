<!DOCTYPE html>
<html lang="en">
@include('partials.header')
<body>
<div class="container">
            <form action="/projects/{{$project->id}}" method="post">
                @csrf
                @method("PATCH")
                <div class="form-group row">
                    <label class="col-form-label col-2" for="title">Project title </label>
                        <input class="form-control col-10" type="text" name="title" id="title" value="{{$project->title}}">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-2" for="description">Project title</label>
                    <textarea class="form-control col-10" name="description" id="description" cols="30" rows="10">{{$project->description}}</textarea>
                </div>

                <div class="form-group row">
                    <input class="form-control btn-success col-2" type="submit" value="Update Project">
                </div>
                <div class="form-group row">
                    <form action="/projects/{{$project->id}}" method="post">
                        @csrf
                        @method("DELETE")
                        <input class="form-control btn-danger col-2" type="submit" value="DELETE">
                    </form>
                </div>


            </form>

</div>
@include('partials.footer')
</body>
</html>