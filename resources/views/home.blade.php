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

                    <b>{{ __('You are logged in!') }}</b>

                    <hr>
                        <p>
                            USER DETAILS<br>
                            Name: {{ Auth::user()->name }} <br>
                            Username: {{ Auth::user()->username }} <br>
                            Email: {{Auth::user()->email}}
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
