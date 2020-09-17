<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('parcial.admin.dashboardadmin');
    }

    // For User
    public function userview()
    {
        $users = User::all();
        return view('parcial.admin.userview', ['user' => $users]);
    }

    public function registerEmploye(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->role = $request->role;
        $users->save();

        return redirect()->route('userview')->with('success', 'Item created successfully!');
    }

    public function showModalUpdate($id)
    {
        $users = User::find($id);
        return view('parcial.admin.crudUser.updateUser', ['u' => $users]);
    }

    public function editEmploye(Request $request, $id)
    {

        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->role = $request->role;
        $users->save();

        return redirect()->route('userview')->with('info', 'Item updated successfully!');
    }

    public function deleteEmploye($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('userview')->with('error', 'Item Deleted successfully!');
    }

    // For Menu
    public function menuview()
    {
        $foods = Food::all();
        return view('parcial.admin.menuview', ['food' => $foods]);
    }

    public function addFood(Request $request)
    {
        $imageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('img'), $imageName);

        $foods = new Food();
        $foods->nama_makanan = $request->nama_makanan;
        $foods->harga = $request->harga;
        $foods->stok_makanan = $request->stok_makanan;
        $foods->foto_makanan = $imageName;
        $foods->save();

        return redirect()->route('menuview')->with('success', 'Item created successfully!');
    }

    public function modalUpdateFood($id)
    {
        $foods = Food::find($id);
        return view('parcial.admin.crudFood.updateFood', ['f' => $foods]);
    }

    public function editFood(Request $request, $id)
    {
        $imageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('img'), $imageName);

        $foods = Food::find($id);
        $foods->nama_makanan = $request->nama_makanan;
        $foods->harga = $request->harga;
        $foods->stok_makanan = $request->stok_makanan;
        $foods->foto_makanan = $imageName;
        $foods->save();

        return redirect()->route('menuview')->with('info', 'Item created successfully!');
    }

    public function deleteFood($id)
    {
        $foods = Food::find($id);
        $foods->delete();

        return redirect()->route('menuview')->with('error', 'Item deleted successfully!');
    }
}
