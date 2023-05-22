@extends('admin/layout')
@section('page_title','Manage_Coupon')
@section('coupon_select','active')
@section('container')
<h1 class="mb-10">Manage Coupon</h1>
<a href="{{url('admin/coupon')}}">
    <button type="button" class="btn btn-success">Back</button>
</a>
    <!-- MAIN CONTENT-->
            
         <div class="row m-t-30">
             <div class="col-md-12">
          <div class="row">
                                    
                               
       <div class="col-lg-12">
                                    
                                
              <div class="card">
                                   
           <div class="card-body">
           <form action="{{route('coupon.manage_coupon_process')}}" method="post" >
               @csrf
                <div class="form-group">
              <label for="title" class="control-label mb-1">Coupon_Title</label>
      <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$title}}" required>
           @error('title')
            <div class="alert alert-danger">
               {{$message}} 
           </div>
          @enderror
        </div>
      <div class="form-group has-success">
           <label for="code" class="control-label mb-1">Coupon_code</label>
          <input id="code" name="code" type="text" class="form-control cc-name valid" value="{{$code}}" data-val="true" 
                     aria-required="true" aria-invalid="false" required>
                   @error('code')
               <div class="alert alert-danger">
                      {{$message}} 
                     </div>
                           @enderror
                        </div>

            <div class="form-group has-success">
           <label for="value" class="control-label mb-1">Coupon_Value</label>
          <input id="value" name="value" type="text" class="form-control cc-name valid" value="{{$value}}" data-val="true" 
           aria-required="true" aria-invalid="false" required>
             @error('value')
               <div class="alert alert-danger">
              {{$message}} 
                     </div>
                           @enderror
                        </div>                    
                                            
                     <div>
                      <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                   Submit
                       </button>
                     </div>
                      <input type="hidden" name="id" value="{{$id}}">
                          </form>
                   </div>
                    </div>
             </div>
                </div>
                 </div>
           </div>
            
    @endsection