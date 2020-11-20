<?php

class qa_html_theme_layer extends qa_html_theme_base
{

// Removes checkbox from answers
public function a_form($form) {
    if ($this->template === 'question') {
        unset($form['fields']['notify']);
    }
    parent::a_form($form);
}

// Removes checkbox from comments
public function c_form($form) {
    if ($this->template === 'question') {
        unset($form['fields']['notify']);
    }
    parent::c_form($form);
}

// Removes checkbox from ask form
public function initialize() {
    if ($this->template === 'ask') {
        unset($this->content['form']['fields']['notify']);
    }
    parent::initialize();
}


} //end of ends
