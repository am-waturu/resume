{{-- about page --}}

@include('assets.css')

@include('base.cursor')

@include('base.loader')

@include('base.sidebar')

@include('base.navbar')

    <div id="luxy" class="main__content luxy__wrapper">
    <!-- start about wrapper -->
    <div class="wrapper about__wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <h2 class="page__hero_title slide__in_right" data-splitting>
                        <i> </i> Fullstack Developer &amp; <br>
                    Web designer </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- end about wrapper -->
    <!-- start experience wrapper -->
    <div class="wrapper experience__wrapper wrapper__alt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <!-- section header -->
                    <h3 class="section__header">Experience</h3>
                    <!-- experience row -->
                    <div class="experience__row featured">
                        <div class="row justify-content-between">
                            <div class="col-5"><span>Solo</span>
                            </div>
                            <div class="col text-right"><span>2021–Present</span>
                            </div>
                        </div>
                    </div>
                    <!-- experience row -->
                    <div class="experience__row">
                        <div class="row">
                            <div class="col-5"><span>Personal Projects</span>
                            </div>
                            <div class="col text-right"><span>2021–Present</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end experience wrapper -->
    <!-- start expertise wrapper -->
    <div class="wrapper expertise__wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <!-- section header -->
                    <h3 class="section__header">Expertise</h3>
                    <!-- expertise row -->
                    <div class="expertise__items">
                        <h3 class="expertise__item">Design</h3>
                        <span class="divider"></span>
                        <h3 class="expertise__item">Logic</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end expertise wrapper -->
    <!-- start promo wrapper -->
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
</div>

@include('assets.js')
