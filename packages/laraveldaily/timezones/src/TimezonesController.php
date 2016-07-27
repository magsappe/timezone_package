<?php
namespace Laraveldaily\Timezones;
 
use App\Http\Controllers\Controller;
use Carbon\Carbon;
 
class TimezonesController extends Controller
{
 
/*    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }
*/ 
public function index($timezone = NULL)
    {
        $time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        echo $time->toDateTimeString();
    }}
?>