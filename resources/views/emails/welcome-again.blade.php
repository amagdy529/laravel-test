@component('mail::message')
# Introduction

Thanks so must for registering!

@component('mail::button', ['url' => 'https://google.com'])
Start Brwosing
@endcomponent

@component('mail::panel', ['url' => ''])
THANKS AGAIN!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
