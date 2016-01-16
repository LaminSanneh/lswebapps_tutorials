@extends('layouts.master')

@section('content')

<h2>Users</h2>
<p>
  {{$user->name}}
</p>
<p>
  {{$user->email}}
</p>
@endsection
