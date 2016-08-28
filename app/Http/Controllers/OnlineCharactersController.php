<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\CharacterRepository;

class OnlineCharactersController extends Controller
{
    protected $characterRepository;

    public function __construct(CharacterRepository $characterRepository)
    {
        $this->characterRepository = $characterRepository;
    }

    public function getIndex()
    {
        $online = $this->characterRepository->online();
        $characterRepository = $this->characterRepository;

        return view('pages.online', compact('online', 'characterRepository'));
    }
}
