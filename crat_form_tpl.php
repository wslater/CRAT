<?php
global $view;
?>

<form id="cratForm" name="cratForm" method="post">
    Name: <input name="name" type="text" value="<?=$this->postData["name"]?>"/> <br/> <p color="red"><?=$this->errors["name"]?></p>
    Age: <input name="age" type="text" value="<?=$this->postData["age"]?>"/><br/>
    Gender:  Male <input name="gender" type="radio" value="Male"/>     Female <input name="gender" type="radio" value="Female"/><br/>
    LDL-C: <input name="ldlc" type="text" value="<?=$this->postData["ldlc"]?>"/><br/>
    HDL-C: <input name="hdlc" type="text" value="<?=$this->postData["hdlc"]?>"/><br/>
    Total Cholesterol: <input name="totalchol" type="text" value="<?=$this->postData["totalchol"]?>"/><br/>
    Systolic Blood Pressure: <input name="systolic" type="text" value="<?=$this->postData["systolic"]?>" /><br/>
    Diastolic Blood Pressure: <input name="diastolic" type="text" value="<?=$this->postData["diastolic"]?>"/><br/>
    Does the patient smoke? <input name="smoker" type="checkbox" value="<?=$this->postData["smoker"]?>"/><br/>
    Is the patient on medication? <input name="meds" type="checkbox" value="<?=$this->postData["meds"]?>"/><br/>
    Does the patient have diabetes? <input name="diabetes" type="checkbox" value="<?=$this->postData["diabetes"]?>"/><br/>

    <input type="submit" name="submitCRATForm" value="Calculate Risk" />


</form>

