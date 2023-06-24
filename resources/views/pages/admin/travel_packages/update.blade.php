@extends('layouts.admin')

@section('content')
    <div class="card">
     <div class="card-header">
          <h3>Form tambah data</h3>
     </div>
     <div class="card-body">
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <form action="{{route('travel-package.update', $data->id)}}" method="post">
               @csrf
               @method('PUT')
               <div class="form-group">
                    <label for="type">Name</label>
                    <input type="text"  class="form-control" name="name" value="{{$data->name}}" placeholder="masukan nama">
               </div>
               <div class="form-group">
                    <label for="type">Location</label>
                    <input type="text"  class="form-control" name="location" value="{{$data->location}}" placeholder="masukan lokasi">
               </div>
               <div class="form-group">
                    <label for="type">About</label>
                    <input type="text"  class="form-control" name="about" value="{{$data->about}}" placeholder="ceritakan tentang lokasi">
               </div>
               <div class="form-group">
                    <label for="type">Featured Event</label>
                    <input type="text"  class="form-control" name="featured_event" value="{{$data->featured_event}}" placeholder="masukan kegiatan">
               </div>
               <div class="form-group">
                    <label for="type">Bahasa</label>
                    <input type="text"  class="form-control" name="language" value="{{$data->language}}" placeholder="masukan bahasa">
               </div>
               <div class="form-group">
                    <label for="type">foods</label>
                    <input type="text"  class="form-control" name="foods" value="{{$data->foods}}" placeholder="masukan makanan yang disediakan">
               </div>
               <div class="form-group">
                    <label for="type">Departure date</label>
                    <input type="date"  class="form-control" name="departure_date" value="{{$data->departure_date}}" placeholder="masukan tanggal keberangkatan">
               </div>
               <div class="form-group">
                    <label for="type">duration</label>
                    <input type="text"  class="form-control" name="duration"   value="{{$data->duration}}" placeholder="masukan durasi">
               </div>
               <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" value="{{$data->type}}"  class="form-control" name="type" placeholder="masukan jenis paket">
               </div>
               <div class="form-group">
                    <label for="type">Price</label>
                    <input type="text" value="{{$data->price}}"  class="form-control" name="price" placeholder="masukan harga">
               </div>
               <button class="btn btn-primary" type="submit">Simpan</button>
          </form>
     </div>
    </div>
@endsection