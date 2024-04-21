@extends('layout.layout')

@section('content')
    <form action="{{ route('update', $users->id) }}" method="post" class="addUserForm">
        @csrf
        {{-- @method('put') --}}
        <div class="grid lg:grid-cols-2 gap-6">
            <div class="mb-5">
                <div class="mb-2"><label for="fname" class=" font-medium text-white">First Name</label></div>
                <input type="text" value="{{ $users->fname }}" placeholder="Enter First Name" name="fname" id="fname"
                    class=" bg-gray-900 border focus:shadow-blue-700 text-white focus:shadow-lg focus:pl-7 text-sm rounded-lg focus:bg-gray-900 focus:text-white duration-500  focus:ring-blue-500 border-blue-500 block w-full
                     p-2.5">
                @error('fname')
                    <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-5">
                <div class="mb-2"><label for="lname" class=" mb-2 font-medium text-white">Last Name</label></div>
                <input type="text" value="{{ $users->lname }}" placeholder="Enter Last Name" id="lname"
                    name="lname"
                    class="bg-gray-900 border focus:shadow-blue-700 text-white focus:shadow-lg text-sm rounded-lg focus:bg-gray-900 focus:pl-7  focus:text-white duration-500 focus:ring-blue-500 border-blue-500 block w-full
                     p-2.5">
                @error('lname')
                    <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror

            </div>
        </div>
        {{-- Second Row --}}
        <div class="grid lg:grid-cols-2 gap-6">
            <div class="mb-5">
                <div class="mb-2"><label for="email" class=" mb-2 font-medium text-white">Email Address</label></div>
                <input type="email" value="{{ $users->email }}" placeholder="Enter Email Address" name="email"
                    id="email"
                    class="bg-gray-900 focus:pl-7  border focus:shadow-blue-700 text-white focus:shadow-lg text-sm rounded-lg focus:bg-gray-900 focus:text-white duration-500 focus:ring-blue-500 border-blue-500 block w-full
                    lg:p-2.5">
                @error('email')
                    <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-5">
                <div class="mb-2"><label for="phone_no" class=" mb-2  font-medium text-white">Mobile No</label></div>
                <input type="tel" value="{{ $users->phone_no }}" placeholder="Enter Mobile No" id="phone_no"
                    name="phone_no"
                    class="bg-gray-900 focus:pl-7  border focus:shadow-blue-700 focus:shadow-lg text-white text-sm rounded-lg focus:bg-gray-900 focus:text-white duration-500 focus:ring-blue-500 border-blue-500 block w-full
                     p-2.5">
                @error('phone_no')
                    <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        {{-- Third Row --}}

        <div class="grid lg:grid-cols-2 gap-6">
            <div class="mb-5">
                <div class="mb-2"><label for="city" class=" mb-2 font-medium text-white">City</label></div>
                <input type="text" value="{{ $users->city }}" placeholder="Enter City" id="city" name="city"
                    class="bg-gray-900 focus:pl-7  border focus:shadow-blue-700 focus:shadow-lg text-white text-sm rounded-lg focus:bg-gray-900 focus:text-white duration-500 focus:ring-blue-500 border-blue-500 block w-full
                     p-2.5">
                @error('city')
                    <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-5">
                <div class="mb-2"><label for="age" class=" mb-2 font-medium text-white">Age</label></div>
                <input type="number" value="{{ $users->age }}" placeholder="Enter Age" min="1" id="age"
                    name="age"
                    class="bg-gray-900 focus:pl-7  border focus:shadow-blue-700 focus:shadow-lg text-white text-sm rounded-lg focus:bg-gray-900 focus:text-white duration-500 focus:ring-blue-500 border-blue-500 block w-full
                     p-2.5">
                @error('age')
                    <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        {{-- Third Row --}}

        <div class="grid lg:grid-cols-2 gap-6">
            <div class="mb-5">
                <div class="mb-2"><label for="password" class=" mb-2 font-medium text-white">Password</label></div>
                <input type="password" value="{{ $users->password }}" placeholder="Enter Password" id="password"
                    name="password"
                    class="bg-gray-900 focus:pl-7  border focus:shadow-blue-700 focus:shadow-lg text-white text-sm rounded-lg focus:bg-gray-900 focus:text-white duration-500 focus:ring-blue-500 border-blue-500 block w-full
                     p-2.5">
                @error('password')
                    <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-5">
                <div class="mb-2"><label for="cpassword" class=" mb-2 font-medium text-white">Confirm Password</label>
                </div>
                <input type="password" value="{{ $users->cpassword }}" placeholder="Confirm Password" id="cpassword"
                    name="cpassword"
                    class="bg-gray-900 focus:pl-7  border focus:shadow-blue-700 focus:shadow-lg text-white text-sm rounded-lg focus:bg-gray-900 focus:text-white duration-500 focus:ring-blue-500 border-blue-500 block w-full
                     p-2.5">
                @error('cpassword')
                    <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        {{--  --}}
        <div class="mb-5">
            <div class="mb-2"><label for="address" class=" mb-2 font-medium text-white">Address</label></div>
            <input type="text" value="{{ $users->address }}" placeholder="Enter Address" id="address"
                name="address"
                class="bg-gray-900 focus:pl-7  border focus:shadow-blue-700 focus:shadow-lg text-white text-sm rounded-lg focus:bg-gray-900 focus:text-white duration-500 focus:ring-blue-500 border-blue-500 block w-full
                     p-2.5">
            @error('address')
                <span class="text-red-600">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div>
            <button type="submit" name="submit"
                class="bg-gray-950 ml-3 px-5 py-2 float-end rounded-lg hover:bg-gray-800 border border-blue-700 duration-500">
                Submit
            </button>
            <a href="{{ route('home') }}"
                class="bg-gray-950 px-5 py-2 float-end rounded-lg hover:bg-gray-800 border border-blue-700 duration-500">
                Back
            </a>
        </div>
    </form>
@endsection
