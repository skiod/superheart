@include('layouts.header')

@include('layouts.nav')



 <!--  SECTION APPOINTMENT   -->

        <section class="section-appointment">

<div class="container wow fadeInUp">

    <div class="row">

        <div class="col-lg-6 col-md-6 hidden-sm hidden-xs"> 

            <figure class="appointment-img">
                <img src="images/appointment.jpg" alt="appointment image">
            </figure>
        </div> <!--  end col-lg-6  -->


        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 

            <div class="appointment-form-wrapper text-center clearfix">
                <h3 class="join-heading">"You dont need to be Superman to save lives"</h3>
                <!-- sign up -->
                <form id="signup" method="post" class="appoinment-form" action="{{route('signup-user')}}" > 
                    {{ csrf_field() }}
                    <div class="form-group col-md-6">
                        <input id="name" name="name" class="form-control" placeholder="Name" type="text" required>
                    </div>

                    <div class="form-group col-md-6">
                        <input id="phone" name="phone" class="form-control" placeholder="Phone" type="text" required>
                    </div>

                    <div class="form-group col-md-6">
                        <input id="country" name="country" class="form-control" placeholder="country" type="text" required>
                    </div>

                    <div class="form-group col-md-6">
                        <input id="city" name="city" class="form-control" placeholder="city" type="text" required>
                    </div>

                    <div class="form-group col-md-8">
                        <input id="email" name="email" class="form-control" placeholder="Email" type="email" required>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <div class="form-group">
                            <select id="bloodtype" class="form-control"  name="type" required>
                                <option value="" >blood type</option>
                                <option value="O-" >O-</option>
                                <option value="O+" >O+</option>
                                <option value="B-" >B-</option>
                                <option value="B+" >B+</option>
                                <option value="A-" >A-</option>
                                <option value="A+" >A+</option>
                                <option value="AB-" >AB-</option>
                                <option value="AB+" >AB+</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                    <div class="checkbox" style="text-align:left">
                        <label><input id="notify" type="checkbox" value="" name="notify">Notify me by sms.</label>
                    </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <button  id="btn_submit" class="btn-submit" type="submit">Apply</button>
                    </div>
                </form>
                <!-- sign up -->
                <!-- login form -->
                <!-- <form id="login" class="appoinment-form" method="post" action="{{route('login-user')}}"> 
                    {{ csrf_field() }}
                    <div class="form-group col-md-12">
                        <input name="email"  class="form-control" placeholder="Email" type="email">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="password" id="password" class="form-control" placeholder="Password" type="password">
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <button class="btn-submit" type="submit">Login</button>
                    </div>

                </form> -->
                <div class="flash-message" style="margin-top:10px" >
                @if(Session::has('alert-success'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alert-success') !!}</em></div>
                @endif
                </div> <!-- end .flash-message -->

                <!--  login  form -->
                <!-- -->
                <!-- <div id="alreadylogin" class="form-group col-md-12 col-sm-12 col-xs-12">
                    <span>Already have an account ? </span>
                        <button id="btn_login" class="btn-link" >Login</button>
                </div>
                <div id="alreadysignup" class="form-group col-md-12 col-sm-12 col-xs-12">
                    <span>Switch to signup </span>
                        <button id="btn_signup" class="btn-link" >sign up</button>
                </div> -->


            </div> <!-- end .appointment-form-wrapper  -->

        </div> <!--  end .col-lg-6 -->

    </div> <!--  end .row  -->

</div> <!--  end .container -->

</section>  <!--  end .appointment-section  -->







@include('layouts.footer')