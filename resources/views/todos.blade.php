@extends('layout')

@section('content')

<div class="row">

    <div class="col-lg-12 col-lg-3">

        <form action="/todo/create" method="POST">
            @csrf
            <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new todo">

        </form>

    </div>

</div>

@foreach ($todos as $todo)
                    
{{$todo->todo}} <a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">x</a>
<a href="{{route('todo.edit',['id'=>$todo->id])}}" class="btn btn-xs btn-info">edit</a>
@if (!$todo->completed)

<a href="{{route('todo.completed',['id'=>$todo->id])}}" class="btn btn-xs btn-success">Mark as completed</a>
    
@else
  <span class="text-success">Completed!</span>  
@endif
<hr>
@endforeach

@endsection