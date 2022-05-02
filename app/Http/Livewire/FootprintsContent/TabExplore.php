<?php

namespace App\Http\Livewire\FootprintsContent;

use App\Models\Company;
use Livewire\Component;
use Illuminate\Support\Collection;

use Livewire\WithPagination;

use App\Models\UsersFootprint;
//use App\Models\Post;

use Illuminate\Support\Facades\Auth;


class TabExplore extends Component
{

    //use WithPagination;


    public $footprints;
    //public $companies;

    public $pageNumber = 1;
    
    public $hasMorePages;


    public function mount() {
        $this->footprints = new Collection();
        //$this->companies = new Collection();
        //$this->companies = [];

        $this->loadFootprints();
    }

    public function loadFootprints() {
        //$footprints = UsersFootprint::paginate(5, ['*'], 'page', $this->pageNumber);
        $footprints = auth()->user()->footprints()->orderBy('created_at','desc')->paginate(5, ['*'], 'page', $this->pageNumber);
        
        foreach ($footprints as $footprint) {
          $footprint->company;
        }

        // foreach ($footprints as $footprint) {
        //     array_push($this->companies, $footprint->company);
        // }

        $this->pageNumber += 1;

        $this->hasMorePages = $footprints->hasMorePages();

        $this->footprints->push(...$footprints->items());
    }

    public function render()
    {
        //return view('livewire.footprints-content.tab-explore');
        return view('livewire.footprints-content.tab-explore');
    }

    // public function render()
    // {
    //     //return view('livewire.footprints-content.tab-explore');
    //     return view('livewire.footprints-content.tab-explore', [
    //         'footprints' => auth()->user()->footprints()->orderBy('created_at','desc')->get(),
    //     ]);
    // }
}
