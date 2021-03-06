@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-8 offset-xl-2 col-lg-12 col-sm-12">

      
        <div class="card card-style">
          <div style="margin:10%">
            <form action="{{ route('file.storeFile', $id_folder) }}" method="post" enctype ="multipart/form-data">
              @csrf
              <h6><span class="label label-default">* Name of file</span></h6>
              <input type="text" name="name" id="name" class="form-control" required>
              <br>
              <h6><span class="label label-default">* File</span></h6>
              <input type="file" id="input-file-now" name="file" id="file"  class="dropify" data-height="150"/>
              <div class="col text-center" style="margin-top:5%">
                <button type="submit" class="btn btn-s btn-primary text-center" >Submit</button>
              </div>
            </form>
          </div>
        </div>
    
    </div>
</div>

@endsection