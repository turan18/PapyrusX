<?php require 'partials/head.php' ?>

<link href="public/css/Register.css" rel="stylesheet" type="text/css">
<script defer src="public/js/formValidation.js"></script>


<?php require 'partials/start_content.php' ?>


<main class="content position-relative">
    <section class="welcome-info">
        
    </section>

    <section class="register">
    <div class="switch">
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a
                    class="nav-link active"
                    href="/"
                    >Login</a
                    >
                </li>
        </div>
        <div class="intro">
            <div class="heading">
                <h1>Sign Up.<h1>
            </div>
        </div>
    
        <div class="register-content">
            <div class="form-container">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form class="needs-validation" novalidate method="post">
                        <!-- Email input -->
                            <div class="form-outline mb-6">
                                <input type="text" id="first_name" name="first_name" class="form-control" required />
                                <label class="form-label" for="first_name">First Name</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your first name.</div>
                            </div>

                            <div class="form-outline mb-6">
                                <input type="text" id="last_name" name="last_name" class="form-control" required/>
                                <label class="form-label" for="last_name">Last Name</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your last name.</div>

                            </div>

                            <div class="form-outline mb-6">
                                <input type="email" id="registerName" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.edu$" required/>
                                <label class="form-label" for="registerName">Email</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter a valid .edu email.</div>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-5">
                                <input type="password" id="registerPassword" name="password" class="form-control" minlength="5" required/>
                                <label class="form-label" for="registerPassword">Password</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter a valid password (Must be at least 5 characters.)</div>

                            </div>

                            <!-- 2 column grid layout -->
                            <div class="d-flex flex-column justify-content-center text-center">
                                <p for="basic-url" class="mb-4 h3">I am a...</p>
                                <div class="form-outline mb-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" value="student" id="flexRadioDefault1" required/>
                                        <label class="form-check-label" for="flexRadioDefault1">Student</label>
                                    </div>

                                    <!-- Default checked radio -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" value="instructor" id="flexRadioDefault2" checked required/>
                                        <label class="form-check-label" for="flexRadioDefault2">Instructor</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
                            <!-- Register buttons -->
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
