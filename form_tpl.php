<?php
global $view;
?>

<style>
    .error {
        color:red;
    }
</style>

<form id="cratForm" name="cratForm" method="post">
    Name: <input name="name" type="text" value="<?=$this->postData["name"]?>"/> <span class="error"> <?=$this->errors["name"]?></span><br/>
    Age: <input name="age" type="text" value="<?=$this->postData["age"]?>"/> <span class="error"> <?=$this->errors["age"]?></span><br/>
    Gender:  Male <input name="gender" type="radio" value="Male"/>     Female <input name="gender" type="radio" value="Female"/> <span class="error"> <?=$this->errors["gender"]?></span><br/>
    LDL-C: <input name="ldlc" type="text" value="<?=$this->postData["ldlc"]?>"/><span class="error"> <?=$this->errors["ldlc"]?></span><br/>
    HDL-C: <input name="hdlc" type="text" value="<?=$this->postData["hdlc"]?>"/><span class="error"> <?=$this->errors["hdlc"]?></span><br/>
    Total Cholesterol: <input name="totalchol" type="text" value="<?=$this->postData["totalchol"]?>"/> <span class="error"><?=$this->errors["totalchol"]?></span><br/>
    Systolic Blood Pressure: <input name="systolic" type="text" value="<?=$this->postData["systolic"]?>" /> <span class="error"><?=$this->errors["systolic"]?></span><br/>
    Diastolic Blood Pressure: <input name="diastolic" type="text" value="<?=$this->postData["diastolic"]?>"/> <span class="error"><?=$this->errors["diastolic"]?></span><br/>
    Does the patient smoke? <input name="smoker" type="checkbox" value="<?=$this->postData["smoker"]?>"/> <br/>
    Is the patient on medication? <input name="meds" type="checkbox" value="<?=$this->postData["meds"]?>"/> <br/>
    Does the patient have diabetes? <input name="diabetes" type="checkbox" value="<?=$this->postData["diabetes"]?>"/><br/>

    <input type="submit" name="submitCRATForm" value="Calculate Risk" />


</form>

