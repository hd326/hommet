@component('mail::message')
# Thank you for your message

<strong>Name:</strong> {{ $data['name'] }}
<strong>Email:</strong> {{ $data['email_address'] }}

<strong>Message</strong> 

{{ $data['comments_questions'] }}
@endcomponent
