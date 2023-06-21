@extends('layouts.app')

@section('title', 'Success Checkout')
@section('content')
<main>
     <div class="section-success d-flex align-items-center">
          <div class="col text-center">
               <img src="frontend/images/ic_mail.png" alt="">
               <h1>Yay! Success</h1>
               <p>
                    We've sent you email for trip instruction
                    <br>
                    please read it as well
               </p>
               <a href="index.html" class="btn btn-home-page mt-3 px-5">HomePage</a>
          </div>
     </div>
</main>
@endsection