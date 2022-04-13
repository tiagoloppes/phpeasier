<?php
class CategoryController extends Controller {
	public function index() {

        $categories = array(
            0 => 'Computers',
            1 => 'Cameras',
            2 => 'Gifts',
            3 => 'Hard Drivers',
            4 => 'Mouses',
            5 => 'Keyboards'
        );

        $this->view->assign('categories', $categories);
		$this->view->dispatch ();
	}

    public function list() {
		$this->view->dispatch ('list');
	}
}
