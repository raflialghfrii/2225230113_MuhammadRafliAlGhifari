<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index (){
        $data = Employee::all();
        return view ('namaketuakelas',compact('data'));
    }

    public function tambahnamaketuakelas(){
        return view('tambahdata');
    }

    public function tambahdata(Request $request){
        Employee::create($request->all());
        return redirect()->route('namaketuakelas')->with('succes','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){

        $data = Employee::find($id);
        //dd($data);

        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){

        $data = Employee::find($id);
        //dd($data);

        $data->update($request->all());
        return redirect()->route('namaketuakelas')->with('success', 'Data Berhasil Diubah');

    }
    
    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('namaketuakelas')->with('success', 'Data Berhasil Di Hapus');
    }
}
