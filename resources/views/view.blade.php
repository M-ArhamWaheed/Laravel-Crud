@extends('layout.layout')

@section('content')
    <div class="container flex justify-center items-center h-[100%] ">
        <div
            class="block w-[400px] p-6 text-center bg-gray-900 border border-gray-200 rounded-lg  dark:bg-gray-800 dark:border-gray-700  shadow-md shadow-blue-600 ">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">User Id</h5>
            <p class="font-normal text-white dark:text-gray-400">{{ $users->id }}</p>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">First Name</h5>
            <p class="font-normal text-white dark:text-gray-400">{{ $users->fname }}</p>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Last Name</h5>
            <p class="font-normal text-white dark:text-gray-400">{{ $users->lname }}</p>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Email Id</h5>
            <p class="font-normal text-white dark:text-gray-400">{{ $users->email }}</p>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Mobile No</h5>
            <p class="font-normal text-white dark:text-gray-400">{{ $users->phone_no }}</p>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">City</h5>
            <p class="font-normal text-white dark:text-gray-400">{{ $users->city }}</p>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Age</h5>
            <p class="font-normal text-white dark:text-gray-400">{{ $users->age }}</p>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Address</h5>
            <p class="font-normal text-white dark:text-gray-400">{{ $users->address }}</p>
        </div>
    </div>
    <a href="{{ route('home') }}"
        class="bg-gray-950 px-5 absolute bottom-5 right-10 py-2 float-end rounded-lg hover:bg-gray-800 border border-blue-700 duration-500">
        Back
    </a>
@endsection
