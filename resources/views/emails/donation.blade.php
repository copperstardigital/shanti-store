@extends('emails.layouts.responsive')

@section('subject', 'Donation Submitted')

@section('content')

    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>

@endsection