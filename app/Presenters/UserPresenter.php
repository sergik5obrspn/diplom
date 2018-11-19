<?php
/**
 * Created by PhpStorm.
 * User: SErega-DaniLa
 * Date: 19.11.2018
 * Time: 23:25
 */

namespace App\Presenters;


trait UserPresenter{
    public function getFullNameAttribute()
    {
        return $this->name . '' . $this->surname;
    }
}