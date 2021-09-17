@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">post create</div>

               <div class="card-body">
                 <table class="table">
                   <tr>
                     <th>town</th>
                     <th>capacity</th>
                     <th>code</th>
                     <th>edit</th>
                     <th>delete</th>
                   </tr>
                  @foreach ($posts as $post)
                    <tr>
                      <td>{!!$post->town!!}</td>
                      <td>{!!$post->capacity!!}</td>
                      <td>{!!$post->code!!}</td>
                      <td><a class="btn btn-success" href="{{route('post.show',[$post])}}">užeiti</a></td>
                      <td><a class="btn btn-primary" href="{{route('post.edit',[$post])}}">edit</a></td>
                      <td>
                        <form method="POST" action="{{route('post.destroy', $post)}}">
                          @csrf
                          <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
              </table>
               </div>



           </div>
       </div>
   </div>
</div>
@endsection

