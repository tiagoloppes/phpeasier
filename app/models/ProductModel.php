<?php
class ProductModel extends Model {
	protected $name = 'product';
	protected $idColumn = 'id_product';
	protected $fk = array (
			'CategoryModel' => array (
					'id_category_fk',
					'id_category',
					'one',
					'category'
			),
			'TagModel' => array (
					'id_tag_fk',
					'id_tag',
					'many',
					'tags'
			),
			'ImageModel' => array (
					'id_image_fk',
					'id_image',
					'many',
					'images'
			)
	);
	public function __construct() {
		parent::__construct ();
	}
	
    # Searching with a custom query 
	public function findBeforeYear($year) {
		$st = $this->db->prepare ( "select * from product where YEAR(dt_registry) < :year" );
		$st->bindParam ( 'year', $year );
		$st->execute ();
		return $st->fetchAll ();
	}
}
