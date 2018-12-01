<!-- START FOOTER  -->

        <footer>            

<section class="footer-widget-area footer-widget-area-bg">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="about-footer">

                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <img style="width:170px;" src="images/logo.png" alt="" />
                        </div> <!--  end col-lg-3-->

                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <p>
                            Superheart is platform for saving lives by collaborating with blood donors. with simple clicks you become a superman.
                            </p>
                        </div> <!--  end .col-lg-9  -->

                    </div> <!--  end .row -->

                </div> <!--  end .about-footer  -->

            </div> <!--  end .col-md-12  -->

        </div> <!--  end .row  -->

        <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">

                <div class="footer-widget">
                    <div class="sidebar-widget-wrapper">
                        <div class="footer-widget-header clearfix">
                            <h3>Subscribe Us</h3>
                        </div>
                        <p>Signup for regular newsletter and stay up to date with our latest news.</p>
                        <div class="footer-subscription">
                            <p>
                                <input id="mc4wp_email" class="form-control" required="" placeholder="Enter Your Email" name="EMAIL" type="email">
                            </p>
                            <p>
                                <input class="btn btn-default" value="Subscribe Now" type="submit">
                            </p>
                        </div>
                    </div>
                </div>

            </div> <!--  end .col-md-4 col-sm-12 -->   						                      

            <div class="col-md-4  col-md-offset-2 col-sm-6 col-xs-12">

                

            </div> <!--  end .col-md-4 col-sm-12 -->   


        </div> <!-- end row  -->

    </div> <!-- end .container  -->

</section> <!--  end .footer-widget-area  -->

<!--FOOTER CONTENT  -->

<section class="footer-contents">

    <div class="container">

        <div class="row clearfix">

            <div class="col-md-6 col-sm-12">
                <p class="copyright-text"> Savers is here!</p>

            </div>  <!-- end .col-sm-6  -->

            <div class="col-md-6 col-sm-12 text-right">
                <div class="footer-nav">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Home</a>
                            </li>
                           
                            <li>
                                <a href="{{route('about-us')}}">About us</a>
                            </li>
                            <li>
                                <a href="{{route('campaigns')}}">Campaign</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div> <!--  end .footer-nav  -->
            </div> <!--  end .col-lg-6  -->

        </div> <!-- end .row  -->                                    

    </div> <!--  end .container  -->

</section> <!--  end .footer-content  -->

</footer>

<!-- END FOOTER  -->
<!-- Back To Top Button  -->

<a id="backTop">Back To Top</a>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.backTop.min.js "></script>
<script src="js/waypoints.min.js"></script>
<script src="js/waypoints-sticky.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/venobox.min.js"></script>
<script src="js/custom-scripts.js"></script>
<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script>
Vue.component('search-component', {
    template: '#search-component',
    data: function () {
        return {
            country: '',
            countries : [],
            searchs : [],
            city: '',
            t :'',
            types: [
                'O-',
                'O+',
                'B-',
                'B+',
                'A-',
                'A+',
                'AB-',
                'AB+'
            ],
            error : null,

        };
    },
    created(){
        this.getCountries();
    },
    watch:{
       
    },
    methods: {
        getCountries(){
            axios.get('/ajax/countries')
            .then(response => {
                this.countries = response.data.countries;
            });
        },
        search(){
            if(!this.t.length || !this.country.length || !this.city.length)
            {
                this.error = 'please fill inputs...';
                return;
            } 
            this.error = null;
            var obj = {type:this.t,country: this.country,city:this.city};
            axios.post('/search',{
                data : obj
            })
            .then(response => {
                this.searchs = [];
                response.data.map((item) => {
                    this.searchs.push(item);
                });
            })
        }
    }
});
var app = new Vue({
    el: '#vue-app'
});
</script>
</body>

</html>