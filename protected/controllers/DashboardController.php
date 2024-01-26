<?php

class DashboardController extends Controller
{

    public $pageTitle = 'This is the page title';

    public function actionHome()
    {
        $emails = ['test@gmail.com', 'johndoe@gmail.com'];
        $this->render('view', ['emails' => $emails]);
    }

    public function message($msg)
    {
        return $msg;
    }
}
