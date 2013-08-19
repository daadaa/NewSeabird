<?php 
class SpeciesController extends AppController {
	public $uses = array('Bird','Specie');
	public function index(){
		$bird = $this->Bird->find('all');
		$specie =$this->Bird->find('all', array(
			'fields' => array('Specie.name')
		));
		$this->set('bird',$specie);
		
		if ($this->request->is('post')) {
				debug($this->request->data['Specie']);
				$DataSpecie = array('order' => $this->request->data['Species']['oder'],
									'family' => $this->request->data['Species']['family'],
									'genus' => $this->request->data['Species']['genus'],
									'sp' => $this->request->data['Species']['sp'],
									'name' => $this->request->data['Species']['name'],
									'code' => $this->request->data['Species']['code'],
								);
				
				
				if(in_array($this->request->data['Species']['name'],$specie,TRUE)){
					$this->Specie->saveall($DataSpecie);
				}
				
				//$this->Specie->saveall($DataSpecie);
				//$idSpe = $this->Specie->id;
				/*$DataBird = array('band' =>$this->request->data['Species']['band'],
								  'specie_id' => $idSpe,
								  'sex' =>$this->request->data['Species']['sex'],
								  'numRing' =>$this->request->data['Species']['numRing']);
				*/
				//$this->Bird->saveall($DataBird);
				//$idBird = $this->Bird->id;
				
				//$this->redirect(array('controller' => 'Metadatas' ,'action' => 'argos' ,  $idBird));
				$this->redirect(array('action' => 'index'));
		}
	}
	

}
	
	

