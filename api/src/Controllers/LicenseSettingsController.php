<?php
namespace Techsoft\Api\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LicenseSettingsController extends Controller
{
    public function license_deactivate(Request $request)
    {
        update_static_option('item_license_status', 'verified');
        update_static_option('item_license_msg', 'your license has been deactivated at'.date('D, d F Y'));
        return response()->json('ok');
    }
}