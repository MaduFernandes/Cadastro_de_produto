@extends('layouts.template')

@section('login')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/">
                    @csrf
                    <div class="form-group row">
                        <label id="email" class="col-md-4 col-form-label text-md-right">{{_('E-mail')}}</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" name="email" class="@error('email') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ _('Senha') }}</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="password" name="password" class="@error('password') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
