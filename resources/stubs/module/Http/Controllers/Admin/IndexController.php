<?php

namespace App\Modules\DummyName\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\DummyName\Models\DummyName;


class IndexController extends Admin
{
	 /**
     * Тут должен быть slug модуля для выделения станицы в меню. 
     * Также по этому параметру будет происходить поиск страницы к которой привязан модуль. 
     */
    public $module = 'DummySlug';
    /* Тут должен быть slug группы для правильной работы меню */
    public $pageGroup = 'modules';
    /* Отображать кнопку "Страница записи" на странице редактирования */
    protected $frontLink = false;
	
    public function getModel(){
        return new DummyName();
    }

    public function getRules($request, $id = false)
    {
        return  [];
    }
}
