<?php

namespace App\Http\Controllers\Admin_Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!Auth::guard('admin')->attempt(['email' => Auth::guard('admin')->user()->email, 'password' => $value])) {
                        $fail(__('The current password is incorrect.'));
                    }
                },
            ],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
        
        $admin = Auth::guard('admin')->user();
        $admin->password = Hash::make($validated['password']);
        $admin->save();
        
        return back()->with('status', 'password-updated');
    }
}