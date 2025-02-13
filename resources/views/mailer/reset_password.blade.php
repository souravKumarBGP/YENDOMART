<b>Hello {{ $name }}</b>,

<p>We received a request to reset your account password. If this was you, you can reset your password by clicking the link below:</p>

<a href="{{ route("pages.reset_password_page", base64_encode($email)) }}">Reset Password</a>

<p>If you did not request this change, you can safely ignore this email.</p>

<b>
    Thank you,<br/>
    {{ env("APP_NAME") }}
</b>
