@extends('emails.base.base')
@section('content')
    <div class="bigDiv container bg-yellow-300">
        <div class="bg-yellow-500 shadow-md borderb-2 text-center text-white font-italic text-lg">
            <h1>Contact Message</h1>
        </div>
            <p>Name : {{ $details['name'] }}</p>
            <p>Email : {{ $details['email'] }}</p>
            <p>Message : {{ $details['message'] }}</p>
    </div>
@endsection
