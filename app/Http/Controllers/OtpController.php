<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Otp;
use Carbon\Carbon;

class OtpController extends Controller
{
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        // Generate OTP
        $otp = rand(100000, 999999);

        // Store in DB
        Otp::create([
            'email' => $request->email,
            'otp' => $otp,
            'expires_at' => Carbon::now()->addMinutes(5)
        ]);

        // Send Mail
        Mail::to($request->email)->send(new OtpMail($otp));

        return response()->json(['message' => 'OTP sent successfully!']);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required'
        ]);

        $otpData = Otp::where('email', $request->email)
                      ->where('otp', $request->otp)
                      ->where('expires_at', '>', Carbon::now())
                      ->first();

        if ($otpData) {
            return response()->json(['message' => 'OTP verified successfully!']);
        }

        return response()->json(['message' => 'Invalid or expired OTP.'], 400);
    }
}

