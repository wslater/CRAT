<?php


class CRATFormView {

    private $errors;
    private $postData;

    public function render() {
        global $view;
        $view = $this;
        include('crat_form_tpl.php');
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