<?php
	/*
	 * ===================================================================================================================================================================================================
	 * CLASS guthub
	 * Handle github repository data retrieval
	 * ===================================================================================================================================================================================================
	 * Functions
	 * 		void constructor(owner,name)		- Set class repository name and owner
	 * 		array get_releases()				- Get releases from repository
	 * ===================================================================================================================================================================================================
	 * DATA array variable
	 * 		['total_releases']					- Total number of releases
	 * 		['url']								- Repository API URL
	 * 		['owner']							- Repository owner
	 * 		['name']							- Repository name
	 * 		['releases'][$i]['name'] 			- Release name
	 * 		['releases'][$i]['zipball_url']		- ZIP file url
	 * 		['releases'][$i]['tarball_url'] 	- TAR.GZ file url
	 * 		['releases'][$i]['commit']['sha']	- Release commit SHA
	 * 		['releases'][$i]]['commit']['url']	- Release commit URL e.g. https://api.github.com/repos/zozas/Tradesman/commits/3a60aa89c49c695cfa3005c5d5df63a5437f12b2
	 * 		['releases'][$i]['node_id'] 		- Release node id
	 * ===================================================================================================================================================================================================
	 */
	class github {
		private $REPOSITORY_OWNER = "";
		private $REPOSITORY_NAME = "";
		private $REPOSITORY_DATA = array();
		public $DATA = array();
		public function __construct($owner, $name) {
			$this->REPOSITORY_NAME = $name;
			$this->REPOSITORY_OWNER = $owner;
		}
		public function get_releases() {
			$this->DATA['url'] = "https://api.github.com/repos/".$this->REPOSITORY_OWNER."/".$this->REPOSITORY_NAME."/tags";
			$this->DATA['owner'] = $this->REPOSITORY_OWNER;
			$this->DATA['name'] = $this->REPOSITORY_NAME;
			$context = stream_context_create(array("http" => array("header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36")));
			$this->DATA['releases'] = json_decode(file_get_contents($this->DATA['url'], false, $context), true);
			$this->DATA['total_releases'] = sizeof($this->DATA['releases']);
			
			
			
			
			
			
		}
	}
?>
