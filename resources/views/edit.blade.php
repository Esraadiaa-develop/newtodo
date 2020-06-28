@extends('layout')

@section('content')

<div class="row">

    <div class="col-lg-12 ">

        <form action="{{route('todo.update',['id'=>$todo->id])}}" method="POST">
            @csrf
            <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="Create a new todo">

        </form>

    </div>

</div>


@endsection