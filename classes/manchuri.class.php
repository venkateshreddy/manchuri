<?php
require_once("db.class.php");
class Manchuri{
	
	private $db = null;
	public function __construct(){
		$this -> db = new DB();
	}

	public function getResult($query = ""){
		$result = null;
		if($this -> db -> executeQuery($query))
		{
			$result = $this -> db -> getResult();
		}		
		return $result;
	}

	public function getActiveProjects($city_id){
		$projects  = array();
        $get_active_projects = "select projects.*, areas.name as area_name from projects join areas on projects.areaid = areas.area_id  where cityid = $city_id and projects.status = 1";
        $projects = $this -> getResult($get_active_projects);
        return $projects;
	}
}
?>
