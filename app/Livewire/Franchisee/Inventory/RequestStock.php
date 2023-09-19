<?php

namespace App\Livewire\Franchisee\Inventory;

use App\Models\Franchisee_Inventory;
use App\Models\InventoryMaterials;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class RequestStock extends Component
{

    public $allMaterials, $material, $stock = 0, $quantity, $price = 0, $totalAmt = 0, $remark;
    public function render()
    {
        $this->allMaterials = InventoryMaterials::all();
        return view('livewire.franchisee.inventory.request-stock');
    }
    public function loadMaterial()
    {
        // dd($this->material);
        $material = InventoryMaterials::find($this->material);
        if ($material) {
            $this->price = $material->price;
            //dd($this->material);
            $franchiseeInventory = Franchisee_Inventory::where('FranchiseeId', Session::get('FRANCHISEE_ID'))
                ->where('ProductId', $this->material)->first();
            if ($franchiseeInventory) {
                $this->stock = $franchiseeInventory->quantity;
            } else {
                $this->stock = 10;
            }
        } else {
            $this->zeroAllValues();
        }
    }
    public function priceCalculation()
    {
        $this->totalAmt = $this->price * $this->quantity;
    }
    public function zeroAllValues()
    {
        $this->price = 0;
        $this->price = 0;
        $this->totalAmt = 0;
        $this->quantity = '';
    }
    public function saveData(){
        
    }
}
