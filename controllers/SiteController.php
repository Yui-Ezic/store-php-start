<?php

class SiteController 
{
	public function actionIndex()
	{
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts(6);

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProductsList();

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
	}


	public function actionContact()
	{
		$userEmail = '';
		$userText = '';

		$result = false;

		if (isset($_POST['submit'])) {
			$userEmail = $_POST['userEmail'];
			$userText = $_POST['userText'];

			$errors = false;

			if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }

            if ($errors == false) {
            	$adminEmail = 'mishan221199@gmail.com';
            	$message = "Текст: {$userText}. От {$userEmail}";
            	$subject = 'Тема письма';
            	$result = mail($adminEmail, $subject, $message);
            	$result = true;
            }
		}

		require_once(ROOT . '/views/site/contact.php');

		return true;
	}
}