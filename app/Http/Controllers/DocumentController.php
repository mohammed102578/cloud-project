<?php

namespace App\Http\Controllers;
use App\Http\Requests\DocumentRequest;
use Illuminate\Http\Request;
use App\Http\Requests\DocumentRequest_update;
use Kreait\Firebase\Contract\Database;


class DocumentController extends Controller
{



  public function __construct(Database $database)
  {
      $this->database = $database;
      $this->table_name="documents";

  }


  public function get(){
    try{

       $documents = $this->database->getReference($this->table_name)->getValue(); 
     
         return view('pages.document',compact(['documents'])); 
  
  
  
  } catch (\Exception $ex) {
       
  
    return back()->with('error', " هنالك خطأ ما الرجاء المحاولة لاحقا");
  
  }
  
      }
  
  
  
  
      
  
  
    public function store(DocumentRequest $request){
      


      $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://");
      $actual_link.$_SERVER['HTTP_HOST'];
    $file=$request->type;
    
        $newfile= time().".".$request->type->extension();
    $file->move('assets/uploade/file', $newfile);
  
  


      $postData = [
        'name' => $request->name,
        'Exp_date' => $request->Exp_date,
        'description' => $request->description,
        'type' => $actual_link.$_SERVER['HTTP_HOST'].'/assets/uploade/file/'.$newfile,
        
  
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
  
  
  
      public function update(DocumentRequest_update $request){
       


$key=$request->key;

     

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://");
$actual_link.$_SERVER['HTTP_HOST'];
$file=$request->type;

  $newfile= time().".".$request->type->extension();
$file->move('assets/uploade/file', $newfile);




$postData = [
  'name' => $request->name,
  'Exp_date' => $request->Exp_date,
  'description' => $request->description,
  'type' => $actual_link.$_SERVER['HTTP_HOST'].'/assets/uploade/file/'.$newfile,
  

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
         
          $document = $this->database->getReference($this->table_name."/".$key)->remove();
  
        
        return back()->with('success',  "تم الحذف بنجاح");
          
          }  catch (\Exception $ex) {
       
  
          return back()->with('error', " هنالك خطأ ما الرجاء المحاولة لاحقا");
  
      }
  
    }
  }
  