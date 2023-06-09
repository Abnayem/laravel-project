@extends('admin/layout')
@section('page_title','color')
@section('color_select','active')
@section('container')
{{session('message')}}
<h1 class="mb-10">Color</h1>
                                
<a href="{{url('admin/color/manage_size')}}">
 <button type="button" class="btn btn-success">Add Color</button>
</a>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                 <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $list)
                                            <tr>
                                            <td>{{$list->id}}</td>
                                             <td>{{$list->name}}</td>
                                              
                                              <td>
                                            <a href="{{url('admin/color/manage_size')}}/{{$list->id}}">
                                                     <button class="btn btn-success">Edit</button>
                                                 </a>
                                                  @if($list->status == 1)
                                                    <a href="{{url('admin/color/status/0')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-primary">Active</button>
                                                    </a>
                                                    @elseif($list->status == 0)
                                                    <a href="{{url('admin/color/status/1')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-warning">Deactive</button>
                                                    </a>
                                                    @endif
                                                 <a href="{{url('admin/color/delete')}}/{{$list->id}}">
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

   