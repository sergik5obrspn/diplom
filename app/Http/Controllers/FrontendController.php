<?php

namespace App\Http\Controllers;

use App\Repositories\FrontendRepository;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function __construct(FrontendRepository $frontendRepository)
    {
        $this->fR = $frontendRepository;
    }

    public function index(){
        $objects = $this->fR->getObjectsForMainPage();
        return view('frontend.index',['objects'=>$objects]);
    }

    public function article(){
        return view('frontend.article');
    }
    public function object($id){
        $object = $this->fR->getObject($id);
        dd($object);
        return view('frontend.object');
    }
    public function person(){
        return view('frontend.person');
    }
    public function room(){
        return view('frontend.room');
    }
    public function roomsearch(){
        return view('frontend.roomsearch');
    }
}
