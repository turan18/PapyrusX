<?php require 'partials/head.php' ?>

<link href="public/css/Home.css" rel="stylesheet" type="text/css">

<?php require 'partials/start_content.php' ?>


<main class="content">
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
                        <form>
                        <!-- Email input -->
                            <div class="form-outline mb-6">
                                <input type="email" id="loginName" class="form-control" />
                                <label class="form-label" for="loginName">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-6">
                                <input type="password" id="loginPassword" class="form-control" />
                                <label class="form-label" for="loginPassword">Password</label>
                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <a type="submit" href="/dashboard" class="btn btn-primary btn-block mb-4">Sign in</a>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="/register">Register</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form>
                            <!-- Email input -->
                            <div class="form-outline mb-6">
                                <input type="email" id="loginName" class="form-control" />
                                <label class="form-label" for="loginName">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-6">
                                <input type="password" id="loginPassword" class="form-control" />
                                <label class="form-label" for="loginPassword">Password</label>
                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                                </div>
                            </div>

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

<?php require 'partials/footer.php' ?>
