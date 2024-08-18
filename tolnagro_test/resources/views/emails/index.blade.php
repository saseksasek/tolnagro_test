@extends('layouts.app')

@section('content')
    <h1>Emails</h1>
    <a href="{{ route('emails.create') }}" class="btn btn-primary">Create New Email</a>
    <table class="table">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Body</th>
                <th>Send Count</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($emails as $email)
                <tr>
                    <td>{{ $email->subject }}</td>
                    <td>{{ $email->body }}</td>
                    <td>{{ $email->send_count }}</td>
                    <td>
                        <form action="{{ route('emails.destroy', $email['id']) }}" method="POST" class="delete-email-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


