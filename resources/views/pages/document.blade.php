@extends('layouts.app')

@section('content')

<div class="row">
               <div class="col-md-12 mb-4 position-relative">
                  <h5 class="fw-bold mb-0">
                     المستندات
                  </h5>
                  <nav style="--bs-breadcrumb-divider: '>';" class="my-bread mb-0" aria-label="breadcrumb">
                     <ol class="breadcrumb  mb-0">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">المستندات                  </li>
                     </ol>
                  </nav>
               </div>
               <div class="col-md-12">
                  <div class="data_table bg-white mb-4 rounded-3 shadow ">
                     <div class=" d-flex justify-content-between">
                        <div class="">
                           <h5 class="m-3">
                              مستندات الموظف
                           </h5>
                        </div>
                        <div class="m-3">
                           
                        <button type="button" class="btn btn_background filter accept  px-5" data-toggle="modal" data-target="#addmyModal" >

                           أضافة مستند جديد
                           </button>
                        </div>
                     </div>









<!--add modal-->
<div class="modal fade" id="addmyModal" role="dialog">
    <div class="modal-dialog">
    
    <div id="alert-danger" class="alert alert-danger" style="display:none"></div> 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="breadcrumb btn_background">اضافة مستند جديد</h4>
        </div>
        <div class="modal-body">
       
            <form id="add_document_form" method="post" action="{{route('store_document')}}" enctype="multipart/form-data">
              @csrf
                <div class="pl-lg-10">
                  <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="">اسم المستند </label>
                        <input type="text"  name="name" class="form-control " placeholder=" اسم المستند" value="" required>
                        @error('name')
                            <span id="nameError" class="text-danger">{{$message}}</span>
                          @enderror   
                      </div>
                    </div>
                    <div class="col-lg-6">

                    <div class="form-group">
                        <label class="form-control-label" for="">نوع المستند </label>
                        <input type="file"  name="type" class="form-control " accept="pdf" placeholder=" نوع المستند" value="" required>
                        @error('type')
                            <span id="typeError" class="text-danger">{{$message}}</span>
                          @enderror   
                      </div>
                    </div>
                   
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for=""> تاريخ الانتهاء </label>
                        <input type="date"  name="Exp_date" class="form-control " placeholder=" تاريخ الانتهاء " value="" required>
                        @error('Exp_date')
                            <span id="Exp_dateError" class="text-danger">{{$message}}</span>
                          @enderror   
                      </div>
                    </div>

                  
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label class="form-control-label" for="">الوصف</label>
                    <input type="text"  name="description" class="form-control "  placeholder="الوصف" required>
                    @error('description')
                            <span id="descriptionError" class="text-danger">{{$message}}</span>
                          @enderror   
                  </div>
                    </div>



         
                    </div>
                  </div>
                </div>
            
        <div class="modal-footer">
                    
                      
        <button type="submit" id="Add_user" class="btn btn_background filter accept  px-5" >
                                                   ارسال
                                                </button>
     
                                               
      <button type="button" class="btn  danger" data-dismiss="modal">
         
     الغاء
                                                </button>

     
                                             </div>
      </div>
    </form>
    </div>
  </div>
   







  <table class="table   table-striped ">
                  <thead>
                    <tr>
                      <th scope="col">
                          الأسم   
                      </th>
                      <th scope="col">  تاريخ الانتهاء 
                      </th>
                      <th scope="col">الوصف</th>
                      <th scope="col">النوع</th>
                      <th scope="col">العمليات</th>
                    </tr>
                  </thead>
                  <tbody>

                           @isset($documents)
                           @foreach($documents as $key => $document)



<!--edit modal-->
<div class="modal fade" id="edit_document{{$key}}" role="dialog">
    <div class="modal-dialog">
    
    <div id="alert-danger" class="alert alert-danger" style="display:none"></div> 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="breadcrumb btn_background">تعديل المستند </h4>
        </div>
        <div class="modal-body">
       
          
        <form id="update_document_form" method="post" action="{{route('update_document')}}" enctype="multipart/form-data">
              @csrf
                <div class="pl-lg-10">
                  <div class="row">
                    <input type="hidden" name="key" value="{{$key}}">

                  <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="">اسم المستند </label>
                        <input type="text"  name="name" class="form-control " placeholder=" اسم المستند" value="{{$document['name']}}" required>
                        @error('name')
                            <span id="nameError" class="text-danger">{{$message}}</span>
                          @enderror   
                      </div>
                    </div>
                    <div class="col-lg-6">

                    <div class="form-group">
                        <label class="form-control-label" for="">نوع المستند </label>
                        <input type="file"  name="type" class="form-control " accept="pdf" placeholder=" نوع المستند" value="" required>
                        @error('type')
                            <span id="typeError" class="text-danger">{{$message}}</span>
                          @enderror   
                      </div>
                    </div>
                   
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for=""> تاريخ الانتهاء </label>
                        <input type="date"  name="Exp_date" class="form-control " placeholder=" تاريخ الانتهاء " value="{{$document['Exp_date']}}" required>
                        @error('Exp_date')
                            <span id="Exp_dateError" class="text-danger">{{$message}}</span>
                          @enderror   
                      </div>
                    </div>

                  
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label class="form-control-label" for="">الوصف</label>
                    <input type="text"  name="description" class="form-control "  placeholder="الوصف" value="{{$document['description']}}" required>
                    @error('description')
                            <span id="descriptionError" class="text-danger">{{$message}}</span>
                          @enderror   
                  </div>
                    </div>



         
                    </div>
                  </div>
                </div>
            
        <div class="modal-footer">
                    
                      
        <button type="submit" id="Add_user" class="btn btn_background filter accept  px-5" >
                                                   ارسال
                                                </button>
     
                                               
      <button type="button" class="btn  danger" data-dismiss="modal">
         
     الغاء
                                                </button>

     
                                             </div>
      </div>
    </form>
    </div>
  </div>
   


















  <tr data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample">
                      <td data-label="الأسم"> {{$document['name']}}  
                      </td>
                      <td data-label=" الانتهاء ">
                      {{$document['Exp_date']}}                        </td>
                      <td data-label="الوصف"> {{$document['description']}}</td>
                      <td data-label="النوع"><a href="{{$document['type']}}" target="blank" class="pdf">
                        <i class="far fa-file-pdf fa-lg" aria-hidden="true"></i>  </a></td>
    
                        <td data-label="العمليات"> <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                          role="button" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('delete_document',$key)}}"> حذف </a></li>
                          <li><a class="dropdown-item" data-toggle="modal" data-target="#edit_document{{$key}}">  تعديل</a></li>
                        </ul>
                      </td>
                   
                    </tr>
                   
                           @endforeach
                           @endisset

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            </div>






    @endsection