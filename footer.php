<?php
/**
 * User: edgardoacosta
 * Date: 14/04/17
 * Time: 17:32
 */

echo '

    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 col-md-offset-1">
                    <h5 class="title">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-md-2 col-md-offset-1">
                    <h5 class="title">Links</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-md-2">
                    <h5 class="title">Links</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-md-2">
                    <h5 class="title">Links</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <ul>
                <li>
                    <h5>Register for free</h5></li>
                <li><a href="" class="btn btn-danger">Sign up!</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <hr>

        <!--Social buttons-->
        <div class="social-section">
            <ul>
                <li><a href="https://www.facebook.com/mdbootstrap" target="_blank" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
                <li><a href="https://twitter.com/MDBootstrap" target="_blank" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
                <li><a href="https://plus.google.com/u/0/+Mdbootstrap" target="_blank" class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
                <li><a href="https://www.linkedin.com/in/michal-szymanski-9228918a" target="_blank" class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
                <li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
                <li><a href="https://pl.pinterest.com/materialdesignf/" target="_blank" class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
                <li><a href="https://www.instagram.com/material_design_for_bootstrap/" target="_blank" class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        // SideNav init
        $(".button-collapse").sideNav();
        var el = document.querySelector(\'.custom-scrollbar\');
        Ps.initialize(el);
    </script>

    <script>
        new WOW().init();
    </script>

</body>

</html>';