<?php

//error_reporting(E_ERROR | E_PARSE);
//session_start();

//require_once __DIR__ . '/backend/errors.php';
//
//// include db connect class
//require_once __DIR__ . '/backend/db_connect.php';
//
////Creating Database connection
//$db = new dbConnectionController;
//$db->connect();
//$dbConn = $db->getConn();
//
//if ($db->is_connected != true) {
//    header('Location: ' . './../');
//    exit;
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Business</title>
    <meta name="description" content="Blood Bank">
    <meta name="keywords" content="blood bank, blood type, bank">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
</head>
<body>
<!--Modal box-->
<div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="update_modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" role="form" class="contactForm">
                    <div class="form-outline mb-4">
                        <input type="text" id="id" class="form-control" name="id" readonly />
                        <label class="form-label" for="id">id</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="business_name" class="form-control" name="business_name" readonly/>
                        <label class="form-label" for="business_name">business_name</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="business_type" class="form-control" name="business_type" readonly/>
                        <label class="form-label" for="business_type">business_type</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="business_start_date" class="form-control" name="business_start_date" readonly/>
                        <label class="form-label" for="business_start_date">business_start_date</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="last_modified" class="form-control" name="last_modified" readonly/>
                        <label class="form-label" for="last_modified">last_modified</label>
                    </div>
                    <div class="form-outline mb-4">
                        <select class="form-select" id="region" name="region" aria-label="Default select example">
                            <option id="region_India" value="India">India</option>
                            <option id="region_Philippines" value="Philippines">Philippines</option>
                            <option id="region_Latin America" value="Latin America">Latin America</option>
                            <option id="region_United States of America" value="United States of America">United States of America</option>
                        </select>
                        <label class="form-label" for="region">region</label>
                    </div>
                    <div class="form-outline mb-4">
                        <select class="form-select" id="assistant_type" name="assistant_type" aria-label="Default select example">
                            <option id="assistant_type_VA" value="VA">VA</option>
                            <option id="assistant_type_Captain" value="Captain">Captain</option>
                            <option id="assistant_type_Senior_Captain" value="Senior Captain">Senior Captain</option>
                        </select>
                        <label class="form-label" for="assistant_type">assistant_type</label>
                    </div>
                    <div class="form-outline mb-4">
                        <select class="form-select" id="plan_subscribed" name="plan_subscribed" aria-label="Default select example">
                            <option id="plan_subscribed_199" value="199">199</option>
                            <option id="plan_subscribed_399" value="399">399</option>
                            <option id="plan_subscribed_799" value="799">799</option>
                            <option id="plan_subscribed_999" value="999">999</option>
                        </select>
                        <label class="form-label" for="plan_subscribed">plan_subscribed</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Modal box-->

<!--Blood Samples-->
<section id="faculity-member" class="section-padding">
    <div class="container" style="padding: 48px">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update_modal">
            modal
        </button>
        <div style="margin-top: 48px">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">business_name</th>
                    <th scope="col">business_type</th>
                    <th scope="col">region</th>
                    <th scope="col">business_start_date</th>
                    <th scope="col">assistant_type</th>
                    <th scope="col">plan_subscribed</th>
                    <th scope="col">last_modified</th>
                    <th scope="col">Actoin(s)</th>
                </tr>
                </thead>
                <tbody>
<!--Fetch data from API and insert here                -->
                </tbody>
            </table>

        </div>
    </div>
</section>
<!--/ Blood Samples-->

<!--<script src="js/jquery.min.js"></script>-->
<!--<script src="js/jquery.easing.min.js"></script>-->
<!--<script src="js/bootstrap.min.js"></script>-->
<script src="js/index.js"></script>

</body>
</html>