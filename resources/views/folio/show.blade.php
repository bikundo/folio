@extends('frontend')



@section('content')
    <div class="sections">
        <div class="sections-wrapper clearfix">

            <!-- Single Portfolio -->
            <section class="active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="portfolio-slider owl-carousel">
                                <div><img src="/v2/images/portfolio-slider.jpg" alt="alt text" class="img-responsive"></div>
                                <div><img src="/v2/images/portfolio-slider.jpg" alt="alt text" class="img-responsive"></div>
                                <div><img src="/v2/images/portfolio-slider.jpg" alt="alt text" class="img-responsive"></div>
                            </div> <!-- end .portfolio-slider -->
                            <div class="row related-images">
                                <div class="col-sm-6"><a href="#"><img src="/v2/images/portfolio-related01.jpg" alt="alt text" class="img-responsive"></a></div>
                                <div class="col-sm-6"><a href="#"><img src="/v2/images/portfolio-related02.jpg" alt="alt text" class="img-responsive"></a></div>
                            </div> <!-- end .row -->
                        </div> <!-- end .col-sm-8 -->
                        <div class="col-sm-4">
                            <p class="button-row portfolio-button-row"><a href="#" class="button solid-button white">Prev Project</a><a href="#" class="button solid-button purple">Next Project</a></p>
                            <div class="portfolio-details">
                                <h4>Shopping Bag</h4>
                                <p>Omnis iste natus error sit volup taisue mose accusantium doloremque ladain tium, totam rem aperiam, eaque ipama quae ab illo inventore veritatis et qasil architecto beatae vitae. dicta sunt epla cabo. Nemo enim ipsam volupt atemtr quia voluptas aut odit fugit, sed quia consequuntur</p>
                                <div class="portfolio-meta">
                                    <span>Date:</span>
                                    22 Mar 2015
                                </div> <!-- end .portfolio-meta -->
                                <div class="portfolio-meta">
                                    <span>Client:</span>
                                    Osambem
                                </div> <!-- end .portfolio-meta -->
                                <div class="portfolio-meta">
                                    <span>Agency:</span>
                                    Design Media Wavs
                                </div> <!-- end .portfolio-meta -->
                                <div class="portfolio-meta">
                                    <span>Type:</span>
                                    Branding, Illustrator
                                </div> <!-- end .portfolio-meta -->
                                <p><a href="#" class="button solid-button purple">Visit Website</a></p>
                            </div> <!-- end .portfolio-details -->
                        </div> <!-- end .col-sm-4 -->
                    </div> <!-- end .row -->
                </div> <!-- end .container -->
            </section> <!-- end #section1 -->

        </div> <!-- end .sections-wrapper -->
    </div>
@endsection

@section('footer-js')

@endsection
