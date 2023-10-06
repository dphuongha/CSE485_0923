<?php 
class Doctor
{
    private $id;
    private $fullname;
    private $major;

	public function __construct($id, $fullname, $major) {
        $this->id = $id;
        $this->fullname = $fullname;
		$this->major = $major;
        
    }
    
	public function getId() {
		return $this->id;
	}
	
	
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
	
	
	public function getFullname() {
		return $this->fullname;
	}
	
	
	public function setFullname($fullname): self {
		$this->fullname = $fullname;
		return $this;
	}
	
	
	public function getMajor() {
		return $this->major;
	}
	
	
	public function setMajor($major): self {
		$this->major = $major;
		return $this;
	}
}
?>