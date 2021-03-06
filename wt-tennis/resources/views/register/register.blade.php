@extends('layouts.app')

@section('content')

<section class="drawer">
  <div class="col-md-12 size-img back-img-shop">
    <div class="effect-cover">
      <h3 class="txt-advert animated">Registration Competition</h3>
      <p class="txt-advert-sub">Competiton of Roceto 22-09-2016</p>
    </div>
  </div>

  <section id="shop" class="container secondary-page">
    <div class="general general-results">
     <div class="top-score-title col-md-9">
      <h3> Kategori Lomba <span>{{ $events->nama }}</span><span class="point-little">.</span></h3>
      <div class="col-md-12 content-zoom">
        <div class="col-md-6 content-img-zoom">
         <img id="img_01" src="{!! asset('').$events->thumbnail !!}" width="400" height="340" />
       </div>
       <div class="col-md-6 content-desc-zoom">
         <h3>{{ $events->nama }}</h3>
         <p class="desc-prod" style="text-align:justify">
           <b>Perlombaan {{ $events->nama }}</b> {{ $events->detail }}</p>
       </div>
    </div>


   <div class="col-md-12">
     <div class="panel-body" style="padding-top:100px">
       <div class="general general-results tournaments">
         <div id="c-calend" class="top-score-title right-score col-md-12">
           <div class="accordion accordion-close" id="section11"><i class="fa fa-calendar-o"></i>Peraturan Perlombaan {{ $events->nama }}<span></span>
           </div>
           <div class="acc-content" style="display: block;">
            <div>Aturan dasar pada permainan {{ $events->nama }} adalah sebagai berikut:</div>
            <li class="desc-prod" style="text-align:justify; margin-left:10px;">{!! $events->peraturan !!}</li>
          </div>

          <div class="accordion accordion-close" id="section11"><i class="fa fa-calendar-o"></i>Biaya Pendaftaran {{ $events->nama }}<span></span>
           </div>
           <div class="acc-content" style="display: block;">
            <div>Biaya Pendaftaran perlombaan {{ $events->nama }} adalah : </div>
            <li class="desc-prod" style="text-align:justify">Rp. {{ $events->biaya_pendaftaran }}</li>
          </div>

          <div class="accordion accordion-close" id="section11"><i class="fa fa-calendar-o"></i>Kuota Perlombaan {{ $events->nama }}<span></span>
           </div>
           <div class="acc-content" style="display: block;">
            <div>Kuota</div>
            <li class="desc-prod" style="text-align:justify">{{ $events->kuota }} tim</li>
          </div>

          <br>
          @if(Auth::guest())
           <div class="accordion waves-effect waves-light col-md-12" id="section11" data-toggle="modal" data-target="#con-close-modal" style="text-align:center">Ayo Join!</div>
            @include('register.modal.join')
          @else
          @if($participant  == null)
            <div class="accordion waves-effect waves-light col-md-12" id="section11" data-toggle="modal" data-target="#con-close-modal" style="text-align:center">Ayo Join!</div>
            @include('register.modal.register', $events)
          @else
           
         @endif
         @endif

         </div>
       </div>
     </div>
   </div>
</div>
<!--Close Top Match-->

<!--right content-->
  @include('layouts.right-content')
</section>

@endsection
@push('scripts')
  <script type="text/javascript">
  $(document).ready(function () {
    $(function () {
      "use strict";
                $('.accordion').accordion({ defaultOpen: 'section1' }); //some_id section1 in demo
              });
  });
</script>
@endpush
