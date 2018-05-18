<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 5/18/2018
 * Time: 9:12 AM
 */

namespace App\Http\Controllers;


use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    function getPage($slug = null)
    {
        $page = Page::query()->where(["slug" => $slug, "status" => "ACTIVE"])->first();
        return view("page", ["page" => $page]);
    }
}