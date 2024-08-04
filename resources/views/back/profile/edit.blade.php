<x-back-layouts title="Edit Role">
    <x-back.breadcrumb page="Change Password" />
    <div class="row">
   <div class="col-12">
    <div class="card">
        <div class="m-3">
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <form method="POST" action="{{ route('password.profile.update') }}">
                @csrf
            
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}" required autocomplete="email" autofocus readonly>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label for="current_password" class="col-md-4 col-form-label text-md-end">{{ __('Current Password') }}</label>
                    <div class="col-md-6">
                        <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="current-password">
                        @error('current_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">{{ __('Confirm New Password') }}</label>
                    <div class="col-md-6">
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update Password') }}
                        </button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
   </div>
    </div>
</x-back-layouts>