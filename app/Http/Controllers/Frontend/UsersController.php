<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UsersController extends Controller
{
    public function register()
    {
        return view('frontend.users.register');
    }

    public function login()
    {
        return view('frontend.users.login');
    }


    // User Register
    public function RegisterUser(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // Check If User Already Exists
            $userCount = User::where('email', $data['email'])->count();
            if ($userCount > 0) {
                return redirect()->back()->with('error_message', "Email Already Exists!");
            } else {
                //  Register The User
                $user = new User();
                $user->name = $data['name'];
                $user->mobile = $data['mobile'];
                $user->email = $data['email'];
                $user->city = $data['city'];
                $user->country = $data['country'];
                $user->address = $data['address'];
                $user->state = $data['state'];
                $user->pincode = $data['pincode'];
                $user->password = bcrypt($data['password']);
                $user->save();

                if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                    // Update User Cart Session To User Id
                    if (!empty(Session::get('session_id'))) {
                        $user_id = Auth::user()->id;
                        $session_id = Session::get('session_id');
                        Cart::where('session_id', $session_id)->update(['user_id' => $user_id]);
                    }
                    return redirect('/');
                }
            }
        }
    }

    public function CheckEmail(Request $request)
    {
        // Check Email Already Exists Or Not
        $data = $request->all();
        $emailCount = User::where('email', $data['email'])->count();
        if ($emailCount > 0) {
            echo "false";
        } else {
            echo "true";
            die;
        }
    }


    // User Login
    public function loginUser(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                // Update User Cart Session To User Id
                if (!empty(Session::get('session_id'))) {
                    $user_id = Auth::user()->id;
                    $session_id = Session::get('session_id');
                    Cart::where('session_id', $session_id)->update(['user_id' => $user_id]);
                }
                return redirect('/');
            } else {
                return redirect()->back()->with('error_message', "Invalid username or password");
            }
        }
    }

    // User Logout
    public function LogoutUser()
    {
        Auth::logout();
        return redirect('/');
    }
}
