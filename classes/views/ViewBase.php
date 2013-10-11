<?php

class ViewBase
{

    public function renderHeader() {
        $this->renderTemplate(CRAT_TEMPLATES."header_tpl.php");
    }

    public function renderFooter() {
        $this->renderTemplate(CRAT_TEMPLATES."footer_tpl.php");
    }

    protected function renderPage($template) {
        $this->renderHeader();
        $this->renderTemplate($template);
        $this->renderFooter();
    }

    protected function renderTemplate($template) {

        global $view;
        $view = $this;
        include($template);
    }

    public function getTitle() {
        return "Cardiac Risk Assessment Tool";
    }
}


