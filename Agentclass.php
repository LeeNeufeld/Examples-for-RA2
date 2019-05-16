<?php
	class Agent
	{
		private $AgentId;
		private $AgtFirstName;
		private $AgtMiddleInitial;
		private $AgtLastName;
		private $AgtBusPhone;
		private $AgtEmail;
		private $AgtPosition;
		private $AgencyId;
		
		public function __construct($AgentId,$AgtFirstName,$AgtMiddleInitial,$AgtLastName,$AgtBusPhone,$AgtEmail,$AgtPosition,$AgencyId)
		{
			$this->AgentId = $AgentId;
			$this->AgtFirstName = $AgtFirstName;
			$this->AgtMiddleInitial = $AgtMiddleInitial;
			$this->AgtLastName = $AgtLastName;
			$this->AgtBusPhone = $AgtBusPhone;
			$this->AgtEmail = $AgtEmail;
			$this->AgtPosition = $AgtPosition;
			$this->AgencyId = $AgencyId;
		}
		public function getAgentId()
		{
			return $this->AgentId;
		}
		
		public function setAgentId($AgentId)
		{
			$this->AgentId = $AgentId;
		}
			
		public function getAgtFirstName()
		{
			return $this->AgtFirstName;
		}
		
		public function setAgtFirstName($AgtFirstName)
		{
			$this->AgtFirstName = $AgtFirstName;
		}
		
		public function getAgtMiddleInitial()
		{
			return $this->AgtMiddleInitial;
		}
		
		public function setAgtMiddleInitial($AgtMiddleInitial)
		{
			$this->AgtMiddleInitial = $AgtMiddleInitial;
		}
		
		public function getAgtLastName()
		{
			return $this->AgtLastName;
		}
		
		public function setAgtLastName($AgtLastName)
		{
			$this->AgtLastName = $AgtLastName;
		}
		
		public function getAgtBusPhone()
		{
			return $this->AgtBusPhone;
		}
		
		public function setAgtBusPhone($AgtBusPhone)
		{
			$this->AgtBusPhone = $AgtBusPhone;
		}
		
		public function getAgtEmail()
		{
			return $this->AgtEmail;
		}
		
		public function setAgtEmail($AgtEmail)
		{
			$this->AgtEmail = $AgtEmail;
		}
		
		public function getAgtPosition()
		{
			return $this->AgtPosition;
		}
		
		public function setAgtPosition($AgtPosition)
		{
			$this->AgtPosition = $AgtPosition;
		}
		
		public function getAgencyId()
		{
			return $this->AgencyId;
		}
		
		public function setAgencyId($AgencyId)
		{
			$this->AgencyId = $AgencyId;
		}
		
		public function __toString()
		{
			return "Agent: " .$this->AgentId . ", " . $this->AgtFirstName . ", " . $this->AgtMiddleInitial . ", " . $this->AgtLastName . ", " . $this->AgtBusPhone . ", " . $this->AgtEmail . ", " . $this->AgtPosition . ", " . $this->AgencyId;
		}
	}
	
	
	
	
?>