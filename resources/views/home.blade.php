@extends('layout.layout')

@section('content')
    <div class="addUser text-center text-3xl mt-7">

        <button data-popover-target="popover-default" type="button" class="text-white">
            <div> <a href="{{ route('form') }}" class="hover:bg-gray-500 rounded-[50%] p-5 duration-500 hover:text-gray-900">
                    <i class="fa-solid fa-user-plus"></i>
                </a></div>
        </button>

        <div data-popover id="popover-default" role="tooltip"
            class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-gray-900 border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                <h3 class="font-semibold text-gray-900 dark:text-white">Add User</h3>
            </div>
            <div class="px-3 py-2 text-white">
                <p>Fill Form And Add a New User</p>
            </div>
            <div data-popper-arrow></div>
        </div>


    </div>


    {{-- search bar --}}

    <div class="searchBar">

        <form action="#" method="get">
            @csrf
            <div class="relative">
                <input type="text" name="search" id="search" placeholder="Search Users" value="{{ $search }}"
                    class="w-[100%] mt-10 bg-gray-900 focus:pl-10 duration-500 border-blue-600 rounded-lg">
                <button type="submit" name="find" class="absolute right-3 top-12"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
    </div>

    {{-- Table --}}

    {{-- <h1 class="mt-16 font-semibold">Total Users: <span> {{ $users->total() }}</span>
    </h1> --}}

    <div class="w-[100%] overflow-x-auto">
        <table class="w-[100%] text-center mt-3 shadow-xl shadow-white">
            <thead class="bg-gray-950 uppercase">
                <tr>
                    <th class="py-3 ">#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody class="bg-gray-900">
                @foreach ($users as $user)
                    <tr class="border-b-2 border-blue-600">
                        <td class="py-3 px-5">{{ $loop->iteration }}</td>
                        <td class="py-3 px-5">{{ $user->fname }}</td>
                        <td class="py-3 px-5">{{ $user->lname }}</td>
                        <td class="py-3 px-5">{{ $user->email }}</td>
                        <td class="py-3 px-5">
                            <a href=" {{ route('view', $user->id) }}"
                                class="bg-blue-600 py-1 rounded-sm hover:bg-blue-900 duration-300 px-3">View</a>
                        </td>
                        <td class="py-3 px-5">
                            <a href="{{ route('delete', $user->id) }}"
                                class="bg-yellow-500 py-1 rounded-sm hover:bg-yellow-900 duration-300 px-3">Delete</a>
                        </td>
                        <td class="py-3 px-5">
                            <a href="{{ route('getForUpdate', $user->id) }}"
                                class="bg-red-600 py-1 rounded-sm hover:bg-red-900 duration-300 px-3">Update</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>

        </table>

        {{-- {{ $user->links() }} --}}
    </div>
    {{-- Pagination --}}
@endsection
