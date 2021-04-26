@extends('layouts.app')

@push('styles')

<style>
    #footer-chat {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 98;
    background-color: rgba(249,249,249,.98);
    box-shadow: 0 -5px 10px 0 rgb(0 0 0 / 6%);
    min-height: 60px;
    min-height: calc(60px + (constant(safe-area-inset-bottom))*1.1);
    min-height: calc(60px + (env(safe-area-inset-bottom))*1.1);
    display: flex;
    text-align: center;
    transition: all 350ms ease;
}
</style>

    
@endpush

@section('content')



<div class="content">
    <div class="speech-bubble speech-right color-black">
        These are chat bubbles, right? They look awesome don't they?
    </div>
    <div class="clearfix"></div>
    <div class="speech-bubble speech-left bg-highlight">
        Yeap!
    </div>
    <div class="clearfix"></div>
    <div class="speech-bubble speech-left bg-highlight">
        They also expand to a certain point, just like the ones that Mobile Chat apps have!
    </div>
    <div class="clearfix"></div>
    <div class="speech-bubble speech-right color-black">
        Awesome! Images too?
    </div>
    <div class="clearfix"></div>
    <p class="text-center mb-0 font-11">Yesterday, 1:45 AM</p>
    <div class="speech-bubble speach-image speech-left bg-highlight">
        <img class="img-fluid preload-img" src="images/empty.png" data-src="images/pictures/8w.jpg" alt="img">
    </div>
    <div class="clearfix"></div>
    <div class="speech-bubble speech-left bg-highlight">
        Images can be used here as well, very easy! Just add an image tag!
    </div>
    <div class="clearfix"></div>
    <div class="speech-bubble speech-right color-black">
        WOW! Videos?!
    </div>
    <div class="clearfix"></div>
    <div class="speech-bubble speech-right color-black">
        Can I Embed videos or wait, actually, can I add maps?
    </div>
    <div class="clearfix"></div>
    <div class="speech-bubble speach-image speech-left">
        <iframe class="w-100" src='../../../embed/c9MnSeYYtYY.html' frameborder='0' allowfullscreen=""></iframe>
    </div>
    <div class="clearfix"></div>
    <div class="speech-bubble speech-left bg-highlight">
        Yep! Just embed your stuff here. It's super simple. You just copy the embed code in this place.
    </div>
    <div class="clearfix"></div>
        <p class="text-center mb-0 font-11">25 Minutes Ago</p>
    <div class="speech-bubble speech-right color-black">
        Is this an actual chat system? Can i send messages already?
    </div>
    <div class="clearfix"></div>
    <div class="speech-bubble speech-last speech-left bg-highlight">
        It's just a chat template, but it's ready and able to be coded into a full chat system. Great huh?
    </div>
    <div class="clearfix"></div>
    <em class="speech-read mb-3">Delivered & Read - 07:18 PM</em>
</div>
@endsection
    
@section('content2')
    <div id="footer-bar" class="d-flex">
        <div class="me-3 speach-icon">
        <a href="#" data-menu="menu-upload" class="bg-gray-dark ms-2"><i class="fa fa-plus pt-2"></i></a>
        </div>
        <div class="flex-fill speach-input">
        <input type="text" class="form-control" placeholder="Enter your Message here">
        </div>
        <div class="ms-3 speach-icon">
        <a href="#" class="bg-blue-dark me-2"><i class="fa fa-arrow-up pt-2"></i></a>
        </div>
    </div>

    <div id="menu-upload" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="255" data-menu-effect="menu-over">
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
    $(document).ready(function() {
        $('#footer-bar').hide();
    });
    </script>

@endpush