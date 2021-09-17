@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Parcel sukurimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('parcel.store')}}">

 
                    <div class="form-group">
                        <label>weight</label>
                        <input type="text" name="weight"  class="form-control">
                        {{-- <small class="form-text text-muted">weight</small> --}}
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone"  class="form-control">
                        {{-- <small class="form-text text-muted">phone</small> --}}
                    </div>

                    <div class="form-group">
                        <label>info</label>
                        <input type="text" name="info"  class="form-control">
                        {{-- <small class="form-text text-muted">info</small> --}}
                    </div>
                    <div class="form-group">
                        <label>post_id</label>
                        <input type="text" name="post_id"  class="form-control">
                        {{-- <small class="form-text text-muted">post_id</small> --}}
                    </div>

                    @csrf
                    <button class="btn btn-primary" type="submit">ADD</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection


         
