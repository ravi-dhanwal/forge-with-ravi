<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reset Password – {{ config('app.name') }}</title>
</head>

<body style="margin:0; padding:0; background:#f4f7fb; font-family:Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;">
<tr>
<td align="center">

<!-- CARD -->
<table width="600" cellpadding="0" cellspacing="0"
style="
background:#ffffff;
border-radius:12px;
box-shadow:0 12px 30px rgba(0,0,0,0.08);
overflow:hidden;
">

<!-- HEADER -->
<tr>
<td style="padding:28px; text-align:center; background:#f1f5f9;">
    <h2 style="margin:0; color:#0f172a; font-weight:600;">
        {{ config('app.name') }}
    </h2>
</td>
</tr>

<!-- BODY -->
<tr>
<td style="padding:36px; color:#334155; font-size:15px; line-height:1.7;">

<p style="margin-top:0; font-size:16px; color:#0f172a;">
    <strong>Hello!</strong>
</p>

<p>
You are receiving this email because we received a password reset request
for your account.
</p>

<!-- BUTTON -->
<table width="100%" cellpadding="0" cellspacing="0" style="margin:32px 0;">
<tr>
<td align="center">
<a href="{{ $url }}"
style="
background:#111827;
color:#ffffff;
text-decoration:none;
padding:14px 30px;
border-radius:6px;
font-size:15px;
font-weight:500;
display:inline-block;
">
Reset Password
</a>
</td>
</tr>
</table>

<p style="color:#475569; font-size:14px;">
This password reset link will expire in
<strong>{{ config('auth.passwords.users.expire') }} minutes</strong>.
</p>

<p style="color:#64748b; font-size:14px;">
If you did not request a password reset, no further action is required.
</p>

<p style="margin-top:28px;">
Regards,<br>
<strong>{{ config('app.name') }}</strong>
</p>

<hr style="border:none; border-top:1px solid #e5e7eb; margin:32px 0;">

<p style="font-size:13px; color:#64748b;">
If you're having trouble clicking the "Reset Password" button,
copy and paste the URL below into your web browser:
</p>

<p style="font-size:13px; word-break:break-all;">
<a href="{{ $url }}" style="color:#2563eb;">
{{ $url }}
</a>
</p>

</td>
</tr>

<!-- FOOTER -->
<tr>
<td style="background:#f8fafc; padding:18px; text-align:center;">
<p style="margin:0; font-size:12px; color:#94a3b8;">
© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
</p>
</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>