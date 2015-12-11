@extends('app')

@section('title')
Nuovo utente
@stop

@section('content')
<h1>Nuovo Utente</h1>
<hr />
{!! Form::model($user = new \App\User, array('action' => 'UsersController@index')) !!}
	@include('users.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop