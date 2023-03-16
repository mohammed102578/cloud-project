@extends('layouts.appnotauth')

@section('content')
@auth
    <script>
     // or
      window.location.href = '{{route("index")}}'; //using a named route
     </script>
     @endauth
     <style>
        
        a , h1, button,h5{
          font-family: 'NotoKufi';
        }
        .form-control{
            border-radius: 27px;
        }
                </style>
                <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('index')}}" rel="nofollow"><i class="fa fa-home mr-10"></i>{{trans('Details.Home')}}</a>
                    <i class="fa fa-angle-right ml-1 mr-1 mt-1"></i><a>{{trans('login.Login')}}</a>
                   
                </div>
            </div>
        </div>
            <div class="page-content pt-50 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                            <div class="row">
                                <div class="col-lg-6 col-md-8">
                                    <img class="border-radius-15" src="{{URL::asset('image/lifestyle.jpg')}}" alt="" />
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <div class="login_wrap widget-taber-content background-white">
                                        <div class="padding_eight_all bg-white">
                                            <div class="heading_s1">
                                                <h1 class="mb-5">{{trans('login.Login')}}</h1>
                                                <p class="mb-30">{{trans('login.Don\'t have an account')}} <a style="color:#a6d71c"  href="{{route('register')}}">{{trans('login.Create here')}}</a></p>
                                            </div>
                                            <form action="{{ route('login') }}" method="post" id="login_form">
                                                <div class="form-group">
                                                    @csrf
                                                    
                                                    <input type="text" style="border-radius: 27px;" class="form-control" required="" name="phone" placeholder="{{trans('login.Your Phone')}}" />
                                                    @error('phone')
                                                    <span id="phoneError" class="text-danger">{{$message}}</span>
                                                  @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input required="" style="border-radius: 27px;" class="form-control" type="password"  name="password" placeholder="{{trans('login.Your password')}}" />
                                                    @error('password')
                                                    <span id="passwordError" class="text-danger">{{$message}}</span>
                                                  @enderror
                                                </div>
                                                
                                                <div class="login_footer form-group mb-50">
                                                    <div class="chek-form">
                                                        <div class="custome-checkbox">
                                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                                            <label class="form-check-label" for="exampleCheckbox1"><span>{{trans('login.Remember me')}}</span></label>
                                                        </div>
                                                    </div>
                                                    <a class="text-muted" href="{{route('password.request')}}">{{trans('login.Forgot password')}}</a>
                                                </div>
                                                  <div class="form-group mb-30">
                                                    <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login"style="font-family: 'NotoKufi';">{{trans('login.Login')}}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      
<script type="text/javascript">
	

    $( document ).ready( function () {
        $( "#login_form" ).validate( {
            rules: {
              
               
                password: {
                    required: true,
                    minlength: 4
                },
                
               
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength:10,
                    digits: true,
                },
                checkbox: {
                    required: true,
                    
                },
            },
            messages: {
               
               
            password: {
              required:"<?php echo trans('register.This field is requiered');?> ",
              minlength:"<?php echo trans('register.This field must contain at least four characters');?> ",
                },
                
            
                phone:{
        required:"<?php echo trans('register.This field is requiered');?> ",
        minlength:"<?php echo trans('register.This field must contain at least ten number');?> ",
        maxlength:"<?php echo trans('register.This field must contain at least ten number');?> ",
        digits:"<?php echo trans('register.This field must contain number just');?> ",
      } ,

      checkbox:{
        required:"<?php echo trans('register.This field is requiered');?> ",
     

      } 
            },
            errorElement: "h5",
            errorPlacement: function ( error, element ) {
                // Add the `invalid-feedback` class to the error element
                error.addClass( "invalid-feedback" );

                
                if (element.is("select")) {
        error.insertAfter(element.parent());
                } else {
                    error.insertAfter( element );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
            }
        } );

    } );
</script>
@endsection