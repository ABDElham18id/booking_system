<?php

namespace App\Http\Controllers;
use App\Jobs\SendBookingEmailJob;


dispatch(new SendBookingEmailJob($booking));
abstract class Controller
{


}
