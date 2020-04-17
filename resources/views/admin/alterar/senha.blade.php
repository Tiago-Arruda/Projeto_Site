
@extends('adminlte::page')

@section('title', 'Alterar senha')

@section('content_header')
<h1>Alterar senha</h1>

  <ol class="breadcrumb">
        <li><a href="">Home&nbsp;|&nbsp;</a><li>
        <li><a href="">configuração</a><li >                       
    </ol>
@stop

@section('content')
<div class="box">
        
  @section('adminlte_css')
  @yield('css')
@stop

@section('classes_body', 'login-page')

@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )
@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
  @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
  @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
  @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
  @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('body')
  <div class="login-box">
      <div class="login-logo">
          <a href="{{ $dashboard_url }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
      </div>
      <div class="card">
          <div class="card-body login-card-body">
              <p class="login-box-msg">{{ "Alterar senha" }}</p>
              <form action="{{ 'updateOwn' }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="token" value={{ csrf_field() }}
                  
                  <div class="input-group mb-3">
                      <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ 'Nova senha'}}">
                      <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                          </div>
                      </div>
                      @if ($errors->has('password'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('password') }}</strong>
                          </div>
                      @endif
                  </div>
                  <div class="input-group mb-3">
                      <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                             placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                      <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                          </div>
                      </div>
                      @if ($errors->has('password_confirmation'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                          </div>
                      @endif
                  </div>
                  <button type="submit" class="btn btn-primary btn-block btn-flat">
                      {{ "Alterar senha" }}
                  </button>
              </form>
              @if(session('success'))
              <div class="alert alert-success">
                 {{ session('success') }}
              </div>
              <ol class="breadcrumb">
                <li><a href="/home">Voltar&nbsp;</a><li>
                                       
            </ol>
              @endif
          </div>
      </div>
  </div>
@stop

@section('adminlte_js')
  <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
  @stack('js')
  @yield('js')
@stop


@stop
