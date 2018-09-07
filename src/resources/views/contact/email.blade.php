@component('mail::message')
# Introduction

There is a message form {{ $name }}
<br>
Message:
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
