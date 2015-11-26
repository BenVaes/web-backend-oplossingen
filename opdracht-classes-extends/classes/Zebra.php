<?php

	class Zebra extends Animal
	{
		protected $zebraSpecies;

		public function __construct(  $name, $sex, $health, $zebraSpecies )
		{
			parent::__construct( $name, $sex, $health );
			
			$this->zebraSpecies = $zebraSpecies;
		}

		public function getSpecies()
		{
			return $this->zebraSpecies;
		}

	}

?>