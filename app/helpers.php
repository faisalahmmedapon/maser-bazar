<?php

use App\Models\Doctor;
use App\Models\Setting;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
if (!function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (!function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     */
    function gravatar()
    {
        return app('gravatar');
    }
}

if (!function_exists('user_redirect_by_role')) {

    function user_redirect_by_role()
    {
        if (!Auth::user()->hasRole("user")) {
            return view('backend.dashboard.dashboard');
        } else {
            if (Auth::user()->status == 'inactive'){
                Auth::guard('web')->logout();
                $notification = array(
                    'message' => 'We are sorry to inform you that your account is suspend,Please contact with customer care!',
                    'alert-type' => 'warning'
                );
                return redirect('/')->with($notification);
            }else{
                return redirect('/');
            }
        }
    }
}


if (!function_exists('password_hash_make')) {
    function password_hash_make($password)
    {
        return Hash::make($password);
    }
}


if (!file_exists('get_data_by_key')) {
    function get_data_by_key($get_data_by_key)
    {
        return Setting::where('key', $get_data_by_key)->select('value')->pluck('value')->first();

    }
}



if (!file_exists('age')) {

    function age($age)
    {
        return Carbon::parse($age)->age;
    }
}


if (!file_exists('data_time_to_date')){
    function data_time_to_date($data_time_to_date)
    {
       return $data_time_to_date->format('d/m/Y');
    }

}


//function today($format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    return Carbon::today()->format($format);
//}
//
//function tomorrow($format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    return Carbon::tomorrow()->format($format);
//}
//
//function yesterday($format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    return Carbon::yesterday()->format($format);
//}
//
//function nextDay($datetime=null, $day, $format=null)
//{
//    $day = strtoupper($day);
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    $days = ['SUNDAY' => Carbon::SUNDAY, 'MONDAY' => Carbon::MONDAY, 'TUESDAY' => Carbon::TUESDAY, 'WEDNESDAY' => Carbon::WEDNESDAY, 'THURSDAY' => Carbon::THURSDAY, 'FRIDAY' => Carbon::FRIDAY, 'SATURDAY' => Carbon::SATURDAY];
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->next($days[$day])->format($format);
//}
//
//function dayOfWeek($datetime=null)
//{
//    $days = ['Sunday','Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return $days[Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->dayOfWeek];
//}
//
//function ukDate($datetime=null, $timestamp=false)
//{
//    $datetime = $datetime ? $datetime:Carbon::now();
//    $timestamp = $timestamp ? 'd/m/Y H:ia':'d/m/Y';
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->format($timestamp);
//}
//
//function ukDateToDate($datetime=null, $timestamp=false)
//{
//    $datetime = $datetime ? $datetime:Carbon::now();
//    $format = $timestamp ? 'd/m/Y H:i:s':'d/m/Y';
//    $timestamp = $timestamp ? 'Y-m-d H:i:s':'Y-m-d';
//    return Carbon::createFromFormat($format, $datetime)->format($timestamp);
//}
//
//function humanDate($datetime)
//{
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->diffForHumans();
//}
//
//function age($datetime)
//{
//    return Carbon::createFromFormat('Y-m-d', $datetime)->age;
//}
//
//function weekend($datetime=null)
//{
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->isWeekend();
//}
//
//function diffInDays($datetime)
//{
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->diffInDays();
//}
//
//function addYears($datetime=null, $years, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->addYears($years)->format($format);
//}
//
//function addMonths($datetime=null, $months, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->addMonths($months)->format($format);
//}
//
//function addWeeks($datetime=null, $weeks, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->addWeeks($weeks)->format($format);
//}
//
//function addDays($datetime=null, $days, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->addDays($days)->format($format);
//}
//
//function startOfDay($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfDay()->format($format);
//}
//
//function endOfDay($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfDay()->format($format);
//}
//
//function startOfWeek($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfWeek()->format($format);
//}
//
//function endOfWeek($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfWeek()->format($format);
//}
//
//function startOfMonth($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfMonth()->format($format);
//}
//
//function endOfMonth($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfMonth()->format($format);
//}
//
//function startOfYear($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfYear()->format($format);
//}
//
//function endOfYear($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfYear()->format($format);
//}
//
//function startOfDecade($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfDecade()->format($format);
//}
//
//function endOfDecade($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfDecade()->format($format);
//}
//
//function startOfCentury($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfCentury()->format($format);
//}
//
//function endOfCentury($datetime=null, $format=null)
//{
//    $format = $format ? $format:'Y-m-d H:i:s';
//    $datetime = $datetime ? $datetime:Carbon::now();
//    return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfCentury()->format($format);
//}
