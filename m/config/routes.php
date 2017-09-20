<?php
return array(
    'ads/([a-z]+)/([a-z]+)/([0-9+])' => 'product/view/$1/$2/$3',
    'catalog/([a-z]+)/([a-z]+)/page-([0-9]+)'=>'catalog/double/$1/$2/$3', //CatalogController and actionIndex
    'catalog/([a-z]+)/page-([0-9]+)'=>'catalog/index/$1/$2', //CatalogController and actionIndex
    'catalog/([a-z]+)/([a-z]+)'=>'catalog/double/$1/$2', //CatalogController and actionIndex
    'catalog/([a-z]+)'=>'catalog/index/$1', //CatalogController and actionIndex
    'account/logout'=>'user/logout', //AccountController and actionLogout
    'account'=>'account/index', //AccountController and actionIndex
    'add'=>'post/categoryList', // PostController and actionCategoryList
    'new-ads/([a-z]+)'=>'post/index/$1', //PostController and  actionIndex
    'terms'=>'terms/index',
    'activate-account/([0-9+])'=>'activate/successregister/$1',
    'activate-ad/([0-9+])'=>'activate/index/$1',
    '' => 'site/index' //SiteController and actionIndex
);