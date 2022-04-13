<?php
class TagModel extends Model {
	protected $name = 'tag';
	protected $idColumn = 'id_tag';

	public function __construct() {
		parent::__construct ();
	}
}	
