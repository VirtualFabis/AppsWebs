<?php

class User extends ActiveRecord
{
 
    public function saveWithPhoto($data)
    {
        //Inicia la transacción
        $this->begin();
        //Intenta crear el usuario con los datos pasados
        if ($this->create($data)) {
            //Intenta subir y actualizar la foto
            if ($this->updatePhoto()) {
                //Se confirma la transacción
                $this->commit();
                return true;
            }
        }

        //Si algo falla se regresa la transacción
        $this->rollback();
        return false;
    }


    public function updatePhoto()
    {
        //Intenta subir la foto que viene en el campo 'photo'
        if ($photo = $this->uploadPhoto('photo')) {
            //Modifica el campo photo del usuario y lo intenta actualizar
            $this->photo = $photo;
            return $this->update();
        }
    }

  
    public function uploadPhoto($imageField)
    {
        //Usamos el adapter 'image'
        $file = Upload::factory($imageField, 'image');
        //le asignamos las extensiones a permitir
        $file->setExtensions(array('jpg', 'png', 'gif', 'jpeg'));
        //Intenta subir el archivo
        if ($file->isUploaded()) {
            //Lo guarda usando un nombre de archivo aleatorio y lo retorna.
            return $file->saveRandom();
        }
        //Si falla al subir
        return false;
    }
}