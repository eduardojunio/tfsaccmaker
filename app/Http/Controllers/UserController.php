<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Carbon\Carbon;
use Config;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Max characters that the player can create.
     *
     */
    protected $maxCharacters;

    /**
     * Days to pending deletion before the character could be deleted
     * permanently.
     *
     */
    protected $deletionDays;

    public function __construct()
    {
        $this->middleware('auth');
        $this->maxCharacters = Config::get('accmaker.maxCharacters');
        $this->deletionDays = Config::get('accmaker.deletionDays');
    }

    public function getIndex(Request $request)
    {
        $characters = $request->user()->characters;
        $startNumber = 1;
        $now = new Carbon;
        $maxCharacters = $this->maxCharacters;
        $deletionDays = $this->deletionDays;

        return view('pages.account', compact(
            'characters',
            'startNumber',
            'now',
            'maxCharacters',
            'deletionDays'
        ));
    }

    public function getResetPassword()
    {
        return view('pages.reset');
    }

    public function postResetPassword(Request $request)
    {
        $this->validate($request, [
            'oldPassword' => 'required',
            'newPassword' => 'required|confirmed|min:6|max:50',
        ]);

        $name = $request->user()->name;
        $password = $request->oldPassword;
        $newPassword = Hash::make($request->newPassword);

        if (Auth::attempt(['name' => $name, 'password' => $password])) {
            $sql = User::where('name', $name)->update(['password' => $newPassword]);

            if ($sql) {
                return redirect('account');
            } else {
                return redirect()->back()->withErrors(['Error.']);
            }
        } else {
            return redirect()->back()->withErrors(['Old password is incorrect.']);
        }
    }
}
