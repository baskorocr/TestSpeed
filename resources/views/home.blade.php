@extends('app')
@section('title')
    Test Speed
@endsection

@section('content')
<section class="py-7 py-lg-10" id="home">
  <div class="bg-holder bg-size" style="background-image:url(assets/img/illustration/2.png);background-position:left top;background-size:contain;">
  </div>
  <!--/.bg-holder-->

  <div class="bg-holder d-none d-xxl-block hero-bg" style="background-image:url(assets/img/illustration/1.png);background-position:right top;background-size:contain;">
  </div>
  <!--/.bg-holder-->

  <div class="container">
    <div class="row align-items-center h-100 justify-content-center justify-content-lg-start">
      <div class="col-md-9 col-xxl-5 text-md-start text-center py-6 pt-6">
        <h1 class="fs-4 fs-md-5 fs-xxl-4" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">Uji kecepatan internet mu dengan server terbaik kami</h1>
        <p class="fs-1" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">GoTest Connection merupakan sebuah website untuk menguji kecepatan internet provider anda secara tepat dan akurat.</p>
        <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start mt-5" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"><a class="btn btn-sm btn-primary me-1" href="#test" role="button">Uji Sekarang</a></div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section id="test">

  <div class="container">
    <iframe width="100%" height="650px" frameborder="0" src="https://b45.speedtestcustom.com"></iframe>
    
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
<section id="fitur">

  <div class="container">
    <h1 class="text-center display-5 fw-semi-bold" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll"> Mengenal Fitur Kami</h1>
    <p class="text-center fs-0 fs-md-1" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"> Mulai lah buat pengujian kecepatan koneksi internet mu lebih mudah sekarang dengan fitur kami. <br class="d-none d-lg-block" />Pengujian akurat dan sesuai dengan kecepatan koneksi anda.</p>
    <div class="row mb-4 mt-6">
      <div class="col-md-6 col-lg-3 text-center"><img src="assets/img/icons/4.png" alt="Dashboard" style="width:95px;" />
        <h4 class="mt-3 lh-base">Server Terbaik</h4>
        <p class="fs-0">Memungkinkan anda dapat melakukan pengujian secara akurat.</p>
      </div>
      <div class="col-md-6 col-lg-3 text-center"><img src="assets/img/icons/5.png" alt="Comment" style="width:95px;" />
        <h4 class="mt-3 lh-base">Proses Cepat dan Gratis</h4>
        <p class="fs-0">Test pengujian kecepatan internet anda berlangsung cepat dan gratis.</p>
      </div>
      <div class="col-md-6 col-lg-3 text-center"><img src="assets/img/icons/6.png" alt="Tailored" style="width:95px;" />
        <h4 class="mt-3 lh-base">Server terpercaya</h4>
        <p class="fs-0">Kami hanya menggunakan server pengujian yang terpercaya dan dapat di rubah pilihannya.</p>
      </div>
      
      <div class="col-md-6 col-lg-3 text-center"><img src="assets/img/icons/14.png" alt="Dashboard" style="width:95px;" />
        <h4 class="mt-3 lh-base">Tampilan responsif</h4>
        <p class="fs-0">Tampilan website yang simple dan responsif.</p>
      </div>
      
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->


<!-- ============================================-->
<!-- <section> begin ============================-->


<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="bg-200" id="cta">

  <div class="container ">
    <div class="row justify-content-center">
       <div class="col-lg-6">
          <div class="main">
             <h3><a>Laravel 8 Review Rating System.</a></h3>
             <form role="form" action="{{route('post.store')}}" method="post">
                @csrf
                <div class="form-group">
                   <label for="title">Post Title<span class="text-danger">*</span></label>
                   <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                   <label for="author">Post Author<span class="text-danger">*</span></label>
                   <input type="text" name="author" class="form-control" required>
                </div>
                <div class="form-group">
                   <label for="description">Post Description<span class="text-danger">*</span></label>
                   <input type="text" name="description" class="form-control" required>
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn btn-secondary mt-3">save</button>
             </form>
             </div>
          </div>
       </div>
    </div>

    <div class="container p-md-5">
      <div class="row justify-content-center">
                <div class="col-lg-6">
                          <div class="main">
                                  <h3><a>Kata Mereka yang menggunakan</a></h3>
                                  @foreach ($data as $view)
                                  <div class="row mt-3 p py-2 px-2">
                                        <div class="col-auto justify-content-between">
                                          <img src="assets/img/icons/peo.svg" alt="" class="z ml-10">
                                        </div>
                                        <div class="col-auto ">
                                          <div class="col-auto pt-2">
                                            {{$view->author}}
                                          </div>
                                          <div class="col-auto pb-2">
                                            "{{$view->description}}"
                                          </div>
                                          
                                         
                                          
                                        </div>
                                        
                                  </div>
                                  @endforeach
                                  
                        
                            
                            </div>
                    </div>

                    
         </div>
      </div>
      <div class="container d-flex justify-content-center ">
        {{ $data->links() }}
      </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->



@endsection