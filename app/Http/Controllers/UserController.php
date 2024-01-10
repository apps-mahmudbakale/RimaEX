<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use App\Models\Security;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('read-users');

        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create-users');
        $roles = Role::all();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        $this->authorize('create-users');
        $user = User::create(array_merge($request->except('password'), ['password' => bcrypt($request->password)]));
        $user->syncRoles($request->input('roles', []));

        return redirect()->route('app.users.index')->with('success', 'User Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $securitiesValues = DB::table('securities')->join('commodities', 'securities.commodity_id', '=', 'commodities.id')->where('securities.user_id', '=', $user)->sum(DB::raw('commodities.current_price * securities.security_qty'));
        $orders = Order::where('user_id', $user->id)->paginate(10);
        $securities = Security::where('user_id', $user->id)->get();
        // dd($orders);
        return view('users.show',[
            'user' => $user, 
            'securitiesValues' => $securitiesValues,
            'orders' => $orders,
            'securities' => $securities
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('create-users');
        $user->update($request->all());
        $user->syncRoles($request->input('roles', []));

        return redirect()->route('app.users.index')->with('success', 'User Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('app.users.index')->with('success', 'User Deleted');
    }
}
