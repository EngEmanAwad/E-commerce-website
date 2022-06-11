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

                    {{ __('You are logged in!') }}






                    <a href="{{route('carts.index')}}"   class="btn btn-warning mb-5  mt-5 ms-5">Go shopping </a> 







            

















































                </div>
            </div>
        </div>
    </div>
</div>
@endsection
