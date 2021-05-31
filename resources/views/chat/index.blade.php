@extends('layouts.app')

@section('content')


  {{-- <style>
    .header-clear-medium{
    margin-top: 5vh !important;
    margin-bottom: 5vh !important;
    height: 89vh;
    padding-top: 0px !important;
    padding-bottom: 0px !important;
    }
</style> --}}

  <div class="row" style="height:90%">
    <div class="col-md-4 col-lg-3 col-sm-12">
      <div class="search-page">
        <div class="search-box search-header bg-theme card-style me-3 ms-3 mb-0">
          <i class="fa fa-search"></i>
          {{-- <input type="text" class="border-0" placeholder="What are you looking for? " data-search=""> --}}
          <input type="text" class="border-0" placeholder="What are you looking for? ">
          <a href="#" class="disabled"><i class="fa fa-times-circle color-red-dark"></i></a>
        </div>
      </div>

      <div class="card card-style ms-3 mt-3" style="height:100%;">
        <div class="content">
          <div class="list-group list-custom-large">
            @if ($users->count())
            <ul class="no-bullet">
              @foreach ($users as $user)
                <li class="user">
                  <div class="name-image bg-highlight">
                    {{substr($user->name,0,1) }}
                  </div>
                  <div class="information" id="{{ $user->id }}">
                    <span>{{ $user->name }}</span><br>
                    <strong>A powerful Mobile Template</strong>
                  </div>
                  {{-- <a href="{{ chat/13 }}"> --}}
                  {{-- <a href="{{ route('chat.show',$user->id)}}"> --}}
                  {{-- </a> --}}
                </li>
                @endforeach
              </ul>
            @endif
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-md-8 col-lg-9 col-sm-12 d-none d-lg-block d-md-block" style="height:73vh;overflow-y: scroll;" id="chat-message">

    </div> --}}
    <div class="col-md-8 col-lg-9 col-sm-12 d-none d-lg-block d-md-block" style="height:73vh;overflow-y: scroll;" id="chat-message" >
      {{-- content in here is append from the message.blade --}}
    </div>
  </div>
@endsection


@section('content2')

  <div id="menu-upload" class="col-lg-6 offset-lg-3 menu menu-box-bottom menu-box-detached rounded-m"
    data-menu-height="255" data-menu-effect="menu-over">
    <div class="list-group list-custom-small ps-2 me-4">
      <a href="#">
        <i class="font-14 fa fa-file color-gray-dark"></i>
        <span class="font-13">File</span>
        <i class="fa fa-angle-right"></i>
      </a>
      <a href="#">
        <i class="font-14 fa fa-image color-gray-dark"></i>
        <span class="font-13">Photo</span>
        <i class="fa fa-angle-right"></i>
      </a>
      <a href="#">
        <i class="font-14 fa fa-video color-gray-dark"></i>
        <span class="font-13">Video</span>
        <i class="fa fa-angle-right"></i>
      </a>
      <a href="#">
        <i class="font-14 fa fa-user color-gray-dark"></i>
        <span class="font-13">Camera</span>
        <i class="fa fa-angle-right"></i>
      </a>
      <a href="#">
        <i class="font-14 fa fa-map-marker color-gray-dark"></i>
        <span class="font-13">Location</span>
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
  </div>

@endsection
@push('scripts')
<script>
  //This is a function to append the html from the chat page,with another page by calling the html(data)
  //data is the receiver id, with the related item called.
  var receiver_id = "";
  var my_id = "{{ Auth()->id() }}";
  $(document).ready(function(){
    $(".information").click(function(){
      receiver_id = $(this).attr('id');
      $.ajax({
        type: "get",
        url:"chat/" + receiver_id,
        data: "",
        cache:false,
        success: function(data){
          $('#chat-message').html(data);
          // alert(data);
        }
      })
    });
  });
  // console.log(receiver_id);
</script>

@endpush
