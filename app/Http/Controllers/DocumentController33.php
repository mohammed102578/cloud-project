<?php

namespace App\Http\Controllers;
use App\Models\Document;
use App\Http\Requests\DocumentRequest;
use Illuminate\Http\Request;
use App\Http\Requests\DocumentRequest_update;
class DocumentController extends Controller
{

  

  public function get(){
    try{

     $documents= Document::all();
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


    Document::create([
      'name' => $request->name,
      'Exp_date' => $request->Exp_date,
      'description' => $request->description,
      'type' => $actual_link.$_SERVER['HTTP_HOST'].'/assets/uploade/file/'.$newfile,
      

  ]);
  
  return back()->with('success',  "تم الحفظ بنجاح");
  try{
} catch (\Exception $ex) {
     

  return back()->with('error',  trans('login.Something went wrong'));

}

    }



    public function update(DocumentRequest_update $request){
      try{
        $id = $request->id;
            $document= Document::find($id);
  
        if (!$document) {
  
          return back()->with('error', 'هذا المستند غير موجود');
        }



             if(isset($request->type)){
              $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://");
              $actual_link.$_SERVER['HTTP_HOST'];
            $file=$request->type;
            
                $newfile= time().".".$request->type->extension();
            $file->move('assets/uploade/file', $newfile);
        $file = $actual_link . $_SERVER['HTTP_HOST'] . '/assets/uploade/file/' . $newfile;
          
             }else{
        $file = $request->file;

             }
 
            // update date

            Document::where('id', $id)
                ->update([
                  'name' => $request->name,
                  'Exp_date' => $request->Exp_date,
                  'description' => $request->description,
                  'type' => $file,
                ]);
          

//delete file 


$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://");
$replace=$actual_link.$_SERVER['HTTP_HOST']."/";
$file = Document::where('id',$request->id)->select('type')->first();

$file=$file->type;
$file_path= str_replace($replace,"",$file);

if(file_exists($file_path)){
    unlink($file_path);
}





                return back()->with('success',  "تم التعديل بنجاح");
       
    } catch (\Exception $ex) {
         
    
      return back()->with('error', " هنالك خطأ ما الرجاء المحاولة لاحقا");
    
    }
    
        }
    




    public function destroy(Request $request){
      try{
      
        $id = $request->id;
        $document= Document::find($id);

    if (!$document) {

      return back()->with('error', 'هذا المستند غير موجود');
    }



//delete file 


$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://");
$replace=$actual_link.$_SERVER['HTTP_HOST']."/";
$file = Document::where('id',$id)->select('type')->first();

$file=$file->type;
$file_path= str_replace($replace,"",$file);

if(file_exists($file_path)){
    unlink($file_path);
}
      $document->delete();



      //delete file from disk



      return back()->with('success',  "تم الحذف بنجاح");
        
        }  catch (\Exception $ex) {
     

        return back()->with('error', " هنالك خطأ ما الرجاء المحاولة لاحقا");

    }

  }
}
