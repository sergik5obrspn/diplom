<?php
/**
 * Created by PhpStorm.
 * User: SErega-DaniLa
 * Date: 19.11.2018
 * Time: 21:18
 */

namespace App\Repositories;


use App\Interfaces\FrontendRepositoryInterface;
use App\TouristObject;

class FrontendRepository implements FrontendRepositoryInterface
{
public function getObjectsForMainPage()
{
    //return TouristObject::all();
    return TouristObject::with(['city','photos'])->ordered()->paginate(8);
}
    public function getObject($id)
    {
    return TouristObject::find($id);
    }
}