<?php
/**
 * Created by PhpStorm.
 * User: SErega-DaniLa
 * Date: 19.11.2018
 * Time: 21:29
 */

namespace App\Interfaces;


interface FrontendRepositoryInterface
{
public function getObjectsForMainPage();

public  function  getObject($id);
}