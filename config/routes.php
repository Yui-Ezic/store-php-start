<?php

return array(
	'product/([0-9]+)' => 'product/view/$1',
	
	'catalog' => 'catalog/index',

	'cabinet' => 'cabinet/index',
	'cabinet/edit' => 'cabinet/edit',
	
	'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
	'category/([0-9]+)' => 'catalog/category/$1',
	
	'user/register' => 'user/register',
	'user/login' => 'user/login',
	'user/logout' => 'user/logout',

	'contacts' => 'site/contact',

	'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
	'cart/checkout' => 'cart/checkout',
	'cart' => 'cart/index',

	'admin' => 'admin/index',

	'admin/product' => 'adminProduct/index',
	'admin/product/create' => 'adminProduct/create',
	'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',

    'admin/category' => 'adminCategory/index',
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',

    'admin/order' => 'adminOrder/index',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
	
	'' => 'site/index',
);