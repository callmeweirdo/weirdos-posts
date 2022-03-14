@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg text-center">
            <h2>Posts</h2>


            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">
                        Enter Post Body
                    </label>
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-200 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                        placeholder="type Your Bullshit Here.."
                        >
                    </textarea>

                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-400 text-white px-4 py-2 rounded font-medium w-2/12">Post</button>
                </div>

            </form>
        </div>
    </div>
@endsection