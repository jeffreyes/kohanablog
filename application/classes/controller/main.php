<?php

class Controller_Main extends Controller {

    protected $template = 'template';

    public function before()
    {
        parent::before();
        $this->template = View::factory( $this->template );
    }

    public function after()
    {
        $this->response->body( $this->template->render() );
        parent::after();
    }

};