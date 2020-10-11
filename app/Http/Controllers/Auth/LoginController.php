<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        Auth::loginUsingId(2);
//        auth()->loginUsingId(1);
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        return ['email' => $request->{$this->username()}, 'password' => $request->password, 'verified' => '1'];
    }


    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $google_user = Socialite::driver('google')->user();
        $user = User::whereEmail($google_user->getEmail())->first();
        if (!$user) {
            User::create([
                'name' => $google_user->getName(),
                'email' => $google_user->getEmail(),
                'password' => bcrypt($google_user->getId()),
                'username' => Str::random(10),
                'mobile' => 0,
                'avatar' => $google_user->getAvatar(),
            ]);

        }
        auth()->loginUsingId($user->id);
        return redirect(route('home'));
//        dd($google_user);
//         $user->token;
    }
}
