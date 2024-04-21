<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use  App\Http\Requests\AddUserRequest;
use  App\Http\Requests\UpdateRequest;
use App\Models\AddUser;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function addUser(AddUserRequest $request)
    {
        $users = new AddUser;

        $users->fname = $request->fname;
        $users->lname = $request->lname;
        $users->email = $request->email;
        $users->phone_no = $request->phone_no;
        $users->city = $request->city;
        $users->age = $request->age;
        $users->password = md5($request->password);
        $users->cpassword = md5($request->cpassword);
        $users->address = $request->address;

        $users->save();

        return redirect()->route('home');
    }


    public function fetchData(Request $request)
    {
        $search = $request['search'] ?? "";

        if ($search != "") {
            $users = AddUser::where('fname', 'LIKE', '%' . $search . '%')
                ->orWhere('lname', 'LIKE', '%' . $search . '%')
                ->orWhere('email', 'LIKE', '%' . $search . '%')
                ->get();
        } else {
            $users = AddUser::select('fname', 'lname', 'email', 'id')->get();
        }
        return view('home', compact('users', 'search'));
    }

    public function view(string $id)
    {
        $users = AddUser::find($id);
        return  view('view', compact('users'));
    }

    public function delete(string $id)
    {
        $users = AddUser::find($id);
        $users->delete();

        return redirect()->route('home');
    }

    public function getForUpdate(string $id)
    {
        $users = AddUser::find($id);
        return view('update', compact('users'));
    }

    public function update(AddUserRequest $request, string $id)
    {

        $users = AddUser::find($id);

        $users->fname = $request->fname;
        $users->lname = $request->lname;
        $users->email = $request->email;
        $users->phone_no = $request->phone_no;
        $users->city = $request->city;
        $users->age = $request->age;
        $users->password = md5($request->password);
        $users->cpassword = md5($request->cpassword);
        $users->address = $request->address;

        $users->save();

        return redirect()->route('home');
    }


    // public function search(Request $request)
    // {
    //     return $request;
    // }
}
