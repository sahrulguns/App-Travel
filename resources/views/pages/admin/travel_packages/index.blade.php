@extends('layouts.admin')

@section('title','Travel Package')
    
@section('content')

     <div class="card">
       <div class="card-header">
          <h3>Paket Travel</h3>
          <a href="{{route('travel-package.create')}}" class="btn btn-success" type="submit">tambah data</a>
       </div>
       <div class="card-body">
          <table class="table table-bordered table-responsive">
               <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>slug</th>
                    <th>Location</th>
                    <th>About</th>
                    <th>Featured Event</th>
                    <th>Language</th>
                    <th>Foods</th>
                    <th>Departure Date</th>
                    <th>Duration</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Aksi</th>
               </tr>
               @php $no=1;  @endphp
               @foreach ($data as $item)
               <tr>
                    <td>{{  $no++;}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->slug}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->about}}</td>
                    <td>{{$item->featured_event}}</td>
                    <td>{{$item->language}}</td>
                    <td>{{$item->foods}}</td>
                    <td>{{$item->departure_date}}</td>
                    <td>{{$item->duration}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                         <a href="{{ route('travel-package.edit', $item->id)}}" class="btn btn-sm btn-primary">update</a>
                       <form action="{{route('travel-package.destroy', $item->id)}}" method="post">
                         @csrf
                         @method('DELETE')
                         <button class="btn btn-danger" name="submit" type="submit">delete</button>
                       </form>
                    </td>
               </tr>
               @endforeach
               
          </table>
       </div>
     </div>
    
@endsection