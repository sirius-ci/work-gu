<?php

use Admin\Controllers\AdminController;

class WorkAdminController extends AdminController
{
    public $moduleTitle = 'İşler';
    public $module = 'work';
    public $model = 'work';
    public $icon = 'fa-briefcase';


    // Arama yapılacak kolonlar.
    public $search = array('title');


    public $actions = array(
        'records' => 'list',
        'insert' => 'insert',
        'update' => 'update',
        'delete' => 'delete',
        'order' => 'list',
    );


    public function records()
    {
        parent::records();
        $this->render('records');
    }


    public function insert()
    {
        parent::insert();
        $this->render('insert');
    }

    public function validationAfter($action, $record = null)
    {
        if ($action === 'insert') {
            $this->image->required();
        } else {
            $this->image->setDefaultImage($record->image);
        }

        $this->image->setMinSizes(240, 180)->addProcess('work', ['thumbnail' => [240, 180]]);
        $this->modelData['image'] = $this->image->save();
    }

    public function update()
    {
        parent::update();
        $this->render('update');
    }

    public function delete()
    {
        parent::delete();
    }

    public function order()
    {
        parent::order();
    }


}