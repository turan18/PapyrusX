<?php require 'partials/head.php' ?>

<link href="public/css/Class_Creation.css" rel="stylesheet" type="text/css">

<?php require 'partials/start_content.php' ?>




<div class="form-container">
    <h1 class="title">Create a Class</h1>
    <form class="form">
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" id="form4Example1" class="form-control" />
            <label class="form-label" for="form4Example1">Class Name</label>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
            <label class="form-label" for="form4Example3">Class Description</label>
        </div>

        <!-- Checkbox -->
        <div class="days-container">
            <p class="days-title">Days<p>
            <div class="d-flex justify-content-between mb-4">
                <div>
                    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4"  />
                    <label class="form-check-label" for="mon">
                    Monday
                    </label>
                </div>
                <div>
                    <input class="form-check-input me-2" type="checkbox" value="" id="tues"  />
                    <label class="form-check-label" for="tues">
                    Tuesday
                    </label>
                </div>
                <div>
                    <input class="form-check-input me-2" type="checkbox" value="" id="wed"  />
                    <label class="form-check-label" for="wed">
                    Wednesday
                    </label>
                </div>
                <div>
                    <input class="form-check-input me-2" type="checkbox" value="" id="thur"  />
                    <label class="form-check-label" for="thur">
                    Thursday
                    </label>
                </div>
                <div>
                    <input class="form-check-input me-2" type="checkbox" value="" id="fri"  />
                    <label class="form-check-label" for="fri">
                    Friday
                    </label>
                </div>
            
            </div>
        <div>

        
        <div class="time mb-4">
            <div class="time-start">
                <h1 class="time-title">Start Time</h1>
                <div class="time-start-container">
                    <div class="hour">
                        <label for="exampleSelect">Hour</label>
                        <select class="form-control" id="exampleSelect">
                            <option selected="true" disabled="disabled">0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                    </div>
                    <span>:</span>
                    <div class="minute">
                        <label for="exampleSelect">Minute</label>
                        <select class="form-control" id="exampleSelect">
                            <option>00</option>
                            <option>05</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                            <option>35</option>
                            <option>40</option>
                            <option>45</option>
                            <option>50</option>
                            <option>55</option>
                        </select>
                    </div>
                    <span>-</span>
                    <div class="time-am-pm">
                        <label for="exampleSelect">AM/PM</label>
                        <select class="form-control" id="exampleSelect">
                            <option>AM</option>
                            <option>PM</option>
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
                    <select class="form-control" id="exampleSelect">
                        <option selected="true" disabled="disabled">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </div>
                <span>:</span>
                <div class="minute">
                    <label for="exampleSelect">Minute</label>
                    <select class="form-control" id="exampleSelect">
                        <option>00</option>
                        <option>05</option>
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                        <option>30</option>
                        <option>35</option>
                        <option>40</option>
                        <option>45</option>
                        <option>50</option>
                        <option>55</option>
                    </select>
                </div>
                <span>-</span>
                <div class="time-am-pm">
                    <label for="exampleSelect">AM/PM</label>
                    <select class="form-control" id="exampleSelect">
                        <option>AM</option>
                        <option>PM</option>
                    </select>
                </div>
                </div>
                
            </div> 
        </div>
        

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Create Class</button>
    </form>
</div>



<?php require 'partials/footer.php' ?>
