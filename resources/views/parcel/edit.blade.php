@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">parcels redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('parcel.update',$parcel)}}">

                    <div class="form-group">
                        <label>weight</label>
                        <input type="text" name="weight"  class="form-control" value="{{parcel->weight}}">
                        {{-- <small class="form-text text-muted">weight.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone"  class="form-control" value="{{parcel->phone}}">
                        {{-- <small class="form-text text-muted">phone.</small> --}}
                    </div>

                    <div class="form-group">
                        <label>info</label>
                        <input type="text" name="info"  class="form-control" value="{{parcel->info}}">
                        {{-- <small class="form-text text-muted">info.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>post_id</label>
                        <input type="text" name="post_id"  class="form-control" value="{{parcel->post_id}}">
                        {{-- <small class="form-text text-muted">post_id.</small> --}}
                    </div>

                    

                    @csrf
                    <button class="btn btn-success" type="submit">update</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
 
 
   