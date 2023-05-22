@extends('admin/layout')
@section('page_title','Category')
@section('category_select','active')
@section('container')
{{session('message')}}
<h1 class="mb-10">Category</h1>
                                
<a href="category/manage_category">
 <button type="button" class="btn btn-success">Add Category</button>
</a>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category_name</th>
                                                <th>Category_slug</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $list)
                                            <tr>
                                            <td>{{$list->id}}</td>
                                             <td>{{$list->category_name}}</td>
                                              <td>{{$list->category_slug}}</td>
                                              <td>
                                            <a href="{{url('admin/coupon/manage_coupon')}}/{{$list->id}}">
                                                     <button class="btn btn-success">Edit</button>
                                                 </a>
                                                 <a href="{{url('admin/coupon/delete')}}/{{$list->id}}">
                                                     <button class="btn btn-danger">Delete</button>
                                                 </a>  
                                              </td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                             
                            </div>
                        </div>
                        
                 

    
    @endsection

   