<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class barang extends Controller
{
    public function index(){
        $sa = DB::table('barang')->get();
        return view('barang.index', compact('sa'));
    }

    public function add()
    {
        return view('barang.cretate');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'NamaBarang' => 'required',
            'Satuan' => 'required',
            'HargaSatuan' => 'required',
            'Stok' => 'required',
        
        ]);
    
    
        DB::table('barang')->insert([
            'NamaBarang' => $request->NamaBarang,
            'Satuan' => $request->Satuan,
            'HargaSatuan' => $request->HargaSatuan,
            'Stok' => $request->Stok,
    
        ]);
    
        return Redirect()->route('barang.index')->with('success','Add data successfully!');    
    }

    public function Edit($KodeBarang)
    {
    $edit=DB::table('barang')
         ->where('KodeBarang',$KodeBarang)
         ->first();
    return view('barang.edit', compact('edit'));     
    }
   
    public function Update(Request $request,$KodeBarang)
    {
      
        DB::table('barang')->where('KodeBarang', $KodeBarang)->first();        
        $data = array();
        $data['NamaBarang'] = $request->NamaBarang;
        $data['Satuan'] = $request->Satuan;  
        $data['HargaSatuan'] = $request->HargaSatuan;  
        $data['Stok'] = $request->Stok;  
        $update = DB::table('barang')->where('KodeBarang', $KodeBarang)->update($data);
    
        if ($update) 
    {
            
            return Redirect()->route('barang.index')->with('success','Updated successfully!');                     
    }
        else
    {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('barang.index')->with($notification);
    }
     
    }

    public function Delete($KodeBarang)
    {
        
        $delete = DB::table('barang')->where('KodeBarang', $KodeBarang)->delete();
        if ($delete)
                            {
                            $notification=array(
                            'messege'=>'Successfully  Deleted ',
                            'alert-type'=>'success'
                            );
                            return Redirect()->back()->with($notification);                      
                            }
             else
                  {
                  $notification=array(
                  'messege'=>'error ',
                  'alert-type'=>'error'
                  );
                  return Redirect()->back()->with($notification);
    
                  }
    
      }
}
