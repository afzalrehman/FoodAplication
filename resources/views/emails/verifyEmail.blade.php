@component('mail::message')
# Welcome, {{ $user->name }}!

We are thrilled to have you on board. Please verify your email to start exploring our services.

@component('mail::panel')
### Your Account Details:
- **Username:** {{ $user->username }}
- **Email:** {{ $user->email }}
@endcomponent

@component('mail::button', ['url' => url('verify', $user->remember_token), 'color' => 'success'])
Verify Your Email
@endcomponent

If you did not create this account, please ignore this email.

Thank you for registering with us!  
We look forward to providing you with the best experience.

Thanks,  
**{{ config('app.name') }} Team**
@endcomponent
