<?php

namespace App\Http\Controllers;
use App\Models\Custody;
use App\Http\Requests\CustodyRequest;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;


class CustodyController extends Controller
{



  public function __construct(Database $database)
  {
      $this->database = $database;
      $this->table_name="custodies";

  }


  public function get(){
    try{

      $custodies = $this->database->getReference($this->table_name)->getValue(); 
     
         return view('pages.custody',compact(['custodies'])); 
  
  
  
  } catch (\Exception $ex) {
       
  
    return back()->with('error', " هنالك خطأ ما الرجاء المحاولة لاحقا");
  
  }
  
      }
  
  
  
  
      
  
  
    public function store(CustodyRequest $request){
      

      $postData = [
        'name' => $request->name,
        'custody_type' => $request->custody_type,
        'serial_number' => $request->serial_number,
        'received_date' => $request->received_date,
        'date_of_eviction' => $request->date_of_eviction,
        'status' => $request->status,
        'description' => $request->description,
        
  
    ];
      $postRef = $this->database->getReference($this->table_name)->push($postData);
      if($postRef){
        return back()->with('success',  "تم الحفظ بنجاح");



      }else{

        return back()->with('error', " هنالك خطأ ما الرجاء المحاولة لاحقا");


      }
    
     
    try{} catch (\Exception $ex) {
       
  
    return back()->with('error', " هنالك خطأ ما الرجاء المحاولة لاحقا");
  
  }
  
      }
  
  
  
      public function update(CustodyRequest $request){
       


$key=$request->key;

      $postData = [
        'name' => $request->name,
        'custody_type' => $request->custody_type,
        'serial_number' => $request->serial_number,
        'received_date' => $request->received_date,
        'date_of_eviction' => $request->date_of_eviction,
        'status' => $request->status,
        'description' => $request->description,
        
  
    ];
      $postRef = $this->database->getReference($this->table_name."/".$key)->update($postData);
      if($postRef){
        return back()->with('success',  "تم الحفظ بنجاح");



      }else{

        return back()->with('error', " هنالك خطأ ما الرجاء المحاولة لاحقا");


      }
      
          }
      
  
  
  
  
      public function destroy($id){
        try{
      
          $key=$id;
         
          $custody = $this->database->getReference($this->table_name."/".$key)->remove();
  
        
        return back()->with('success',  "تم الحذف بنجاح");
          
          }  catch (\Exception $ex) {
       
  
          return back()->with('error', " هنالك خطأ ما الرجاء المحاولة لاحقا");
  
      }
  
    }
  }
  