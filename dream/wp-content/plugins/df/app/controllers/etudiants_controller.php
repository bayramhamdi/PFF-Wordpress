<?php

class EtudiantsController extends MvcPublicController {

	public function index(){

		$objects=$this->Etudiant->find();
		$this->set('data',$objects);

	}
	
	 public function add(){
		$this->load_model('Departement');
		$departements = $this->Departement->find(array('selects' => array('id', 'name')) );
			/*print_r($departements);*/
			$this->set('departements',$departements);
		if(isset($_POST['btn_ajouter'])):
			$this->params['data']['Etudiant']['nom']=$_POST['nom'];
			$this->params['data']['Etudiant']['prenom']=$_POST['prenom'];
			$this->params['data']['Etudiant']['adresse']=$_POST['adresse'];
			$this->params['data']['Etudiant']['tel']=$_POST['tel'];
			$this->params['data']['Etudiant']['departement_id']=$_POST['departement_id'];
			
			if($this->Etudiant->create($this->params['data']));
		endif;	
	}
}
