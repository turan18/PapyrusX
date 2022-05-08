<?php require 'partials/head.php' ?>

<link href="public/css/Home.css" rel="stylesheet" type="text/css">
<?php require 'partials/start_content.php' ?>


<main class="content position-relative">
    <section class="welcome-info">
        
    </section>

    <section class="login">
    <div class="switch">
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a
                    class="nav-link active"
                    id="tab-login"
                    data-mdb-toggle="pill"
                    href="#pills-login"
                    role="tab"
                    aria-controls="pills-login"
                    aria-selected="true"
                    >Student</a
                    >
                </li>
                <li class="nav-item" role="presentation">
                    <a
                    class="nav-link"
                    id="tab-register"
                    data-mdb-toggle="pill"
                    href="#pills-register"
                    role="tab"
                    aria-controls="pills-register"
                    aria-selected="false"
                    >Instructor</a
                    >
                </li>
                </ul>
        </div>
        <div class="intro">
            <div class="heading">
                <h1>Login Here.<h1>
            </div>
        </div>
    
        <div class="login-content">
            <div class="form-container">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form method="POST" action="/login">
                        <!-- Email input -->
                            <div class="form-outline mb-6">
                                <input type="email" id="studentLoginName" class="form-control" name="email"/>
                                <label class="form-label" for="studentLoginName">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-6">
                                <input type="password" id="studentLoginPassword" class="form-control" name="password" />
                                <label class="form-label" for="studentLoginPassword">Password</label>
                            </div>
                            <input type="hidden" value="0" name="type"> 

                            <!-- 2 column grid layout -->
                            <!-- <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center"> -->
                                <!-- Checkbox -->
                                <!-- <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                </div>
                                </div> -->

                                <!-- <div class="col-md-6 d-flex justify-content-center"> -->
                                <!-- Simple link -->
                                <!-- <a href="#!">Forgot password?</a>
                                </div>
                            </div> -->

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="/register">Register</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form method="POST" action="/login">
                            <!-- Email input -->
                            <div class="form-outline mb-6">
                                <input type="email" id="instructorLoginName" class="form-control" name="email"/>
                                <label class="form-label" for="instructorLoginName">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-6">
                                <input type="password" id="instructorLoginPassword" class="form-control" name="password"/>
                                <label class="form-label" for="instructorLoginPassword">Password</label>
                            </div>
                            <input type="hidden" value="1" name="type"> 

                            <!-- 2 column grid layout -->
                            <!-- <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center"> -->
                                <!-- Checkbox -->
                                <!-- <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                </div>
                                </div> -->

                                <!-- <div class="col-md-6 d-flex justify-content-center"> -->
                                <!-- Simple link -->
                                <!-- <a href="#!">Forgot password?</a>
                                </div>
                            </div> -->

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="/register">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<script src="public/js/flash.js"></script>
<?php require 'components/flash.php' ?>

<?php require 'partials/footer.php' ?>
