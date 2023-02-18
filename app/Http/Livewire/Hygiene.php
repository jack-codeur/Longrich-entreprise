<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Maladie;
use App\Models\Produit;
use App\Models\TypeArticle;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Hygiene extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';


    public $search = "";
    public $filterEtat = "";

    public $addProduct = [];
    public $editProduct = [];
    public $image_1 = "", $image_2 = "", $image_3 = "", $image_4 = "";


    protected $rules = [
        'addProduct.id_typeArticle' => 'required',
        'addProduct.nom_produit' => 'required',
        'addProduct.EstDisponible' => 'required',
        'image_1' => 'image|required|max:1024', //1Mg
        'image_2' => 'image|required|max:1024', //1Mg
        'image_3' => 'image|required|max:1024', //1Mg
        'image_4' => 'image|required|max:1024', //1Mg
        'addProduct.prix_reel' => 'required',
        'addProduct.prix_promo' => 'required',
        'addProduct.description_produit' => 'required',
        'addProduct.mode_utilisation' => 'required',
    ];

    protected $messages = [
        'addProduct.id_typeArticle' => 'Le champ catégorie est requis',
        'addProduct.nom_produit' => 'Le nom du produit est requis',
        'addProduct.EstDisponible' => 'Ce champ est obligatoire',
        'image_1' => 'L\'image est requis',
        'addProduct.prix_reel' => 'Le prix est requis',
        'addProduct.prix_promo' => 'Le prix de promo est requis',
        'addProduct.description_produit' => 'Veillez donner une description du produit ',
        'addProduct.mode_utilisation' => 'Le mode d\'utilisation est requis',
    ];

    public function render()
    {
        Carbon::setlocale("fr");

        $productSearch = Produit::query();
        if ($this->search != "") {
            $productSearch->where('nom_produit', 'LIKE', "%" .$this->search. "%")
                     ->orWhere('EstDisponible', 'LIKE', "%" .$this->search. "%");
        }

        if ($this->filterEtat != "") {
            $productSearch->where('EstDisponible', 'LIKE', "%" .$this->filterEtat. "%");
        }

        return view('livewire.admin.hygiene',
    [
        'hygienes' => $productSearch->latest()->paginate(5),
        'categories' => TypeArticle::all(),
    ])
        ->extends('layouts.admin.master')
        ->section('produit_liste_hygiene');
    }

    public function createProduct(){

        $pathImage_1 = ""; $pathImage_2 = ""; $pathImage_3 = ""; $pathImage_4 = "";

        if ($this->image_1 != "" && $this->image_2 != "" && $this->image_3 != "" && $this->image_4 != "") {

            $pathImage_1 = $this->image_1->store('upload', 'public');
            $pathImage_2 = $this->image_2->store('upload', 'public');
            $pathImage_3 = $this->image_3->store('upload', 'public');
            $pathImage_4 = $this->image_4->store('upload', 'public');
        }
        
        $validateProduct = $this->validate();

        Produit::create([
            "id_typeArticle" => $validateProduct["addProduct"]["id_typeArticle"],
            "nom_produit" => $validateProduct["addProduct"]["nom_produit"],
            "EstDisponible" => $validateProduct["addProduct"]["EstDisponible"],
            "prix_reel" => $validateProduct["addProduct"]["prix_reel"],
            "prix_promo" => $validateProduct["addProduct"]["prix_promo"],
            "description_produit" => $validateProduct["addProduct"]["description_produit"],
            "mode_utilisation" => $validateProduct["addProduct"]["mode_utilisation"],
            "image_1" => $pathImage_1,
            "image_2" => $pathImage_2,
            "image_3" => $pathImage_3,
            "image_4" => $pathImage_4
        ]);

        $this->addProduct = [];

        $this->dispatchBrowserEvent('showSuccessMessage', ['message'=>'Produit ajouté avec succè!']);
        $this->closeModal();
    }
    //Edit product
    public function showEditProduct($id){
        $this->editProduct = Produit::find($id)->toArray();

        $this->dispatchBrowserEvent('showEditModal');
        $this->dispatchBrowserEvent('closeEditModal');
    }
    public function updateProduct(){
        $this->validate([
            'editProduct.id_typeArticle' => 'required',
            'editProduct.nom_produit' => 'required',
            'editProduct.EstDisponible' => 'required',
            'editProduct.prix_reel' => 'required',
            'editProduct.prix_promo' => 'required',
            'editProduct.description_produit' => 'required',
            'editProduct.mode_utilisation' => 'required',
        ]);
        Produit::find($this->editProduct['id'])->update([
            "id_typeArticle" => $this->editProduct["id_typeArticle"],
            "nom_produit" => $this->editProduct["nom_produit"],
            "EstDisponible" => $this->editProduct["EstDisponible"],
            "prix_reel" => $this->editProduct["prix_reel"],
            "prix_promo" => $this->editProduct["prix_promo"],
            "description_produit" => $this->editProduct["description_produit"],
            "mode_utilisation" => $this->editProduct["mode_utilisation"],
        ]);

        $this->dispatchBrowserEvent('showEditModal');
        $this->dispatchBrowserEvent('closeEditModal');
    }
    //Delete product
    public function confirmDelete($product_name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage", [
            "message"=>[
                "text" => "Vous etes sur le point de supprimer le produit $product_name",
                "title" => "Etes-vous sûr de continuer?",
                "icon" => "warning",
                "data" => [
                    "product_id" => $id
                ]
            ]
        ]);
    }
    public function deleteProduct($id){
        Produit::destroy($id);

        $this->dispatchBrowserEvent('showDeleteMessage', ['message'=>'Produit supprimé avec succè!']);
    }

    public function showAddPrdtHygiene(){
        $this->dispatchBrowserEvent('showModal');
    }
    public function closeModal(){
        $this->dispatchBrowserEvent('closeModal');
    }
    public function closeEditModal(){
        $this->dispatchBrowserEvent('closeEditModal');
    }
}
