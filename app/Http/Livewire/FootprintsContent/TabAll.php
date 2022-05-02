<?php

namespace App\Http\Livewire\FootprintsContent;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\UsersFootprint;
use App\Models\Company;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;


class TabAll extends Component
{
    use WithPagination;
    
    public $searchTerm;
    
    //public $footprints;

    // public function mount()
    // {
    //     $this->footprints = Auth::user()->footprints()->orderBy('created_at','desc')->paginate(5);
    // }

    public function render()
    {
        //$searchTerm = '%' . $this->searchTerm . '%';

        // $company = Company::query()->where('name', 'LIKE', "%{$this->searchTerm}%")->firstOr(function () {
        //     return;
        // });
        
        return view('livewire.footprints-content.tab-all', [
            'footprints' => Auth::user()->footprints()->when( ($this->searchTerm) , function (Builder $builder) {
                $company = Company::query()->where('name', 'LIKE', "%{$this->searchTerm}%")->first();
                $builder->where('company_id',$company->id);
            })->with('company')->paginate(5),
        ]);
        // where('name', 'ilike', $searchTerm)->
        // 'footprints' => Auth::user()->footprints()->with(['company' => function ($query) { $query->where('name', 'like', '%Google%'); }])->orderBy('created_at','desc')->paginate(5),
        //return view('livewire.footprints-content.tab-all');
        // return view('livewire.footprints-content.tab-all', [
        //      'footprints' => Auth::user()->footprints()->orderBy('created_at','desc')->paginate(5),
        // ]);
        // return view('livewire.footprints-content.tab-all', [
        //     'footprints' => UsersFootprint::paginate(5),
        // ]);

    }
}
