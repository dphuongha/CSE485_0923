<?php 
class Patient {
    private $idPatient;
    private $namePatient;
    private $dayexam;
    private $sick;
    private $id;

	public function __construct($idPatient, $namePatient, $dayexam, $sick, $id) {
        $this->idPatient = $idPatient;
        $this->namePatient = $namePatient;
		$this->dayexam = $dayexam;
		$this->sick = $sick;
		$this->id = $id;
        
    }
    

	
	public function getIdPatient() {
		return $this->idPatient;
	}
	
	
	public function setIdPatient($idPatient): self {
		$this->idPatient = $idPatient;
		return $this;
	}
	
	
	public function getNamePatient() {
		return $this->namePatient;
	}
	
	
	public function setNamePatient($namePatient): self {
		$this->namePatient = $namePatient;
		return $this;
	}
	
	
	public function getDayexam() {
		return $this->dayexam;
	}
	
	
	public function setDayexam($dayexam): self {
		$this->dayexam = $dayexam;
		return $this;
	}
	
	
	public function getSick() {
		return $this->sick;
	}
	
	public function setSick($sick): self {
		$this->sick = $sick;
		return $this;
	}
	
	
	public function getId() {
		return $this->id;
	}
	
	
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
}
?>