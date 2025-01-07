@extends('layouts.auth')

@section('content')
  <div class="w-100">
    <!-- Header -->
    <div class="text-center mb-5">
      <h1 class="fw-bold mb-2">
        Two-Factor Authentication
      </h1>
    </div>
    <!-- END Header -->

    <div class="row g-0 justify-content-center">
      <div class="col-sm-8 col-xl-5">
        
        @include('layouts.alert')

        <form class="js-validation" action="{{ route('2fa') }}" method="post">
          {{ csrf_field() }}
          <div class="mb-4">
            <label for="code" class="form-label">Please enter verification code</label>
            <input type="text" class="number form-control form-control-lg form-control-alt py-3 {{ $errors->has('code') ? ' is-invalid' : '' }}" id="code" name="code" placeholder="Verification code" required>
            @if ($errors->has('code'))
                <div class="invalid-feedback">@lang($errors->first('code'))</div>
            @endif
          </div>
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <button type="submit" class="btn btn-lg btn-primary">
                <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Continue
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- END Sign In Form -->
  </div>
@endsection