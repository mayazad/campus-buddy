<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password – Campus Buddy</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <header class="page-header">
        <a class="brand" href="{{ url('/') }}" aria-label="Campus Buddy home">
            <span class="brand__icon" aria-hidden="true">
                <svg viewBox="0 0 64 64" focusable="false">
                    <path d="M32 10L6 22l26 12 26-12-26-12z" fill="currentColor" />
                    <path d="M14 30v10c0 6 8 12 18 12s18-6 18-12V30l-18 8-18-8z" fill="currentColor" opacity="0.9" />
                    <path d="M54 25v16" stroke="currentColor" stroke-width="4" stroke-linecap="round" />
                    <circle cx="54" cy="45" r="4" fill="currentColor" />
                </svg>
            </span>
            <span class="brand__text">
                <span class="brand__name">Campus Buddy</span>
            </span>
        </a>
    </header>

    <main class="page">
        <section class="card" aria-labelledby="reset-title">
            <h1 id="reset-title" class="title" style="font-size: clamp(26px, 4vw, 38px); margin-bottom: 8px;">Reset Password</h1>
            <p style="text-align:center; color: var(--muted); margin: 0 0 24px; font-size: 15px;">
                Choose a strong new password for your account.
            </p>

            @if ($errors->has('token'))
                <div style="background-color: #fee2e2; color: #991b1b; padding: 12px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                    {{ $errors->first('token') }}
                </div>
            @endif

            <form method="POST" action="{{ route('reset-password.update') }}" class="form" novalidate>
                @csrf

                {{-- Hidden fields --}}
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">

                <div class="field">
                    <label for="password" class="label">New Password</label>
                    <input id="password" name="password" type="password"
                        class="input @error('password') input--error @enderror"
                        placeholder="Min 8 characters"
                        autocomplete="new-password" required>
                    @error('password')
                        <p class="error" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label for="password_confirmation" class="label">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        class="input"
                        placeholder="Repeat new password"
                        autocomplete="new-password" required>
                </div>

                <button type="submit" class="btn btn--primary">Reset Password</button>

                <div class="links">
                    <a class="link" href="{{ route('login') }}">← Back to Sign In</a>
                </div>
            </form>
        </section>
    </main>
</body>

</html>
