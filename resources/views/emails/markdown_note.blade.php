@component('mail::message')
# Hello User

{{$title}}
{$student_id}
{$appid}
{$notes}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
