@extends('layout.admin')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-semibold text-center mb-6">Admin Login</h1>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="login" class="block text-sm font-medium text-gray-700 mb-1">Login</label>
                <input id="login" name="login" type="text" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input id="password" name="password" type="password" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
            </div>
            <button type="submit" class="w-full inline-flex items-center justify-center bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800 transition-colors">Sign in</button>
        </form>
    </div>
</div>
@endsection
