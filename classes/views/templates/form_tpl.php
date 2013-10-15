<?php
global $view;
$postData = $view->getPostData();
$errors = $view->getErrors();
?>
<div class="panel panel-default">
    <div class="panel-body">

        <form method="post" class="form-horizontal" xmlns="http://www.w3.org/1999/html">

            <div class="form-group">
                <label class="control-label col-lg-2" for="name">Name: </label>
                <div class="col-lg-10">
                    <input name="name" type="text" value="<?= $postData["name"] ?>"/>
                    <span class="error"> <?= $errors["name"] ?></span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2">Age: </label>
                <div class="col-lg-10">
                    <input name="age" type="text" value="<?= $postData["age"] ?>"/>
                    <span class="error"> <?= $errors["age"] ?></span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2 ">Gender: </label>
                <div class="col-lg-10">
                    <label class="radio-inline">
                    <input name="gender" type="radio" value="Male"/> Male
                    </label>
                    <label class="radio-inline">
                    <input name="gender" type="radio" value="Female"/> Female
                    </label>
                    <span class="error"> <?= $errors["gender"] ?></span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2">LDL-C: </label>
                <div class="col-lg-10">
                    <input name="ldlc" type="text" value="<?= $postData["ldlc"] ?>"/>
                    <span class="error"> <?= $errors["ldlc"] ?></span>

                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2">HDL-C: </label>
                <div class="col-lg-10">
                    <input name="hdlc" type="text" value="<?= $postData["hdlc"] ?>"/>
                    <span class="error"> <?= $errors["hdlc"] ?></span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2">Total Cholesterol: </label>
                <div class="col-lg-10">
                    <input name="totalchol" type="text" value="<?= $postData["totalchol"] ?>"/>
                    <span class="error"><?= $errors["totalchol"] ?></span>

                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2">Systolic Blood Pressure: </label>
                <div class="col-lg-10">
                    <input name="systolic" type="text" value="<?= $postData["systolic"] ?>"/>
                    <span class="error"><?= $errors["systolic"] ?></span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2">Diastolic Blood Pressure: </label>
                <div class="col-lg-10">
                    <input name="diastolic" type="text" value="<?= $postData["diastolic"] ?>"/>
                    <span class="error"><?= $errors["diastolic"] ?></span>
                </div>
            </div>

            <div class="col-lg-offset-2">
                <div class="form-group">

                    <label class="radio-inline">
                        <input name="smoker" type="checkbox" value="<?= $postData["smoker"] ?>"/>
                        Smoker?
                    </label>

                </div>
                <div class="form-group">

                    <label class="radio-inline">
                        <input name="meds" type="checkbox" value="<?= $postData["meds"] ?>"/>
                        Heart Medication?
                    </label>

                </div>
                <div class="form-group">

                    <label class="radio-inline">
                        <input name="diabetes" type="checkbox" value="<?= $postData["diabetes"] ?>"/>
                        Diabetes?
                    </label>

                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Calculate Risk"/>
                </div>
            </div>
        </form>
    </div>
    <!--End form -->
