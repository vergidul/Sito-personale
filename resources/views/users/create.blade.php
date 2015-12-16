@extends('app')

@section('title')
Registrazione
@stop

@section('content')
<h1>Benvenuto</h1>
<hr />
{!! Form::model($user = new \App\User, array('action' => 'UsersController@index')) !!}
	@include('users.form', ['submitButtonText' => 'SALVA', 'create' => true])
{!! Form::close() !!}
<hr />

  <!--   <div></fieldset><fieldset><legend>Trattamento dei dati personali</legend><div class="formelement"><span class="prvlabel">
  <p>Ricordiamo che il trattamento dei vostri dati personali è attività tutelata dal Decreto Legislativo n° 196 del 30 giugno 2003.</p>
  <p>Dichiaro di aver preso visione dell'<a href="javascript:open_win_scroll('http://www.urmet.it//urmet_web/it/private/privacy.html','950','700')">informativa sulla privacy</a> e di accettarne tutte le condizioni.</p></span>
  <input class="agree" value="true" onclick="" id="" name="privacyMktgFlag" type="checkbox"/><input name="_privacyMktgFlag" type="hidden"/> -->

@include('errors.list')

@stop