<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    public function addCoupon(Request $request)
    {
        $checkCoupon = Coupon::where('code', $request->code)->exists();
        if($checkCoupon) {
            $check = Auth::user()->whereHas('coupons', function ($q) use ($request) {
                $q->where('code', $request->code);
            })->exists();
            if (!$check) {
                $coupon = Coupon::where('code', $request->code)->first();
                $cart = Session::has('cart') ? Session::get('cart') : null;
                $cart = new Cart($cart);
                $cart->addCoupon($coupon);
                $request->session()->put('cart', $cart);

                $user = Auth::user();
                $user->coupons()->attach($coupon->id);
                $user->save();

                return back();
            } else {
                Session::flash('error', 'شما قبلا از این کد تخفیف استفاده کرده اید');
                return back();
            }
        }else{
            Session::flash('error','کدتخفیف معتبر نیست');
            return back();
        }
    }
}
