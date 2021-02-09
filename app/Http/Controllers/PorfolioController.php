<?php

namespace App\Http\Controllers;//poner esto no es nesesario por que laravel ya sabe que los controladores estan ahi

use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $portfolioI = [
            ['title' => 'proyecto #1'],
            ['title' => 'proyecto #2'],
            ['title' => 'proyecto #3'],
            ['title' => 'proyecto #4'],
            ['title' => 'proyecto #5']
        ];

        return view('portfolio', compact('portfolioI'));
    }
}
