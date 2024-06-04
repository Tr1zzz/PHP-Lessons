<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\RoleUtils;
use core\Utils;

class CartCtrl
{

    private $cart = [];

    public function __construct()
    {
        App::getSmarty()->assign("isUser", RoleUtils::inRole("user"));
        App::getSmarty()->assign("isWorker", RoleUtils::inRole("worker"));
        App::getSmarty()->assign("isAdmin", RoleUtils::inRole("admin"));
        App::getSmarty()->assign("title", 'GymFlex - Stay Strong, Live Long');

        App::getSmarty()->assign("conf", App::getConf()->app_url);
        // Initialize cart from session if available
        $this->cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    }
    public function action_cart_display()
    {
        App::getSmarty()->assign("cart", $this->cart);
        App::getSmarty()->display("cart.html");
    }

    public function action_add_to_cart()
    {
        session_start(); // Ensure session is started
        $name = ParamUtils::getFromPost('name');
        $price = ParamUtils::getFromPost('price');
        $id_type = ParamUtils::getFromPost('id_type');

        if ($name && $price && $id_type) {
            $this->cart[] = [
                'name' => $name,
                'price' => $price,
                'id_type' => $id_type
            ];
            $_SESSION['cart'] = $this->cart; // Store cart in session
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
        exit;
    }
    public function action_remove_from_cart()
    {
        session_start(); // Убедитесь, что сессия начата
        $id_type = ParamUtils::getFromPost('id_type');

        if (isset($_SESSION['cart']) && $id_type) {
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['id_type'] == $id_type) {
                    unset($_SESSION['cart'][$key]);
                    // Переиндексируйте массив после удаления элемента
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo json_encode(['success' => true, 'message' => 'Item removed successfully']);
                    return;
                }
            }
            // Если элемент не найден
            echo json_encode(['success' => false, 'message' => 'Item not found']);
        } else {
            // Если корзина пуста или id_type не передан
            echo json_encode(['success' => false, 'message' => 'Cart is empty or no ID provided']);
        }
    }
}
