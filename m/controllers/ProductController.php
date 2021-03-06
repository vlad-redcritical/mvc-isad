<?php

class ProductController
{
    public function actionView($categoryParam, $subcategoryParam, $productId)
    {
        $getTableNameProduct = CategoryFilterMobile::categoryCheckDoubleParam($categoryParam, $subcategoryParam);
        if ($getTableNameProduct == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $categoryProduct = array();
            $categoryProduct = ProductMobile::getProductById($getTableNameProduct, $productId, $categoryParam, $subcategoryParam);
            $userId = $categoryProduct[0]['user_id'];
            $user = UserMobile::getUserById($userId);
           $similarAds = array();
            $similarAds = ProductMobile::getSimilarAdsByCategoryAndSubcategory($getTableNameProduct,$categoryParam,$subcategoryParam);
            if($productId == false){
                header("HTTP/1.0 404 Not Found");
                require_once(ROOT . '/views/error/404.php');
            }
            else{
                $categoryProduct = array();
                $categoryProduct = ProductMobile::getProductById($getTableNameProduct, $productId, $categoryParam, $subcategoryParam);
                $userId = $categoryProduct[0]['user_id'];
                $user = UserMobile::getUserById($userId);
                $mainAds = array();
                $mainAds = ProductMobile::getAdsByCategoryAndSubcategory($getTableNameProduct,$categoryParam,$subcategoryParam,$productId);
            }
            require_once(ROOT . '/views/product/product.php');
            return true;
        }
    }
}