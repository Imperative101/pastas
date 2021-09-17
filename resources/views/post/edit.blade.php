        @extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">post redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('post.update',$post)}}">

                    <div class="form-group">
                        <label>town</label>
                        <input type="text" name="town"  class="form-control" value="{{$post->town}}">
                        {{-- <small class="form-text text-muted">town.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>capacity</label>
                        <input type="text" name="capacity"  class="form-control" value="{{$post->capacity}}">
                        {{-- <small class="form-text text-muted">capacity.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>code</label>
                        <input type="text" name="code"  class="form-control" value="{{$post->code}}">
                        {{-- <small class="form-text text-muted">code.</small> --}}
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