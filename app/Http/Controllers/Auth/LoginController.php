<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        $previousUrl = $request->input('previous');

        if ($user->isAdmin()) {
            return redirect()->route('admin');
        }
        
        // Nếu tồn tại URL của trang trước đó, chuyển hướng đến đó
        if ($previousUrl) {
            return redirect()->intended($previousUrl);
        }
    
        // Mặc định, chuyển hướng đến trang home
        return redirect()->intended($this->redirectPath());
    }
    

}
