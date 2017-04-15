<!DOCTYPE html>
<html lang="en">
<?php include_once 'header.php' ?>
<script src="js/login.js"></script>

<main>

    <div class="container">
        <!-- normal user login and admin login-->
        <div class="row" id="sign-in" style="display: block">
            <!--First column-->
            <div class="col-lg-6">
                <div class="description">
                    <h2 class="h2-responsive wow fadeInLeft">Welcome back! </h2>
                    <hr class="hr-dark wow fadeInLeft">
                    <p class="wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi
                        sequi non animi ea dolor molestiae, quisquam iste, maiores. Nulla.</p>
                </div>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-lg-6">
                <!--Form-->
                <div class="card">
                    <div class="card-block">
                        <!--Header-->
                        <div class="text-xs-center">
                            <h3><i class="fa fa-user"></i> Login:</h3>
                            <hr>
                        </div>
                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="form2" class="form-control" required>
                            <label for="form2">Your email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="form4" class="form-control" required>
                            <label for="form4">Your password</label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-comm btn-lg enter">Sign in</button>
                            <button class="btn btn-comm btn-lg" id="signup">Sign up</button>
                            <hr>
                            <fieldset class="form-group">
                                <input type="checkbox" id="remember1">
                                <label for="checkbox1">Remember me</label>
                            </fieldset>
                        </div>

                    </div>
                </div>
                <!--/.Form-->
            </div>
            <!--/Second column-->

        </div>
        <div class="row" id="sign-up" style="display: none">
            <!--First column-->
            <div class="col-lg-6">
                <div class="description">
                    <h2 class="h2-responsive wow fadeInLeft">Sign up right now! </h2>
                    <hr class="hr-dark wow fadeInLeft">
                    <p class="wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi
                        sequi non animi ea dolor molestiae, quisquam iste, maiores. Nulla.</p>
                    <br>
                    <a class="btn btn-comm btn-lg wow fadeInLeft" data-wow-delay="0.7s">Learn more</a>
                </div>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-lg-6">
                <!--Form-->
                <div class="card">
                    <div class="card-block">
                        <!--Header-->
                        <div class="text-xs-center">
                            <h3><i class="fa fa-user"></i> Register with:</h3>
                            <a href="#"
                               class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a>
                            <a href="#"
                               class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a>
                            <hr>
                            <h3>or:</h3>
                        </div>

                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="form2" class="form-control" required>
                            <label for="form2">Your email</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-user-secret prefix"></i>
                            <input type="text" id="form2" class="form-control" required>
                            <label for="form2">Your name</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="form4" class="form-control" required>
                            <label for="form4">Your password</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-phone prefix"></i>
                            <input type="tel" id="form4" class="form-control" required>
                            <label for="form4">Your phone</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-home prefix"></i>
                            <input type="text" id="form4" class="form-control" required>
                            <label for="form4">Your address</label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-comm btn-lg enter">Sign up</button>
                            <br>
                            <button class="btn btn-comm btn-lg" id="singin">Sign in</button>
                            <hr>
                            <fieldset class="form-group">
                                <input type="checkbox" id="checkbox1">
                                <label for="checkbox1">Subscribe me to the newsletter</label>
                            </fieldset>
                        </div>

                    </div>
                </div>
                <!--/.Form-->
            </div>
            <!--/Second column-->

        </div>
        <!--/nomral user login and admin login-->
        <br>
        <hr>
        <!-- new admin-->
        <div class="row" id="add-admin" style="display: block">
            <!--header -->
            <div class="row" style="text-align: center">
                <div class="col-lg-12">
                    <div class="description">
                        <h2 class="h2-responsive wow fadeInLeft">Add new admin </h2>
                        <hr class="hr-dark wow fadeInLeft">
                        <p class="wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit</p>
                        <br>
                    </div>
                </div>
            </div>
            <!--/.header -->

            <!--body -->
            <div class="row" style="margin: 0px auto;">
                <div class="col-lg-10">
                    <!--Form-->
                    <div class="card">
                        <div class="card-block">
                            <!--Header-->
                            <div class="text-xs-center">
                                <h3><i class="fa fa-user"></i> Register with:</h3>
                                <hr>
                            </div>

                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form2" class="form-control" required>
                                <label for="form2">Your email</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-user-secret prefix"></i>
                                <input type="text" id="form2" class="form-control" required>
                                <label for="form2">Your name</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="form4" class="form-control" required>
                                <label for="form4">Your password</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-phone prefix"></i>
                                <input type="tel" id="form4" class="form-control" required>
                                <label for="form4">Your phone</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-home prefix"></i>
                                <input type="text" id="form4" class="form-control" required>
                                <label for="form4">Your address</label>
                            </div>

                            <div class="md-form">

                                <input type="checkbox" id="checkbox1">
                                <label for="checkbox1">All permissions</label>
                            </div>

                            <div class="text-xs-center">
                                <button class="btn btn-comm btn-lg" id="add-new-admin">Add</button>
                            </div>

                        </div>
                    </div>
                    <!--/.Form-->
                </div>
            </div>
            <!--/body-->

        </div>
        <!-- /new admin-->
    </div>


</main>
<!--/Main layout-->

<?php include_once 'footer.php' ?>