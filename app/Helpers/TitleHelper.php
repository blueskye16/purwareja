<?php
// app/Helpers/TitleHelper.php

namespace App\Helpers;

use Illuminate\Http\Request;

class TitleHelper
{
    public static function getTitle(Request $request)
    {
        $routeName = $request->route()->getName();

        switch ($routeName) {
            case '/posts':
                return 'Kumpulan Postingan';
            case '/':
                return 'Postingan Terbaru';
            default:
                return 'Default Title';
        // switch ($routeName) {
        //     case 'posts.index':
        //         return 'Kumpulan Postingan';
        //     case 'home':
        //         return 'Postingan Terbaru';
        //     default:
        //         return 'Default Title';
        }
    }
}