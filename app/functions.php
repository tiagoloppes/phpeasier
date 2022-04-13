<?php
/**
 * Functions file - free for developer's functions
 */
function get_total_carrinho() {
	LoadModel ( 'CarrinhoModel' );
	LoadModel ( 'CarrinhoProdutoModel' );
	$carrinhoModel = new CarrinhoModel ();
	$carrinho = $carrinhoModel->getCarOrCreate ( $_SERVER ['REMOTE_ADDR'] );
	$carProModel = new CarrinhoProdutoModel ();
	return $carProModel->getTotal ( $carrinho );
}
function get_carrinhos() {
	LoadModel ( 'CarrinhoModel' );
	$carModel = new CarrinhoModel ();
	try {
		return $carModel->getCarrinhosInativos ();
	} catch ( Exception $e ) {
		print_r ( $e->getMessage () );
	}
}
function get_item_carrinho($pro_codigo) {
	LoadModel ( 'CarrinhoModel' );
	LoadModel ( 'CarrinhoProdutoModel' );
	$carrinhoModel = new CarrinhoModel ();
	$carProModel = new CarrinhoProdutoModel ();
	$carrinho = $carrinhoModel->getCarOrCreate ( $_SERVER ['REMOTE_ADDR'] );
	$object->cap_codigo_carrinho = $carrinho->car_codigo;
	$object->cap_codigo_produto = $pro_codigo;
	return $carProModel->findByObject ( $object );
}
function checkTipoNfeByCliente($cliente) {
	$tipoNfe = '65';
	if ($cliente->usu_nome != NULL && $cliente->usu_cpf_cnpj != NULL && $cliente->usu_tipo_pessoa == 'PJ' && $cliente->usu_logradouro != NULL && $cliente->usu_cep != NULL && $cliente->usu_bairro != NULL && $cliente->usu_municipio != NULL && $cliente->usu_uf != NULL) {
		$tipoNfe = '55';
	}
	return $tipoNfe;
}
?>