<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('home');
        }
    }

    public function admin() 
    {
        $users = DB::table('users')->paginate(10);

        return view('pages.admin', ['users' => $users]);
    }

    public function lihatAdmin()
    {
        return view('pages.tambahAdmin');
    }

    public function tambahAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));

        return $this->registered($request, $user)
                        ?: redirect('/admin');
    }

    public function formUpdate(Request $request, $id)
    {
        $show = User::findOrFail($id);
        
        return view('pages.updateAdmin', compact('show'));
    }

    public function updateAdmin(Request $request)
    {
        if(!empty($request->post('password'))) {
            $this->validates($request->all())->validate(); 
            
            DB::table('users')
              ->where('id', $request->post('id'))
              ->update([
                  'name' => $request->post('name'), 
                  'email' => $request->post('email'),
                  'password' => Hash::make($request->post('password')),
                ]);
        } else {
            DB::table('users')
              ->where('id', $request->post('id'))
              ->update([
                  'name' => $request->post('name'), 
                  'email' => $request->post('email')
                ]);
        }

        return redirect()->route('admin');
    }

    public function deleteAdmin(Request $request)
    {
        DB::table('users')->where('id', $request->post('id'))->delete();

        return redirect()->route('admin');
    }

    public function showAdmin(Request $request, $id)
    {
        $show = User::findOrFail($id);
        
        return view('pages.lihatAdmin', compact('show'));
    }

    // ==========================================================
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validates(array $data)
    {
        return Validator::make($data, [
            'password' => ['string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request, $user)
    {
        //
    }

}
