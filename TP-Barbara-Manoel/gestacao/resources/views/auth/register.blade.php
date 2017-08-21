@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirme sua senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('idade') ? ' has-error' : '' }}">
                            <label for="idade" class="col-md-4 control-label">Idade</label>

                            <div class="col-md-6">
                                <input id="idade" type="integer" class="form-control" name="idade" value="{{ old('idade') }}" required autofocus>

                                @if ($errors->has('idade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dataGestacao') ? ' has-error' : '' }}">
                            <label for="dataGestacao" class="col-md-4 control-label">Data da concepção</label>

                            <div class="col-md-6">
                                <input id="dataGestacao" type="text" class="form-control" name="dataGestacao" value="{{ old('dataGestacao') }}" required autofocus>

                                @if ($errors->has('dataGestacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dataGestacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('peso') ? ' has-error' : '' }}">
                            <label for="peso" class="col-md-4 control-label">Peso inicial</label>

                            <div class="col-md-6">
                                <input id="peso" type="text" class="form-control" name="peso" value="{{ old('peso') }}" required autofocus>

                                @if ($errors->has('peso'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('peso') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
