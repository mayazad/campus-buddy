<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; background: #f0f9ff; margin: 0; padding: 32px 16px; }
        .container { max-width: 520px; margin: 0 auto; background: #ffffff; border-radius: 16px; box-shadow: 0 8px 32px rgba(0,0,0,0.10); overflow: hidden; }
        .header { background: linear-gradient(135deg, #00a6e8, #0070b8); padding: 32px 28px; text-align: center; }
        .header svg { width: 56px; height: 56px; color: #fff; }
        .header h1 { color: #fff; margin: 12px 0 0; font-size: 22px; font-weight: 800; letter-spacing: -0.3px; }
        .body { padding: 32px 28px; }
        .body p { color: #334155; font-size: 15px; line-height: 1.6; margin: 0 0 16px; }
        .btn { display: block; text-align: center; background: #00a6e8; color: #fff; text-decoration: none; font-weight: 800; font-size: 16px; padding: 14px 28px; border-radius: 999px; margin: 24px 0; }
        .note { font-size: 13px; color: #94a3b8; border-top: 1px solid #e2e8f0; padding-top: 16px; margin-top: 8px; }
        .url { word-break: break-all; font-size: 12px; color: #64748b; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <svg viewBox="0 0 64 64" fill="white">
                <path d="M32 10L6 22l26 12 26-12-26-12z"/>
                <path d="M14 30v10c0 6 8 12 18 12s18-6 18-12V30l-18 8-18-8z" opacity="0.9"/>
                <path d="M54 25v16" stroke="white" stroke-width="4" stroke-linecap="round"/>
                <circle cx="54" cy="45" r="4"/>
            </svg>
            <h1>Campus Buddy</h1>
        </div>
        <div class="body">
            <p>Hi {{ $user->name }},</p>
            <p>We received a request to reset the password for your Campus Buddy account. Click the button below to choose a new password:</p>
            <a href="{{ $resetUrl }}" class="btn">Reset My Password</a>
            <p>This link will expire in <strong>60 minutes</strong>. If you didn't request a password reset, you can safely ignore this email — your account is still secure.</p>
            <div class="note">
                <p>If the button above doesn't work, copy and paste this link into your browser:</p>
                <p class="url">{{ $resetUrl }}</p>
            </div>
        </div>
    </div>
</body>
</html>
