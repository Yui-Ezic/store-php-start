<?php

class CatalogController 
{
	const PRODUCTS_ON_PAGE = 6;
	
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$latestProducts = array();
		$latestProducts = Product::getLatestProducts(self::PRODUCTS_ON_PAGE);
		
		require_once(ROOT . '/views/catalog/index.php');
		
		return true;
	}

	public function actionCategory($categoryId, $page = 1)
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$categoryProducts = array();
		$categoryProducts = Product::getProductsListByCategory($categoryId, $page);

		$total = Product::getTotalProductsInCategory($categoryId);

		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

		require_once(ROOT . '/views/catalog/category.php');

		return true;
	}
}