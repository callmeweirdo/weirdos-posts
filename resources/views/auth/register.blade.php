@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg text-center">
            <h2>Register</h2>

            <form action="{{ route('register.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Enter Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Enter Name</label>
                    <input type="text" name="username" id="username" placeholder="Enter Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Enter Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password Again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                        Register
                    </button>
                </div>
            </form>
        </div>

        

    </div>
@endsection