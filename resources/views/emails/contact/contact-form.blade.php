@component('mail::message')


#Thank you for message

{{$data['message']}}

By {{$data['name']}}

Replay at {{$data['email']}}

@endcomponent
