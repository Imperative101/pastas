@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">parcels sąrašas</div>

               <div class="card-body">
                 <table class="table">
                   <tr>
                     <th>weight</th>
                     <th>phone</th>
                     <th>info</th>
                     <th>post_id</th>
                     <th>Užeiti</th>
                     <th>edit</th>
                     <th>delete</th>
                   </tr>
                  @foreach ($parcels as $parcel)
                    <tr>
                      <td>{!!$parcel->weight!!}</td>
                      <td>{!!$parcel->phone!!}</td>
                      <td>{!!$parcel->info!!}</td>
                      <td>{!!$parcel->post_id!!}</td>
        

                      <td><a class="btn btn-success" href="{{route('parcel.show',[$parcel])}}">užeiti</a></td>
                      <td><a class="btn btn-primary" href="{{route('parcel.edit',[$parcel])}}">edit</a></td>
                      <td>
                        <form method="POST" action="{{route('parcel.destroy', $parcel)}}">
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

  