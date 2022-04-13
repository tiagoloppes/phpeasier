<?php
class ImageModel extends Model {
	protected $name = 'image';
	protected $idColumn = 'id_image';

	public function __construct() {
		parent::__construct ();
	}
}	
