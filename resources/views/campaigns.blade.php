@include('layouts.header')

@include('layouts.nav')

        </header> <!-- end main-header  -->

        <!--  PAGE HEADING -->

        <section class="page-header" data-stellar-background-ratio="1.2">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3>
                            Campaign Lists
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / All Campaigns
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->

        <!--  MAIN CONTENT  -->

        <!--  SECTION CAMPAIGNS   -->

        <section class="section-content-block" >

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Donation Campaigns</h2>
                        <p class="section-subheading">Campaigns to encourage new donors to join and existing to continue to give blood.</p>
                    </div> <!-- end .col-sm-12  -->                       

                </div> <!-- end .row  -->


                <div class="row">

                    @foreach($campaigns as $campaign)
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="event-latest">
                            <div class="row"> 

                                <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                    <div class="event-latest-thumbnail">
                                        <a href="#">
                                            <img src="images/event_4.jpg" alt="">
                                        </a>
                                    </div>
                                </div> <!--  col-sm-5  -->

                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="event-details">
                                        <a class="latest-date" href="#">{{$campaign->startdate}}</a>
                                        <h4 class="event-latest-title">
                                            <a href="#">{{$campaign->title}}</a>
                                        </h4>
                                        <p>{{$campaign->desc}}</p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$campaign->starttime}} - {{$campaign->endtime}}</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> {{$campaign->city}}, {{$campaign->country}}</a>
                                        </div>
                                    </div>
                                </div> <!--  col-sm-7  -->

                            </div>

                        </div>
                    </div> <!--  col-sm-6  -->
                    @endforeach

                <div class="row">
                    <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                        <a class="btn btn-load-more" href="#">Load All Campaigns</a>
                    </div>
                </div>

            </div> <!--  end .container  --> 

        </section>


@include('layouts.footer')
