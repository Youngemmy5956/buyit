@extends('layout.web.app')
@section('content')
<div class="col-6 mx-auto">
    <div class="card mt-4">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class=" mb-3">
                    <label for="">Email Address</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" required name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="text-center mb-1">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
