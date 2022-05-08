<?php require 'partials/session.php' ?>
<?php require 'partials/head.php' ?>
<link href="public/css/Class_Creation.css" rel="stylesheet" type="text/css">
<?php require 'partials/start_content.php' ?>
<?php require 'components/navbar.php' ?>

<div class="form-container">
    <h1 class="title">Create a Class</h1>
    <form class="form" method="POST">
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" id="form4Example1" class="form-control" name="name"/>
            <label class="form-label" for="form4Example1">Class Name</label>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <textarea class="form-control" id="form4Example3" rows="4" name="description"></textarea>
            <label class="form-label" for="form4Example3">Class Description</label>
        </div>

        <!-- Checkbox -->
        <div class="days-container">
            <p class="days-title">Days<p>
            <div class="d-flex justify-content-between mb-4">
            <!-- <fieldset> -->
                <div>
                        
                        <input class="form-check-input me-2" type="checkbox" name="days[]" value="monday" id="form4Example4"  />
                        <label class="form-check-label" for="mon">
                        Monday
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input me-2" type="checkbox" name="days[]" value="tuesday" id="tues"  />
                        <label class="form-check-label" for="tues">
                        Tuesday
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input me-2" type="checkbox" name="days[]" value="wednesday" id="wed"  />
                        <label class="form-check-label" for="wed">
                        Wednesday
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input me-2" type="checkbox" name="days[]" value="thursday" id="thur"  />
                        <label class="form-check-label" for="thur">
                        Thursday
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input me-2" type="checkbox" name="days[]" value="friday" id="fri"  />
                        <label class="form-check-label" for="fri">
                        Friday
                        </label>
                    </div>
                <!-- </fieldset> -->
                
            
            </div>
        <div>

        
        <div class="time mb-4">
            <div class="time-start">
                <h1 class="time-title">Start Time</h1>
                <div class="time-start-container">
                    <div class="hour">
                        <label for="exampleSelect">Hour</label>
                        <select class="form-control" id="exampleSelect" name="start_hour">
                            <option selected="true" disabled="disabled">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="0">12</option>
                        </select>
                    </div>
                    <span>:</span>
                    <div class="minute">
                        <label for="exampleSelect">Minute</label>
                        <select class="form-control" id="exampleSelect" name="start_minute">
                            <option value="00">00</option>
                            <option value="05">05</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                            <option value="30">30</option>
                            <option value="35">35</option>
                            <option value="40">40</option>
                            <option value="45">45</option>
                            <option value="50">50</option>
                            <option value="55">55</option>
                        </select>
                    </div>
                    <span>-</span>
                    <div class="time-am-pm">
                        <label for="exampleSelect">AM/PM</label>
                        <select class="form-control" id="exampleSelect" name="start_half">
                            <option value="0">AM</option>
                            <option value="12">PM</option>
                        </select>
                    </div>
                </div>
            </div>
                
            <div class="time-end">
                <h1 class="time-title">
                    End Time
                </h1>
                <div class="time-end-container">
                <div class="hour">
                    <label for="exampleSelect">Hour</label>
                    <select class="form-control" id="exampleSelect" name="end_hour">
                    <option selected="true" disabled="disabled">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="0">12</option>
                    </select>
                </div>
                <span>:</span>
                <div class="minute">
                    <label for="exampleSelect">Minute</label>
                    <select class="form-control" id="exampleSelect" name="end_minute">
                        <option value="00">00</option>
                        <option value="05">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                    </select>
                </div>
                <span>-</span>
                <div class="time-am-pm">
                    <label for="exampleSelect">AM/PM</label>
                    <select class="form-control" id="exampleSelect" name="end_half">
                        <option value="0">AM</option>
                        <option value="12">PM</option>
                    </select>
                </div>
                </div>
                
            </div> 
        </div>
        

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Create Class</button>
    </form>
</div>


<script src="public/js/flash.js"></script>
<?php require 'components/flash.php' ?>
<?php require 'partials/footer.php' ?>
