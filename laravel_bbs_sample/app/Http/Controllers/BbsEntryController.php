<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;
use App\BbsEntry;

use function GuzzleHttp\Promise\all;

class BbsEntryController extends Controller
{
    function index()
    {
        dd(BbsEntry: all());
    }

    function create()
    {
        echo "create";
    }
}
