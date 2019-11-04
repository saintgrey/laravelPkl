<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $users = User::all();
        return view('dashboardAdmin')->with(compact('users'));
        }else{
            return redirect('/home');
        }
    }
    public function pindah($id){
        $ubah = User::find($id);
        return view('editData', compact('ubah'));
    }
    public function ubah(Request $request,$id){
       $ubah1 = user::find($id);
       $ubah1 -> name=$request -> name;
       $ubah1 -> email=$request -> email;
       $ubah1 -> pekerjaan=$request -> pekerjaan;
       $ubah1 -> alamat=$request -> alamat;  
       $ubah1 -> save();
       return redirect('/admin');

    } 
    public function destroy($id){
        $user = User::find($id);
        $user ->delete();
        return redirect('/admin')->with('status','data berhasil dihapus !');
    }
}//

