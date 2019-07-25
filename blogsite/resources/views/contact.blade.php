@extends('layouts.master')
@section('content')
<form class="" action="{{route('contactPost')}}" method="post" enctype="multipart/form-data">
  @csrf
   <div class="form-group">
     <input type="text" name="name" class="form-control" placeholder="name" value="">
   </div>
   <div class="form-group">
     <input type="email" name="email[]" class="form-control" placeholder="Work email" value="">
   </div>
   <div class="form-group">
     <input type="email" name="email[]" class="form-control" placeholder="Personal email" value="">
   </div>
   <div class="form-group">
     <textarea name="message" rows="8" class="form-control" cols="80" placeholder="Message....123"></textarea>
   </div>
   <div class="form-group">
     <input type="file" name="attachment" class="form-control" placeholder="Personal email" value="">
   </div>


   <div class="form-group">
     <button type="submit" class="btn btn-outline-primary btn-block form-control" name="">Send Message</button>
   </div>

</form>
@endsection
