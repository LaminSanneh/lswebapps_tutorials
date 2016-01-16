@extends('layouts.master')

@section('content')
  <h2>Inside section for create user</h2>
  {!! Form::open(array('route' => 'users.store')) !!}
    {!! Form::label('name') !!}
    {!! Form::text('name') !!}
    {!! Form::label('email') !!}
    {!! Form::text('email') !!}
    {!! Form::label('password') !!}
    {!! Form::password('password') !!}
    {!! Form::token() !!}
    {!! Form::submit() !!}
  {!! Form::close() !!}
@endsection
