<?php

namespace App\Livewire;

use App\Models\Diet;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TablaComponente extends Component
{
    public $dietaArray = [];
    public $title;
    public $date;
    public $description;
    public $totalCalories;
    public $myDiet;
    public $modal = false;
    public $isEditing;

    public function mount()
    {
        $this->dietaArray = Diet::where('id_client', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.tabla-componente');
    }

    //function boton limpiar campos (borrar)
    public function clearFields()
    {
        $this->title = '';
        $this->date = '';
    }
    //function boton crear dieta que abre modal
    public function openCreateModal(Diet $diet = null, bool $isEditing = false)
    {

        if ($diet) {
            $this->myDiet = $diet;
            $this->title = $diet->title;
            $this->description = $diet->description;
            $this->totalCalories = $diet->totalCalories;
        } else {
            $this->clearFields();
        }
        $this->isEditing = $isEditing;
        $this->modal = true;
    }
    public function closeCreateModal()
    {
        $this->modal = false;
    }
    public function getDiets()
    {
        return $this->dietaArray = Diet::where('id_client', Auth::id())->get();
    }
    public function deleteDiet(Diet $diet)
    {
        $diet->delete();
        $this->dietaArray = $this->getDiets();
    }
    public function createOrUpdateDiet()
    {
        if ($this->myDiet->id) {
            $task = Diet::find($this->myDiet->id);
            $task->update([
                'title' => $this->title,
                'description' => $this->description,
                'totalCalories' => $this->totalCalories
            ]);
        } else {

            $newDiet = new Diet(); //creamos nueva dieta
            $newDiet->title = $this->title;
            $newDiet->description = $this->description;
            $newDiet->totalCalories = $this->totalCalories;
            $newDiet->id_client = Auth::user()->id;

            $newDiet->save();
        }
        $this->clearFields();
        $this->modal = false;
        $this->dietaArray = $this->getDiets();
    }
}
