@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verification Pending') }}</div>

                <div class="card-body">

                    {{ __('Please wait for the admin to approve your account. After the approval  you can access your account.') }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
