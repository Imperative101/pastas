@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">post sukurimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('post.store')}}">

 
                    <div class="form-group">
                        <label>town</label>
                        <input type="text" name="town"  class="form-control">
                        {{-- <small class="form-text text-muted">town</small> --}}
                    </div>
                    <div class="form-group">
                        <label>capacity</label>
                        <input type="text" name="capacity"  class="form-control">
                        {{-- <small class="form-text text-muted">capacity</small> --}}
                    </div>
                    <div class="form-group">
                        <label>code</label>
                        <input type="text" name="code"  class="form-control">
                        {{-- <small class="form-text text-muted">code</small> --}}
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