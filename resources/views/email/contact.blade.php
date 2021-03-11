@component('mail::message')
# {{ $topic ?? ''}}

{{$topic ?? '' }} is not Cartoon. you normie...

@component('mail::button', ['url' => ''])
Thank you
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
