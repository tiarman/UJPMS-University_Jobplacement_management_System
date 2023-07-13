<x-mail::message>
# Client Information(Free Trial) of JPMS.
### Name: {{$name}}
### Email: {{$email}}
### Phone: {{$phone}}
{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
