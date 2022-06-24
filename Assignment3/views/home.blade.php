@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session::has('error'))
                    <div class="alert alert-success" role="alert">
                            {{ session('error') }}
                        </div>
                        @endif
                    Welcome to researchers dashboard
                    <br>

                    {{ __('You are logged in!') }}
                    <br>
                    <a href="{{ url('/progress_user') }}" title="research progress"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> view information about research progress</button></a>
                    <br>
                    <br>
                    <a href="{{ route('change_password') }}" title="update password"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update password</button></a>

            

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
