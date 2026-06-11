<section>
    <header>
        <h2 class="text-lg font-medium text-base-content">{{ __('Update Password') }}</h2>
        <p class="mt-1 text-sm text-base-content">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">@lang('Current Password')</span>
            </label>
            <input type="password" name="current_password" class="input input-bordered w-full" autocomplete="current-password" required />
            @foreach ($errors->updatePassword->get('current_password') as $message)
                <p class="label-text-alt text-error mt-1">{{ $message }}</p>
            @endforeach
        </div>

        <!-- New Password -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">@lang('New Password')</span>
            </label>
            <input type="password" name="password" class="input input-bordered w-full" autocomplete="new-password" required />
            @foreach ($errors->updatePassword->get('password') as $message)
                <p class="label-text-alt text-error mt-1">{{ $message }}</p>
            @endforeach
        </div>

        <!-- Confirm Password -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">@lang('Confirm Password')</span>
            </label>
            <input type="password" name="password_confirmation" class="input input-bordered w-full" autocomplete="new-password" required />
            @foreach ($errors->updatePassword->get('password_confirmation') as $message)
                <p class="label-text-alt text-error mt-1">{{ $message }}</p>
            @endforeach
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            @if (session('status') === 'password-updated')
                <div role="alert" class="alert alert-success py-2 px-4 w-auto">
                    <span class="text-sm">{{ __('Saved.') }}</span>
                </div>
            @endif
        </div>
    </form>
</section>