@extends('components.layout')

@section('content')
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-grey-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Register!</h1>
        <form method="POST" action="/register" class="mt-10">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="name"
                >
                    Name
                </label>

                <input
                    type="text"
                    class="border border-gray-400 p-2 w-full"
                    name="name"
                    id="name"
                    required
                >
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="username"
                >
                    Username
                </label>

                <input
                    type="text"
                    class="border border-gray-400 p-2 w-full"
                    name="username"
                    id="username"
                    required
                >
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="email"
                >
                    Email
                </label>

                <input
                    type="email"
                    class="border border-gray-400 p-2 w-full"
                    name="email"
                    id="email"
                    required
                >
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="password"
                >
                    Password
                </label>

                <input
                    type="password"
                    class="border border-gray-400 p-2 w-full"
                    name="password"
                    id="password"
                    required
                >
            </div>

            <div class="mb-6">
                <button
                    type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Submit
                </button>
            </div>
        </form>
    </main>
@endsection
