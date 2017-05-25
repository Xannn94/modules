<?php

namespace App\Modules\DummyName\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\DummyName\Models\DummyName;


class IndexController extends Admin
{

	 /* тут должен быть slug модуля для правильной работы меню */
    public $page = 'DummySlug';
    /* тут должен быть slug группы для правильной работы меню */
    public $pageGroup = 'modules';
	
    public function getModel(){
        return new DummyName();
    }

    public function getRules($request, $id = false)
    {
        return  [];

    }





}
