<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .data{

                font-size: 30px;
            }

            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
                margin-left:410px;
            }
            .data {
                margin-left:300px;
            }
            table{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            
            <div class="content">
                <div class="title m-b-md">
                    Paptech Laravel
                </div>
            </div>
            
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            
            <form action="{{route('todo.store')}}" method="post">
                @csrf
                <div class="form-group col-md-4 offset-4">
                    <input type="text" name="todo" placeholder="Add Todo" class="form-control @if($errors->has('todo')) is-invalid @endif" >
                    @if($errors->has('todo')) <span class="text-danger"> {{$errors->first('todo')}}</span> @endif
                </div>
                <div class="row col-md-4 offset-4" style="margin-bottom: 20px;">
                    <input type="submit" value="Add Todo"class="btn btn-primary offset-5">
                </div>
            </form>
        </div>
        <div class="row data">
            <table class="table-responsive table-striped table-bordered">
                <tr class="bg-info " style="color:white">
                    <td>ID</td>
                    <td>Todo</td>
                    <td>Status</td>
                    <td>Delete</td>
                </tr>
                @foreach($todos as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->todo}}</td>
                    @if($todo->status == 1) 
                    <td><a href="{{route('todo.deactive',['id'=>$todo->id])}}" class="btn-sm btn-danger">Deactive</a></td>
                    @else
                    <td><a href="{{route('todo.active',['id'=>$todo->id])}}" class="btn-sm btn-info">Active</a></td>
                    @endif
                    <td><a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn-sm btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
