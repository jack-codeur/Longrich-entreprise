<div class="app-content p-md-3 p-lg-4 py-3">

	@include('livewire.admin.create_form.create_contact_user')
	
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<h6 class="m-0">Accueil</h6>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Accueil</a></li>
						<li class="breadcrumb-item active">Users </li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="row mx-4 pt-3">
		<div class="col-12">
			<div class="card">
				<div class="card-header bg-blue d-flex flex-wrap align-items-center">
					<h3 class="card-title flex-grow-1 mb-2">Liste des utulisateurs</h3>
					<div class="card-tools d-flex flex-wrap align-items-center">

						<button class="btn text-white mb-2 mr-4 d-block" wire:click="showAddUser()" style="background-color: rgb(59, 85, 202);">Ajouter un ordi</button>

						<div class="input-group input-group-md" style="width: 250px;">
							<input type="text" wire:model.debounce.500ms="search" class="form-control float-right" placeholder="Search">
							<div class="input-group-append">
								<button type="submit" class="btn btn-default">
									<i class="fas fa-search"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row d-flex justify-content-end mr-2">
					<div class="form-group">
						<label for="filterByEtat">Filtre par sexe</label>
						<select type="text" wire:model="filterEtat" id="filterByEtat" class="form-control">
							<option value="">---Aucune valeur---</option>
							<option value="H">Homme</option>
							<option value="F">Femme</option>
						</select>
					</div>
				</div>
				<div class="card-body table-responsive p-0" style="height: 300px;">
					<table class="table table-head-fixed text-nowrap table-striped">
						<thead>
							<tr>
								<th style="width:5%" class="text-center">N°Users</th>
								<th style="width:25%" class="text-center">Nom</th>
								<th style="width:25%" class="text-center">Prenom</th>
								<th style="width:20%" class="text-center">Téléphone</th>
								<th style="width:20%" class="text-center">E-mail</th>
								<th style="width:20%" class="text-center">Créé</th>
								<th style="width:30%" class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($users as $user )
								<tr>
									<td class="text-center">
										<i class="fa fa-user"></i>
									</td>
									<td class="text-center">{{$user->nom}}</td>
									<td class="text-center">{{$user->prenom}}</td>
									<td class="text-center">{{$user->nmeroTel}}</td>
									<td class="text-center">{{$user->email}}</td>
									<td class="text-center">{{$user->created_at->diffForHumans()}}</td>
									<td class="text-center">
										<button class="btn btn-primary"><i class="far fa-edit fa-1x"></i></button>
										<button class="btn btn-danger" ><i class="far fa-trash-alt fa-1x"></i></button>
									</td>
								</tr>
							@empty
								<tr>
									<td colspan="7">
										<div class="alert alert-danger">
											<h5><i class="icon fas fa-ban fa-1x">Aucune information ne corresponde au donnée de rechreche</i></h5>
										</div>
									</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>
				<div class="card-footer flot-right">
					<div class="float-right">
						{{ $users->links() }}
					</div>
				</div>
			</div>

		</div>
	</div>

	<script>

		window.addEventListener("showConfirmMessage", event =>{
			
			Swal.fire({
				title: event.detail.message.title,
				text: event.detail.message.text,
				icon: event.detail.message.type,
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Confirmer',
				cancelButtonText: 'Annuler'
				}).then((result) => {
				if (result.isConfirmed) {
					@this.deleteUser(event.detail.message.data.user_id);
				}
			});

			window.addEventListener("showSuccesMessage", event =>{
			
			Swal.fire({
				position: 'top-end',
				icon: 'success',
				toast: true,
				title: event.detail.message,
				showConfirmButton: false,
				timer: 3000,
			})
		});

		});

	</script>
    
</div><!--//app-content-->