<?php
global $view;
$postData = $view->getPostData();
$errors = $view->getErrors();
?>

<div class="form">
    <form method="post" class="form-horizontal" xmlns="http://www.w3.org/1999/html">

        <div class="row">
        <div class="col-sm-12 form-group">
            <label class="control-label" for="name">Name: </label>
            <div class="control">
                <input name="name" type="text" value="<?=$postData["name"]?>"/>
                <span class="error"> <?=$errors["name"]?></span>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-12 form-group">
            <label class="control-label">Age: </label>
            <div class="control">
                <input name="age" type="text" value="<?=$postData["age"]?>"/>
                <span class="error"> <?=$errors["age"]?></span>
            </div>
        </div>
        </div>
            <div class="row">
        <div class="col-sm-12 form-group">
            <label class="control-label">Gender: </label>
            <label class="radio-inline">
            <input name="gender" type="radio" value="Male"/> Male
                </label>
            <label class="radio-inline">
                 <input name="gender" type="radio" value="Female"/> Female
            </label>
                <span class="error"> <?=$errors["gender"]?></span>
        </div>
            </div>
                <div class="row">
        <div class="col-sm-12 form-group">
            <label class="control-label">LDL-C: </label>
            <div class="control">
                <input name="ldlc" type="text" value="<?=$postData["ldlc"]?>"/>
                <span class="error"> <?=$errors["ldlc"]?></span>
            </div>
        </div>
                </div>
                    <div class="row">
        <div class="col-sm-12 form-group">
            <label class="control-label">HDL-C: </label>
            <div class="control">
                <input name="hdlc" type="text" value="<?=$postData["hdlc"]?>"/>
                <span class="error"> <?=$errors["hdlc"]?></span>
            </div>
        </div>
                    </div>
                        <div class="row">
        <div class="col-sm-12 form-group">
            <label class="control-label">Total Cholesterol: </label>
            <div class="control">
                <input name="totalchol" type="text" value="<?=$postData["totalchol"]?>"/>
                <span class="error"><?=$errors["totalchol"]?></span>
            </div>
        </div>
                        </div>
                            <div class="row">
        <div class="col-sm-12 form-group">
            <label class="control-label">Systolic Blood Pressure: </label>
            <div class="control">
                <input name="systolic" type="text" value="<?=$postData["systolic"]?>" />
                <span class="error"><?=$errors["systolic"]?></span>
            </div>
        </div>
                            </div>
                                <div class="row">
            <div class="col-sm-12 form-group">
            <label class="control-label">Diastolic Blood Pressure: </label>
                <div class="control">
                    <input name="diastolic" type="text" value="<?=$postData["diastolic"]?>"/>
                    <span class="error"><?=$errors["diastolic"]?></span>
                </div>
            </div>
                                </div>
                                    <div class="row">
        <div class="col-sm-12 form-group">
            <label class="radio-inline">
                <input name="smoker" type="checkbox" value="<?=$postData["smoker"]?>"/>
                Smoker?
            </label>
        </div>
                                    </div>
                                        <div class="row">
        <div class="col-sm-12 form-group">
            <label class="radio-inline">
                <input name="meds" type="checkbox" value="<?=$postData["meds"]?>"/>
                Heart Medication?
            </label>
        </div>
                                        </div>
                                            <div class="row">
        <div class="col-sm-12 form-group">
            <label class="radio-inline">
                <input name="diabetes" type="checkbox" value="<?=$postData["diabetes"]?>"/>
                Diabetes?
            </label>
        </div>
                                            </div>
    <div class="row">
        <input type="submit" class="btn btn-primary" value="Calculate Risk"/>
        </div>
    </form>
</div>   <!--End form -->