<?php
namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    /**
     * Function: registerUser
     * @param Illuminate\Http\Request
     */
    public function registerUser(Request $request)
    {
        $validatedRequest = $request->validate([
            'name'         => 'required',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|min:5',
            'phone_number' => 'required|digits:10',
        ]);

        $user = User::create($validatedRequest);

        if ($user) {

            # Dispatch the event
            Event::dispatch(new UserRegistered($user));

            return back()->with('success', 'User Registered Successfully!');
        }
    }
}
