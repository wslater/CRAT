<?php
global $view;
$postData = $view->getPostData();
$errors = $view->getErrors();
?>

<div class="form">
    <form method="post" xmlns="http://www.w3.org/1999/html">
        Name: <input name="name" type="text" value="<?=$postData["name"]?>"/> <span class="error"> <?=$errors["name"]?></span><br/>
        Age: <input name="age" type="text" value="<?=$postData["age"]?>"/> <span class="error"> <?=$errors["age"]?></span><br/>
        Gender:  Male <input name="gender" type="radio" value="Male"/>     Female <input name="gender" type="radio" value="Female"/> <span class="error"> <?=$errors["gender"]?></span><br/>
        LDL-C: <input name="ldlc" type="text" value="<?=$postData["ldlc"]?>"/><span class="error"> <?=$errors["ldlc"]?></span><br/>
        HDL-C: <input name="hdlc" type="text" value="<?=$postData["hdlc"]?>"/><span class="error"> <?=$errors["hdlc"]?></span><br/>
        Total Cholesterol: <input name="totalchol" type="text" value="<?=$postData["totalchol"]?>"/> <span class="error"><?=$errors["totalchol"]?></span><br/>
        Systolic Blood Pressure: <input name="systolic" type="text" value="<?=$postData["systolic"]?>" /> <span class="error"><?=$errors["systolic"]?></span><br/>
        Diastolic Blood Pressure: <input name="diastolic" type="text" value="<?=$postData["diastolic"]?>"/> <span class="error"><?=$errors["diastolic"]?></span><br/>
        Does the patient smoke? <input name="smoker" type="checkbox" value="<?=$postData["smoker"]?>"/> <br/>
        Is the patient on medication? <input name="meds" type="checkbox" value="<?=$postData["meds"]?>"/> <br/>
        Does the patient have diabetes? <input name="diabetes" type="checkbox" value="<?=$postData["diabetes"]?>"/><br/>

        <input type="submit" class="btn" value="Calculate Risk"/>
    </form>
</div>   <!--End form -->