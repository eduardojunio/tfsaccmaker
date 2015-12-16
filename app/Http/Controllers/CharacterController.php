<?php

namespace App\Http\Controllers;

use App\Character;
use App\Classes\TimeHandler;
use App\Http\Controllers\Controller;
use App\Repositories\CharacterRepository;
use Carbon\Carbon;
use Config;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * CharacterRepository instance.
     * @var CharacterRepository
     */
    protected $characterRepository;

    /**
     * New characters will choose the vocation or start at level 1 without?
     * Change that on config/accmaker.php.
     *
     */
    protected $newCharacterWithVocation;

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

    /**
     * New character with vocation options.
     *
     */
    protected $newCharacterCapacity;
    protected $newCharacterExperience;
    protected $newCharacterGroupId;
    protected $newCharacterHealth;
    protected $newCharacterHealthmax;
    protected $newCharacterLevel;
    protected $newCharacterLookbody;
    protected $newCharacterLookfeet;
    protected $newCharacterLookhead;
    protected $newCharacterLooklegs;
    protected $newCharacterLooktype;
    protected $newCharacterMana;
    protected $newCharacterManamax;
    protected $newCharacterSave;
    protected $newCharacterSkillAxe;
    protected $newCharacterSkillAxeTries;
    protected $newCharacterSkillClub;
    protected $newCharacterSkillClubTries;
    protected $newCharacterSkillDist;
    protected $newCharacterSkillDistTries;
    protected $newCharacterSkillFishing;
    protected $newCharacterSkillFishingTries;
    protected $newCharacterSkillFist;
    protected $newCharacterSkillFistTries;
    protected $newCharacterSkillShielding;
    protected $newCharacterSkillShieldingTries;
    protected $newCharacterSkillSword;
    protected $newCharacterSkillSwordTries;
    protected $newCharacterSoul;
    protected $newCharacterStamina;
    protected $newCharacterTown;

    public function __construct(CharacterRepository $characterRepository)
    {
        $this->middleware('auth', ['except' => ['getView']]);

        $this->characterRepository = $characterRepository;

        $this->deletionDays = Config::get('accmaker.deletionDays');
        $this->maxCharacters = Config::get('accmaker.maxCharacters');
        $this->newCharacterCapacity = Config::get('accmaker.newCharacterCapacity');
        $this->newCharacterExperience = Config::get('accmaker.newCharacterExperience');
        $this->newCharacterGroupId = Config::get('accmaker.newCharacterGroupId');
        $this->newCharacterHealth = Config::get('accmaker.newCharacterHealth');
        $this->newCharacterHealthmax = Config::get('accmaker.newCharacterHealthmax');
        $this->newCharacterLevel = Config::get('accmaker.newCharacterLevel');
        $this->newCharacterLookbody = Config::get('accmaker.newCharacterLookbody');
        $this->newCharacterLookfeet = Config::get('accmaker.newCharacterLookfeet');
        $this->newCharacterLookhead = Config::get('accmaker.newCharacterLookhead');
        $this->newCharacterLooklegs = Config::get('accmaker.newCharacterLooklegs');
        $this->newCharacterLooktype = Config::get('accmaker.newCharacterLooktype');
        $this->newCharacterMana = Config::get('accmaker.newCharacterMana');
        $this->newCharacterManamax = Config::get('accmaker.newCharacterManamax');
        $this->newCharacterSave = Config::get('accmaker.newCharacterSave');
        $this->newCharacterSkillAxe = Config::get('accmaker.newCharacterSkillAxe');
        $this->newCharacterSkillAxeTries = Config::get('accmaker.newCharacterSkillAxeTries');
        $this->newCharacterSkillClub = Config::get('accmaker.newCharacterSkillClub');
        $this->newCharacterSkillClubTries = Config::get('accmaker.newCharacterSkillClubTries');
        $this->newCharacterSkillDist = Config::get('accmaker.newCharacterSkillDist');
        $this->newCharacterSkillDistTries = Config::get('accmaker.newCharacterSkillDistTries');
        $this->newCharacterSkillFishing = Config::get('accmaker.newCharacterSkillFishing');
        $this->newCharacterSkillFishingTries = Config::get('accmaker.newCharacterSkillFishingTries');
        $this->newCharacterSkillFist = Config::get('accmaker.newCharacterSkillFist');
        $this->newCharacterSkillFistTries = Config::get('accmaker.newCharacterSkillFistTries');
        $this->newCharacterSkillShielding = Config::get('accmaker.newCharacterSkillShielding');
        $this->newCharacterSkillShieldingTries = Config::get('accmaker.newCharacterSkillShieldingTries');
        $this->newCharacterSkillSword = Config::get('accmaker.newCharacterSkillSword');
        $this->newCharacterSkillSwordTries = Config::get('accmaker.newCharacterSkillSwordTries');
        $this->newCharacterSoul = Config::get('accmaker.newCharacterSoul');
        $this->newCharacterStamina = Config::get('accmaker.newCharacterStamina');
        $this->newCharacterTown = Config::get('accmaker.newCharacterTown');
        $this->newCharacterWithVocation = Config::get('accmaker.newCharacterWithVocation');
    }

    public function getView($name = '')
    {
        $character = Character::where('name', $name)->get()->first();

        if ($character === null) {
            abort(404);
        }

        if ($character->lastlogin != 0) {
            $character->lastlogin = Carbon::createFromTimestamp($character->lastlogin)->diffForHumans(Carbon::now());
        }

        $timehandler = new TimeHandler;
        $character->onlinetime = $timehandler->secondsToTime($character->onlinetime);

        $towns = Config::get('accmaker.towns');

        return view('pages.character', compact('character', 'towns'));
    }

    public function getNew()
    {
        $newCharacterWithVocation = $this->newCharacterWithVocation;

        return view('pages.new-character', compact('newCharacterWithVocation'));
    }

    public function postNew(Request $request)
    {
        if ($this->maxCharacters != 0) {
            if (count($request->user()->characters()->get()) >= $this->maxCharacters) {
                return redirect('/account')->withErrors([
                    'You can\'t create more than ' . $this->maxCharacters . ' characters.',
                ]);
            }
        }

        if ($this->newCharacterWithVocation) {
            $this->validate($request, [
                'name' => 'required|min:3|max:20|unique:players',
                'sex' => 'required|digits_between:0,1',
                'vocation' => 'required|digits_between:1,4',
            ]);

            $request->user()->characters()->create([
                'account_id' => $request->user()->id,
                'cap' => $this->newCharacterCapacity,
                'experience' => $this->newCharacterExperience,
                'group_id' => $this->newCharacterGroupId,
                'health' => $this->newCharacterHealth,
                'healthmax' => $this->newCharacterHealthmax,
                'level' => $this->newCharacterLevel,
                'lookbody' => $this->newCharacterLookbody,
                'lookfeet' => $this->newCharacterLookfeet,
                'lookhead' => $this->newCharacterLookhead,
                'looklegs' => $this->newCharacterLooklegs,
                'looktype' => $this->newCharacterLooktype,
                'mana' => $this->newCharacterMana,
                'manamax' => $this->newCharacterManamax,
                'name' => $request->name,
                'save' => $this->newCharacterSave,
                'sex' => $request->sex,
                'skill_axe' => $this->newCharacterSkillAxe,
                'skill_axe_tries' => $this->newCharacterSkillAxeTries,
                'skill_club' => $this->newCharacterSkillClub,
                'skill_club_tries' => $this->newCharacterSkillClubTries,
                'skill_dist' => $this->newCharacterSkillDist,
                'skill_dist_tries' => $this->newCharacterSkillDistTries,
                'skill_fishing' => $this->newCharacterSkillFishing,
                'skill_fishing_tries' => $this->newCharacterSkillFishingTries,
                'skill_fist' => $this->newCharacterSkillFist,
                'skill_fist_tries' => $this->newCharacterSkillFistTries,
                'skill_shielding' => $this->newCharacterSkillShielding,
                'skill_shielding_tries' => $this->newCharacterSkillShieldingTries,
                'skill_sword' => $this->newCharacterSkillSword,
                'skill_sword_tries' => $this->newCharacterSkillSwordTries,
                'soul' => $this->newCharacterSoul,
                'stamina' => $this->newCharacterStamina,
                'town_id' => $this->newCharacterTown,
                'vocation' => $request->vocation,
            ]);

            return redirect('/account');
        } else {
            $this->validate($request, [
                'name' => 'required|min:3|max:20|unique:players',
                'sex' => 'required|digits_between:0,1',
            ]);

            $request->user()->characters()->create([
                'account_id' => $request->user()->id,
                'cap' => $this->newCharacterCapacity,
                'group_id' => $this->newCharacterGroupId,
                'name' => $request->name,
                'save' => $this->newCharacterSave,
                'sex' => $request->sex,
                'stamina' => $this->newCharacterStamina,
                'town_id' => $this->newCharacterTown,
            ]);

            return redirect('/account');
        }
    }

    public function getDelete(Request $request, $name)
    {
        $character = Character::where('name', $name)->where('deletion', 0)->get()->first();

        if ($this->characterRepository->isOnline($character)) {
            return redirect('/account')->withErrors([
                'You can\'t delete an online character.',
            ]);
        }

        if ($request->user()->can('manage', $character)) {
            $character->deletion = 1;
            $character->can_delete = Carbon::now()->addDays($this->deletionDays)->toDateTimeString(); // TODO: Put this in a configuration file.
            $character->save();

            return redirect('/account');
        }

        return redirect('/account')->withErrors([
            'You can\'t delete that character.',
        ]);
    }

    public function getEdit(Request $request, $name)
    {
        $character = Character::where('name', $name)->get()->first();

        if ($request->user()->can('manage', $character)) {
            return view('pages.edit-character', compact('character'));
        }

        return redirect('/account')->withErrors([
            'You can\'t edit that character.',
        ]);
    }

    public function postEdit(Request $request)
    {
        $this->validate($request, [
            'comment' => 'max:300',
        ]);

        $character = Character::where('name', $request->character)->get()->first();

        if ($request->user()->can('manage', $character)) {
            $character->comment = $request->comment;
            $character->save();

            return redirect('/account')->with(
                'status',
                '<b>Success!</b> Information for character ' . $request->character . ' has been updated.'
            );
        }

        return redirect('/account')->withErrors(['You can\'t edit that character.']);
    }

    public function getHide(Request $request, $name)
    {
        $character = Character::where('name', $name)->get()->first();

        if ($request->user()->can('manage', $character)) {
            $character->hide = 1;
            $character->save();

            return redirect('/account');
        }

        return redirect('/account')->withErrors(['You can\'t hide that character.']);
    }

    public function getUnhide(Request $request, $name)
    {
        $character = Character::where('name', $name)->get()->first();

        if ($request->user()->can('manage', $character)) {
            $character->hide = 0;
            $character->save();

            return redirect('/account');
        }

        return redirect('/account')->withErrors([
            'You can\'t unhide that character.',
        ]);
    }

    public function getDeletePermanently(Request $request, $name)
    {
        $character = Character::where('name', $name)->where('deletion', 1)->get()->first();
        $canDelete = Carbon::parse($character->can_delete);

        if ($this->characterRepository->isOnline($character)) {
            return redirect('/account')->withErrors([
                'You can\'t delete permanently an online character.',
            ]);
        }

        if ($request->user()->can('manage', $character) && Carbon::now()->gte($canDelete)) {
            $character->delete();

            return redirect('/account');
        }

        return redirect('/account')->withErrors([
            'You can\'t delete permanently that character.',
        ]);
    }

    public function getRestore(Request $request, $name)
    {
        $character = Character::where('name', $name)->where('deletion', 1)->get()->first();

        if ($request->user()->can('manage', $character)) {
            $character->deletion = 0;
            $character->save();

            return redirect('/account');
        }

        return redirect('/account')->withErrors([
            'You can\'t restore that character.',
        ]);
    }
}
