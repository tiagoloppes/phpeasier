<?php
class IndexController extends Controller {
	public function index() {
		$this->view->dispatch ();
	}

    #just demo, not work without a database        
    public function list() {
        LoadModel('ProductModel');

        $pModel = new ProductModel();
        $listProducts = $pModel->findAll();
        
        $this->view->assign('title', 'Hello World!');
        $this->view->assign('listProducts', $listProducts);
		$this->view->dispatch ('list');
	}
}
