<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class DeviceController extends Controller
{
    public function detectDevice()
    {
        $agent = new Agent();

        $mobileDevice = $agent->isMobile();
        if ($mobileDevice) {
            return view('mobile');
        }

        $tabletDevice = $agent->isTablet();
        if ($tabletDevice) {
            return view('tablet');
        }

        $desktopDevice = $agent->isDesktop();
        if ($desktopDevice) {
            return view('welcome');
        }
    }
}
