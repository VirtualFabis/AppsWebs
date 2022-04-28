<?php

class UserController extends AppController
{

    public function index()
    {
        $this->data = (new User)->find();
    }
    public function create()
    {
        //se verifica si se ha enviado via POST los datos
        if (Input::hasPost('user')) {
            $obj = new User;
            //En caso que falle la operación de guardar
            if ($obj->saveWithPhoto(Input::post('user'))) {
                //Mensaje de éxito y retorna al listado
                Flash::valid('Usuario creado');
                return Redirect::to();
            }
            //Si falla se hacen persistentes los datos en el formulario
            $this->data = Input::post('user');
            return;
        }
    }
}

 