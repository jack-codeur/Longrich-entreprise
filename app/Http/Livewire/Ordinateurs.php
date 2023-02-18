<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Produit;
use App\Models\TypeArticle;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class Ordinateurs extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $search = "";
    public $filterEtat = "";

    public $addArticle = [];
    public $editArticle = [];
    public $image_1 = "", $image_2 = "", $image_3 = "", $image_4 = "";


    protected $rules = [
        'addArticle.id_typeArticle' => 'required',
        'addArticle.nom_produit' => 'required',
        'addArticle.EstDisponible' => 'required',
        'image_1' => 'image|required|max:1024', //1Mg
        'image_2' => 'image|required|max:1024', //1Mg
        'image_3' => 'image|required|max:1024', //1Mg
        'image_4' => 'image|required|max:1024', //1Mg
        'addArticle.prix_reel' => 'required',
        'addArticle.prix_promo' => 'required',
        'addArticle.caracteristique' => 'required',
    ];

    protected $messages = [
        'addArticle.id_typeArticle' => 'Le champ catégorie est requis',
        'addArticle.nom_produit' => 'Le nom du article est requis',
        'addArticle.EstDisponible' => 'Ce champ est obligatoire',
        'image_1' => 'L\'image est requis',
        'addArticle.prix_reel' => 'Le prix est requis',
        'addArticle.prix_promo' => 'Le prix de promo est requis',
        'addArticle.caracteristique' => 'Veillez renseigner les caracteristique de l\'article ',
    ];

    public function render()
    {
        Carbon::setLocale('fr');

        $searchArticle = Produit::query();

        if ($this->search != "") {
            $searchArticle->where('nom_produit', 'LIKE', "%" .$this->search. "%")
                          ->orWhere('EstDisponible', 'LIKE', "%" .$this->search. "%");
        }
        if ($this->filterEtat != "") {
            $searchArticle->where('EstDisponible', 'LIKE', "%" .$this->filterEtat. "%");
        }

        return view('livewire.admin.ordinateurs',
    [
        'ordinateurs' => $searchArticle->latest()->paginate(5),
        'categories' => TypeArticle::all(),
    ])
        ->extends('layouts.admin.master')
        ->section('vente');
    }

    public function createArticle(){

        $pathImage_1 = ""; $pathImage_2 = ""; $pathImage_3 = ""; $pathImage_4 = "";

        if ($this->image_1 != "" && $this->image_2 != "" && $this->image_3 != "" && $this->image_4 != "") {

            $pathImage_1 = $this->image_1->store('upload', 'public');
            $pathImage_2 = $this->image_2->store('upload', 'public');
            $pathImage_3 = $this->image_3->store('upload', 'public');
            $pathImage_4 = $this->image_4->store('upload', 'public');
        }
        
        $validateArticle = $this->validate();

        Produit::create([
            "id_typeArticle" => $validateArticle["addArticle"]["id_typeArticle"],
            "nom_produit" => $validateArticle["addArticle"]["nom_produit"],
            "EstDisponible" => $validateArticle["addArticle"]["EstDisponible"],
            "prix_reel" => $validateArticle["addArticle"]["prix_reel"],
            "prix_promo" => $validateArticle["addArticle"]["prix_promo"],
            "caracteristique" => $validateArticle["addArticle"]["caracteristique"],
            "image_1" => $pathImage_1,
            "image_2" => $pathImage_2,
            "image_3" => $pathImage_3,
            "image_4" => $pathImage_4
        ]);

        $this->addArticle = [];

        $this->dispatchBrowserEvent('showSuccessMessage', ['message'=>'Produit ajouté avec succè!']);
        $this->closeModal();
    }
    //Edit article
    public function showEditArticle($id){
        $this->editArticle = Produit::find($id)->toArray();

        $this->dispatchBrowserEvent("showEditModal");

    }
    public function updateArticle(){

        $this->validate([
            'editArticle.id_typeArticle' => 'required',
            'editArticle.nom_produit' => 'required',
            'editArticle.EstDisponible' => 'required',
            'editArticle.prix_reel' => 'required',
            'editArticle.prix_promo' => 'required',
            'editArticle.caracteristique' => 'required',
        ]);
        Produit::find($this->editArticle["id"])->update([
            "id_typeArticle" => $this->editArticle["id_typeArticle"],
            "nom_produit" => $this->editArticle["nom_produit"],
            "EstDisponible" => $this->editArticle["EstDisponible"],
            "prix_reel" => $this->editArticle["prix_reel"],
            "prix_promo" => $this->editArticle["prix_promo"],
            "caracteristique" => $this->editArticle["caracteristique"],
        ]);

        $this->dispatchBrowserEvent('showSuccessMessage', ['message'=>'Produit modifier avec succè!']);
        $this->dispatchBrowserEvent('closeEditModal');
    }
    //Delete article
    public function confirmDeleteMessage($product_name, $id){
        // $this->editArticle = Article::find($id)->toArray();

        $this->dispatchBrowserEvent("showConfrmMessage", [
            "message" =>[
                "text" => "Vous etes sur le point de supprimer le produit $product_name",
                "title" => "Etes-vous sûr de continuer?",
                "icon" => "warning",
                "data" =>[
                    "article_id" => $id
                ]
            ]
        ]);
    }
    public function deleteArticle($id){
        Produit::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ['message'=>'Article supprimé avec succè!']);
    }

    public function showAddprdtOrdi(){
        $this->dispatchBrowserEvent('showModal');
    }
    public function closeModal(){
        $this->dispatchBrowserEvent('closeModal');
    }
    public function closeEditModal(){
        $this->dispatchBrowserEvent('closeEditModal');
    }
}
