<?php


App::uses('AppController', 'Controller');
App::import("Vendor","parsecsv");

class CsvsController extends AppController {
	
	function index(){
	
		if ($this->request->is('post')) {
		$dir = $this->request->data['Csv']['fichier']['tmp_name'];
		echo $dir;
		$csv = new parseCSV(); 
		$csv->auto($dir);
		foreach ($csv->data  as $row)  
         {  	debug($row);
            $temp1 =  $row['test0'];  
            $temp2 =  $row['test1'];  
            $temp3 =  $row['test2'];  
            $temp3 =  $row['test3'];
        }
		}
		
		
		
		  
      
        // 
        //  
		
        // 


		//}
	}
}

