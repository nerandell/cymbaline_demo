<?php

use Cymbaline\Controller;

class UserController extends Controller
{
    public function test_custom_route($id)
    {
        $user = call_user_func(array($this->_model, 'find'), $id);
        $this->renderView('index.html', array('name'=>$user->name));
    }
}