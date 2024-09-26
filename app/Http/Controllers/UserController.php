<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search1')) {
            $Clients = User::where('prenom', "like", '%' . request('search1') . '%')
            ->orWhere('nom', "like", '%' . request('search1') . '%')
            ->orWhere('ville', "like", '%' . request('search1') . '%')
            ->paginate(6);
        } else {
            $Clients = User::query()->latest()->paginate(6);
        }
        $table = 'clients';
        return view('Backend.clients.index',compact('Clients','table'));
    }
    /**
     * Display The profile of user.
     */
    public function UserProfile()
    {
        return view('User_data.profile');
    }

    /**
     * Display The profile of user.
     */
    public function AdminProfile()
    {
        $table = 'profile';

        return view('Backend.profile',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Login.Registre');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'adresse' => 'required',
            'ville' => 'required',
            'tel' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:50|confirmed'
        ]);

        $user = new User([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'ville' => $request->get('ville'),
            'tel' => $request->get('tel'),
            'email' => $request->get('email'),
            'adresse' => $request->get('adresse'),
            'password' => bcrypt($request->get('password'))
        ]);

        $user->save();

        return to_route('login.login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {        
    
        // Find the user by ID
        $user = User::findOrFail($id);

         // Update user attributes
         $user->nom = $request->input('nom');
         $user->prenom = $request->input('prenom');
         $user->ville = $request->input('ville');
         $user->tel = $request->input('tel');
         $user->adresse = $request->input('adresse');
         $user->email = $request->input('email');

         $user->save();
        return back()->with('success', 'Profile updated successfully!');
    
    }


    public function changePassword(Request $request, $id)
    {
        // Validate the request data
        // $request->validate([
        //     'current_password' => 'required',
        //     'new_password' => 'required|string|min:8|confirmed',
        // ]);
    
        // Find the user by ID
        $user = User::findOrFail($id);
    
        // Verify the current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'The current password is incorrect.');
        }
    
        // Update the password
        $user->password = Hash::make($request->new_password);
        // dd($user);
        $user->save();
    
        // Redirect back with a success message
        return back()->with('success', 'Password changed successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flush();

        Auth::logout();
        return  to_route('Login.login');
    }
}
