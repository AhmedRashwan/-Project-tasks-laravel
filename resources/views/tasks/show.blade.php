<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("tabTitle","laracast")</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        .completed{
            text-decoration: line-through;
        }
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
{{--<h3>Project {{$task->project->id}}</h3>--}}

<h3>{{$task->title}}</h3>

<ol>
    @if($task->length>0)
        <ul>
            <li>{{$project->id}}</li>
            <li>
                <form action="/tasks/{{$task->id}}" method="POST">
                    @csrf
                    @method("PATCH")
                    <input type="checkbox" name="completed" onchange="this.form.submit()">
                    {{ $task->title }}
                </form>
            </li>
        </ul>
    @endif
</ol>

</div>
</body>
</html>
