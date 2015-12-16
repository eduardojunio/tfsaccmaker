<?php

namespace App\Http\ViewComposers;

use App\Repositories\CharacterRepository;
use Illuminate\Contracts\View\View;

class PartialsSidebarComposer
{
    protected $characterRepository;

    public function __construct(CharacterRepository $characterRepository)
    {
        $this->characterRepository = $characterRepository;
    }

    public function compose(View $view)
    {
        $online = $this->characterRepository->online();
        $topFive = $this->characterRepository->topFive();
        $pos = 1;

        $view->with(compact('online', 'topFive', 'pos'));
    }
}
