<?php
class CategoryModel extends Model {
	protected $name = 'category';
	protected $idColumn = 'id_category';

	public function __construct() {
		parent::__construct ();
	}
}	
