{{--reach or contact page--}}

@include('assets.css')

@include('base.cursor')

@include('base.loader')

@include('base.sidebar')

@include('base.navbar')

<!-- start main-content of contact wrapper -->
<div id="luxy" class="main__content luxy__wrapper">

    <!-- start hero/breadcrumb wrapper -->
    <div class="wrapper wrapper__alt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <h2 class="page__hero_title slide__in_right" data-splitting>
                        <i>Contact.</i>
                        <span class="sub__text">Get in Touch</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero/breadcrumb wrapper -->
    @include('base.sent')

    @include('base.fail')
    <!-- start contact form wrapper -->
    <div class="wrapper contact__form_wrapper">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">

                    <!-- contact__form -->
                    <form method="POST" class="contact__form" action="{{ url ('/store')}}">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="row contact__info">
                                    <div class="col-md-6">
                                        <!-- hire me -->
                                        <p class="text__heading_sm">Mail</p>

                                        <!-- contact info -->
                                        <div class="direct__contact_info">
                                            <p>
                                            <a href="mailto: waturu@business.com" target="_self" rel="noopener" style="color: inherit !important;">Mail Address</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- follow -->
                                        <p class="text__heading_sm">Social</p>
                                        <!-- social links -->
                                        <div class="social__links">
                                            <a class="hbrable" href="" target="_blank" rel="noopener" >
                                                <span class="ti-google"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- contact__form_text -->
                                        <h3 class="contact__form_heading">Business Talk</h3>
                                    </div>
                                    <div class="col-md-12 contact__form_services">
                                        <!-- input checkbox for service -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fullstack"
                                                   value="fullstack" id="fullstack">
                                            <label class="custom-control-label" for="fullstack">Full-stack dev</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="inquire"
                                                   id="inquire">
                                            <label class="custom-control-label" for="inquire"> Inquire </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="design"
                                                   id="design">
                                            <label class="custom-control-label" for="design"> Design </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="logic" id="logic">
                                            <label class="custom-control-label" for="logic"> Logic </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- input field for NAME -->
                                        <input class="input_field" type="text" id="name" name="name" required
                                               placeholder="Full Name">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- input field for EMAIL -->
                                        <input class="input_field" type="email" id="email" name="email" required
                                               placeholder="Email Address">
                                    </div>
                                    <div class="col-md-12">
                                        <!-- input field for MESSAGE -->
                                        <textarea class="input_field" id="message" name="message" required
                                                  placeholder="Just write “hello” or describe it"></textarea>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <!-- button for MESSAGE-SEND -->
                                        <button class="button-default slide-vertical hbrable" type="submit"
                                                data-splitting>send message
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form wrapper -->
    @include('base.foot')
</div>

<!-- end main-content of contact wrapper -->


@include('assets.js')
