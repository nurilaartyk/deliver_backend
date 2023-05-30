<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use App\Models\Restauran;
use Livewire\Component;

class ShowCategory extends Component
{
    public $menus;
    public $category_id;
    public $categories;

    public function mount()
    {
        $this->menus = Menu::all();
        $this->category_id = 1;
        $this->categories = Restauran::all();
    }

    public function category($newCategory)
    {
        if ($newCategory == 0) {
            $this->menus = Menu::all();
        } else {
            $this->menus = Menu::where('restauran_id', $newCategory)->get();
        }
        $this->category_id = $newCategory;
    }

    public function render()
    {
        return view('livewire.show-category',
            [
                'menus' => $this->menus,
                'category_id' => $this->category_id,
                'categories' => $this->categories,
            ]
        );
    }
}
