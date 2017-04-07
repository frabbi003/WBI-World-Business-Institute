<?php

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use app\ResearchLogo;

function createLogo($data)
{
    ResearchLogo::truncate();
    // Now create a New One
    ResearchLogo::create($data);

    return true;
}