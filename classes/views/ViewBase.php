<?php

class ViewBase
{

    public function renderHeader() {

    }

    public function renderFooter() {

    }

    protected function renderTemplate($template) {

        global $view;
        $view = $this;
        include_once($template);
    }
}


