<p>
    Dear {{ $otp_user_name }},<br/>
    Thank you for choosing {{ env("APP_NAME") }}. For your security, please use the One-Time Password (OTP) provided below to verify your identity and complete the process.<br/>
    Your OTP: {{ $otp }}<br/><br/>
    This OTP is valid for <b>15 minutes</b>. Please do not share this code with anyone to ensure the safety of your account.<br/><br/>
    If you did not get this OTP, please contact our support team immediately at [support <b>souravrupani@gmail.com</b>].<br/>
    <br/>
    Thank you,<br/>
    {{ env("APP_NAME") }} Team.
</p>