@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <h3>My tasks</h3>
        
        <a href="{{ route('tasks.create')}}" class="btn btn-success">Создать</a>
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td class="number">{{$task->id}}</td>
                        <td class="title"><p>{{$task->title}}</p>     <p>{{$task->description}}</p></td>
                                                <td class="rightTD">
                        <a href="{{route('tasks.show', $task->id)}}">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                         <a href="{{ route('tasks.edit', $task->id) }}">
                        <i class="glyphicon glyphicon-edit"></i>
                        </a>
                        

                         {!! Form::open(['class' => 'formInline', 'method' => 'DELETE', 'route' => ['tasks.destroy', $task->id]]) !!}
                         <button class="deleteButton" onclick="return confirm('Are you sure?')">
                        <i class="glyphicon glyphicon-remove"></i>
                        </button>
                        {!! Form::close() !!}
                                                                        </td>
                                          
                        
                                 </tr>
                                 
                                           @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection