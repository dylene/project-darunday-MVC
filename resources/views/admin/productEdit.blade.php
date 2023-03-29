@extends('template.dashboard')
@section('contents')

<div class="card">
  <div class="card-body">
      
    <form action="{{url('/admin/'.$modals->id)}}" method="post">
    {!! csrf_field() !!}
        @method ("PATCH")
        <label>ID</label></br>
        <input type="hidden" name="id" id="id" value="{{$modals->id}}" id="id"/></br>
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$modals->title}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="paragraph" name="desc" id="desc" value="{{$modals->desc}}" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="image" id="image" value="{{$modals->image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>

@stop  