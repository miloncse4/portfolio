@extends('dashboard.master')
@section('content')
<div class="container">
     <div class="card mt-5">
       <div class="card-header bg-warning d-sm-flex align-items-center justify-content-between">
         <h2><i>Biodata Allinformation</i></h2>
         <a href="{{ route('contact.create') }}" 
         class="btn btn-sm btn-light" style="font-weight: bold;">Add Biodata</a>
       </div>
       <div class="card-body">
         @if(Session::has('dele'))
        <div class="alert alert-danger">
          <strong>{{Session::get('dele')}}</strong>
        </div>
        @endif
         <table class="table table-bordered">
           <thead>
             <tr>
               <td>#</td>
               <td>Name</td>
               <td>Email</td>
               <td>Address</td>
               <td>Option</td>
             </tr>
           </thead>
           <tbody>
            @foreach($total_data as $data)
             <tr>
               <td>{{$loop->index+1}}</td>
               <td>{{$data->name}}</td>
               <td>{{$data->email}}</td>
               <td>{{$data->address}}</td>
               <td>
                 
                 <a href="{{ route('contact.edit',$data->id) }}" class="btn btn-sm btn-success">Edite</a>
                 <a href="{{ route('contact.delete',$data->id) }}" class="btn btn-sm btn-danger">Delete</a>
                
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>
       </div>
     </div>
   </div>
@endsection