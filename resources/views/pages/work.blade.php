@include('assets.css')

@include('base.cursor')

@include('base.loader')

@include('base.sidebar')

@include('base.navbar')


  <div id="luxy" class="main__content luxy__wrapper">
            <!-- start hero/breadcrumb wrapper -->
            <div class="wrapper wrapper__alt">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <h2 class="page__hero_title slide__in_right" data-splitting> <i>Portfolio.</i> <span class="sub__text">My works</span> </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end hero/breadcrumb wrapper -->
            <!-- start works wrapper -->
            <div class="wrapper works__wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <!-- work-item -->
                            <div class="works__item">
                                <h2 class="work__title"> <span class="project__count">01</span> <a class="ajax-popup-link hbrable" href="{{ url ('/headphones')}}">BɚZE</a> </h2>
                            </div>
                           <!-- work-item -->
                            <div class="works__item_0">
                                <h2 class="work__title_0"> <span class="project__count_0">02</span> <a class="ajax-popup-link hbrable" href="{{ url ('/table')}}">Glæss</a> </h2>
                            </div>
                             <!-- work-item -->
                           <div class="works__item_1">
                                <h2 class="work__title_1"> <span class="project__count_1">03</span> <a class="ajax-popup-link hbrable" href="{{ url ('/blog')}}">Not.ed</a></h2>
                            </div>
                             {{--<!-- work-item -->
                           <div class="works__item">
                                <h2 class="work__title"> <span class="project__count">04</span> <a class="ajax-popup-link hbrable" href="">Roadtrip</a> </h2>
                            </div>
                            <!-- work-item -->
                            <div class="works__item">
                                <h2 class="work__title"> <span class="project__count">05</span> <a class="ajax-popup-link hbrable" href="">Unit-Pen</a> </h2>
                            </div>
                            <!-- work-item -->
                            <div class="works__item">
                                <h2 class="work__title"> <span class="project__count">06</span> <a class="ajax-popup-link hbrable" href="">City Lights</a> </h2>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- end works wrapper -->
      <div class="wrapper promo__wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <h2>Start a project.</h2>
                    <a class="button-default slide-vertical hbrable" href="{{url ('contact')}}" data-splitting>Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end promo wrapper -->
    @include('base.foot')
    <!-- end footer wrapper -->
    </div>

    @include('assets.js')
