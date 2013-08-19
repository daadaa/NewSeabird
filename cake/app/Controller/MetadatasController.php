<?php


App::uses('AppController', 'Controller');
App::import("Vendor","parsecsv");

class MetadatasController extends AppController {
	public $uses = array('Csv','Metadata', 'Argosdata','Bird');
	function index(){
    }
	
	function argos($idBird=null){
	
		//echo $idBird;
		$bird = $this->Bird->find('first',array(
			'condition' => array('id' =>$idBird),
			'fields' => array('sex')
			
		
		));
		debug($bird);
		if ($this->request->is('post')) {
		//debug($this->request->data);
		
			$DataMeta = array('tag_type' => 'argos');
			$this->Metadata->save($DataMeta);
			$idMeta = $this->Metadata->id;
			
			echo $idMeta;
			
			$dir = $this->request->data['Csv']['fichier']['tmp_name'];
			$csv = new parseCSV(); 
			$csv->auto($dir);
			$flag_data = 0;
			$table=array();
				foreach ($csv->data  as $row)  
				 {  debug($row);
					$temp1 =  $row['test0'];  
					$temp2 =  $row['test1'];  
					$temp3 =  $row['test2'];  
					$temp4 =  $row['test3'];
					$table[] = array('lat' => $temp1, 'lon' => $temp2, 'date' => $temp3, 'time' => $temp4, 'metadata_id' => $idMeta);
					debug($table);
				}
				$this->Argosdata->saveall($table);
			
		}

	}
}

?>