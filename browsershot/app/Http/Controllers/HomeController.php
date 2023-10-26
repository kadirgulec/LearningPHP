<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class HomeController extends Controller
{

    public function index()
    {
        return view('print');
    }
    public function print()
    {
        // Browsershot::html("<h1>Hello Browsershot</h1><h1>Hello Browsershot</h1><h1>Hello Browsershot</h1><h1>Hello Browsershot</h1>")
        // ->noSandbox()
        // // ->setNodeBinary('/usr/local/bin/node')
        // ->pdf() ;


        // return Browsershot::url('https://kadirguelec.de')->bodyHtml();

        // $footerHtml = view('components.footer')->render();

        $footerHtml= view('pagenr')->render();
        $headerHtml= view('pageHeader')->render();

        Browsershot::html(view('print'))
        // ->noSandbox()
        ->waitUntilNetworkIdle(false)
        ->showBrowserHeaderAndFooter()
        ->headerHtml($headerHtml)
        ->footerHtml($footerHtml)
        ->initialPageNumber(1)
        ->showBackground()
        ->format('A4')
        ->margins(20,5,25,5)
        ->savePdf('/home/gulec/Downloads/example.pdf');

        return view('print');
    }
}
