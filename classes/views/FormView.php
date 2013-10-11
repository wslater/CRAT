<?php
require_once('ViewBase.php');

class FormView extends ViewBase {

    private $errors;
    private $postData;

    public function render() {
        $this->renderPage(CRAT_TEMPLATES.'form_tpl.php');
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getPostData()
    {
        return $this->postData;
    }

    public function setPostData($postData)
    {
        $this->postData = $postData;
    }


}
?>