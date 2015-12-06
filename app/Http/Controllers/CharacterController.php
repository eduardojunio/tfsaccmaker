<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getNew()
    {
        return view('pages.new-character');
    }

    public function postNew(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'sex' => 'required|digits_between:0,1',
        ]);

        $request->user()->characters()->create([
            'name' => $request->name,
            'sex' => $request->sex,
            'account_id' => $request->user()->id,
            'cap' => 450, // TODO: Put this in a configuration file.
            'town_id' => 1, // TODO: Put this in a configuration file.
        ]);

        return redirect('/account');
    }

    public function getDelete(Request $request, $id)
    {
        $character = \App\Character::findOrFail($id);

        if ($request->user()->can('delete', $character)) {
            $character->delete();

            return redirect('/account');
        }

        return redirect('/account')->withErrors(['You can\'t delete that character.']);
    }
}
