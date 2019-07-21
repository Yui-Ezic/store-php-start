<?php

class Cart
{
	public static function addProduct($id) {
		$id = intval($id);

		$productInCart = array();

		if (isset($_SESSION['products'])) {
			$productInCart = $_SESSION['products'];
		}

		if (array_key_exists($id, $productInCart)) {
			$productInCart[$id]++;
		} else {
			$productInCart[$id] = 1;
		}

		$_SESSION['products'] = $productInCart;

		return self::countItems();
	}


	public static function countItems() {
		if (isset($_SESSION['products'])) {
			$count = 0;
			foreach ($_SESSION['products'] as $id => $quanity) {
				$count += $quanity;
			}

			return $count;
		}
		
		return 0;
	}


	public static function getProducts() {
		if (isset($_SESSION['products'])){
			return $_SESSION['products'];
		}

		return false;
	}


	public static function getTotalPrice($products) {
		$productInCart = self::getProducts();

		$total = 0;

		if ($productInCart) {
			foreach ($products as $item) {
				$total += $item['price'] * $productInCart[$item['id']];
			}
		}

		return $total;
	}


	/*
	 * Очищает корзину от товаров
	 */
	public static function clear() {
	    if(isset($_SESSION['products'])) {
	        unset($_SESSION['products']);
        }
    }


    /*
     * Удаляет продукт из корзины
     */
    public static function deleteProduct($id) {
        $id = intval($id);

        if (array_key_exists($id, $_SESSION['products'])) {
            if($_SESSION['products'][$id] > 1) {
                $_SESSION['products'][$id]--;
            } else {
                unset($_SESSION['products'][$id]);
            }
        }

        return self::countItems();
    }

}