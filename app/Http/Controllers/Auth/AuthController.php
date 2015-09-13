<?php

namespace App\Http\Controllers\Auth;

use Config;
use App\User;
use App\Church;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    public function login(Request $request)
    {
        
        $creds = [
        'email'=>$request->input('email'),
        'password'=>$request->input('password')
        ];
        var_dump(\Auth::attempt($creds)); 
        if(\Auth::attempt($creds)){
             return redirect('/');
        }
        else
        {
            Config::set( 'auth.model' , 'App\Church' );
        Config::set( 'auth.table' , 'churches' );
        var_dump(\Auth::attempt($creds)); exit();
        if(\Auth::attempt($creds)){
            return redirect('/');

        }
        else{
            return response('Unauthorized.', 401);
        }
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request)
    {
        if($request->input('type')=='user'){
                return User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('password')),
                ]);
            }
            elseif($request->input('type')=='church'){
                $church = Church::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address'=>$request->input('address'),
            'password'=>bcrypt($request->input('password'))
            ]);
        $church->subscription('church-membership')->create($request->input('stripeToken'));
        return $church;
            }
        else {
            return response('Unauthorized.', 401);
        }
    }
}
