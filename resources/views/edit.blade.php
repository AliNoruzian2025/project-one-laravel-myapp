@extends('layouts.app') {{-- اگه layout داری --}}
@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('users.update', $user->id ?? 1) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $user->name ?? '' }}">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $user->email ?? '' }}">
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Update User</button>
    </form>
@endsection