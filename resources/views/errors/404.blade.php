{{-- homepage --}}
@include('assets.css')

@include('base.cursor')

@include('base.loader')

@include('base.sidebar')

@include('base.navbar')


<div class="main__content h-100">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-10">
                <!-- start hero__wrapper -->
                <div class="hero__wrapper">
                    <div class="hero__content">
                        <h5 class="title__person slide__in_right" data-splitting>404!</h5>
                        <p class="title__person_info slide__in_right" data-splitting>
                            Sorry, the page you requested is not available.
                        </p>

                    </div>
                    <div class="hero__socials">
                        {{--<a href="" class="social__label slide__in_right slide-horizontal hbrable" data-splitting>Telegram</a>--}}
                        <a href="{{ url ('/home')}}" class="social__label slide__in_right slide-horizontal hbrable" data-splitting>Back to home</a>
                    </div>
                </div>
                <!-- end hero__wrapper -->
            </div>
        </div>
    </div>
    @include('base.foot')
</div>


@include('assets.js')
