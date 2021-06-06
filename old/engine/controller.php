<?php

// Контроллер

function prepareVariables($page, $menu, $messageUpload, $getImages, $action = "", $giveFile) {

    // $params для указания переменной на всех страницах

    $params = [
        // Отображение меню
        'list' => getMenu($menu),
        // Авторизация
        'name' => get_user(),
        'name_admin' =>  get_admin(),
        // Показывать меню для админа или для клиента
        'admin' => ((isAuth() == 2)),
        'auth' => ((isAuth() == 1)),
        // Для отображения меню Myorders авторизированного пользователя.
        // Сделал переменную в общем шаблоне чтоб на всех страницах было видно это меню
        'myorders' => $_SESSION['id'],
        // Выбор основного шаблона из папки layout по умолчанию
        'layout' => "main"
    ];

    // Смена темы

    if (isset($_COOKIE['color']))
    {
        $params['add'] = $_COOKIE['color'];
    }
    else {
        $params['add'] = "2.css";
    }

    // Показывает количество товаров в корзине

    $session = session_id();
    $countBasket = countGoodsBasketItem($session);
    $count = (($countBasket['count'])) ?: 0;
    $params['count'] = $count;

    //Переменные для страниц

    switch ($page) {

        // .................My orders .................................................

        case 'myorders':
            $id = (int)$_GET['id'];
            $params['order'] = getMyorders($id);
            $params['count_orders'] = count(getMyorders($id)) + 1;
        break;

        // .................Авторизация.................................................

        case 'login':
            $login = strip_tags(htmlspecialchars(($_POST['login'])));
            $pass = strip_tags(htmlspecialchars(($_POST['pass'])));
            loginEnter($login, $pass);
        break;
        case 'logout':
            setcookie("hash", "", time()-1, "/" );
            setcookie("adminhash", "", time()-1, "/" );
            session_unset();
            session_regenerate_id();
            session_destroy();
            header("Location: /");
            die();
        break;

        // Регистрация

        case 'registration':
            $login =  strip_tags(htmlspecialchars(($_POST['login'])));
            $pass = strip_tags(htmlspecialchars(($_POST['pass'])));
            $pass_hash = password_hash($pass,PASSWORD_DEFAULT);
            $row = getLogin($login);
            if (isset($login) && isset($pass)) {
                if ($row) {
                    $params['success'] = 'Такой логин уже есть';
                }
                else {
                   registration($login, $pass_hash);
                   $params['not_success'] = 'Поздравляю! Вы зарегестрировались. ';
                }
            }
        break;

        // ..................Админ................................................

        case 'admin':
            $params['order'] = adminOrder();
        break;

        // Админ страница с определённым заказом

        case 'adminOrder':
            $id = (int)$_GET['id'];
            $params['order'] = adminOrderItem($id);
            $params['summ'] = adminOrderTotal($id);
            $params['status'] = adminOrderStatus($id);
        break;


        // .................Страницы.................................................

        // Начальная страница

        case 'index':
            $params['hello'] = 'Hello,';
            $params['welcome'] = 'Welcome !';
            $params['title'] = 'Hello';
            $background = $_GET['action'];
            changeThemeAction($background); // Изменение темы
        break;

        // Отзывы

        case 'feedback':
            doFeedbackAction($action);
            $params['feedback'] = getAllFeedback();
        break;

        // Галерея

        case 'gallery':
            $params['title'] = 'Gallery'; // Заголок
            $params['gallery'] = getGallery(); // Через базу данных получаю полный список
            $params['gallerySort'] = getGallerySorting(); // Через базу данных получаю отсортированный список
            // Проверка на загрузку фотографии и переименовывание
            if (isset($_FILES['myfile'])) {
                upload($getImages);
            }
            $params['message'] = $messageUpload[$_GET['message']]; // Вывод сообщения
            // Удаление и вывод сообщения
            doGalleryAction($action);
            $params['message_del'] =  strip_tags($_GET['message_del']);
        break;

        case 'galleryone': // Показывает одну страницу
            $id = (int)$_GET['id'];
            changeViews($id); // Изменение количество просмотров
            $params['gall'] = getOneGallery($id);
        break;

        // Новости

        case 'news':
            $params['news'] = getNews();
        break;

        case 'newsone':
            $id = (int)$_GET['id'];
            $params['news'] = getOneNews($id);
        break;

        // Калькуляторы

        case 'calculator':
        case 'calculatorOperate':
            $params['arg1'] = 0;
            $params['arg2'] = 0;
            $params['result'] = 0;
            $arg1 = $_GET['arg1'];
            $arg2 = $_GET['arg2'];
            $operation = $_GET['operation'];
            if (isset($_GET['arg1']) && isset($_GET['arg2'])) {
                $params['arg1'] = $arg1;
                $params['arg2'] = $arg2;
                $params['result'] = doCalculatorOperation($arg1, $arg2, $operation);
            }
        break;

        // .................Товары, Корзина, Оформление заказа.................................................

        // Товары

        case 'goods':
            session_start();
            $session = session_id();
            $params['goods'] = getAllCatalog();
            $id = $_POST['goods_id'];
            $price = $_POST['price'];

            // Добавление товара в корзину, если есть такой то увеличивает количество
            if (isset($id)) {

                // Сравнение товара с базой данных в basket

//                $comparisonGoodsBasket = comparisonGoodsBasket($id, $session);

                if (comparisonGoodsBasket($id, $session)) {
                    changeBasketQuantity($id, $session);
                    header("Location: /goods");
                    die();
                }   else {
                    addBasket($session, $id, $price);
                    header("Location: /goods");
                    die();
                }
            }

        break;

        // Подробное описание товара

        case 'goodsItem':
            session_start();
            $id_get = (int)$_GET['id'];
            $params['goods'] = getOneCatalog($id_get); // Вывоодит информацию о товаре
            $params['feedback'] = getItemFeedback($id_get);  // Показывает отзывы
            $price = $_POST['price'];
            $id = $_POST['goods_id'];

            // Если есть в корзине такой товар то добавляет количество, если нет то добавляет новый товар
            if (isset($id)) {

                $comparisonGoodsBasket = comparisonGoodsBasket($id, $session);

                // Сравнение товара с базой данных в basket

                if ($comparisonGoodsBasket) {
                    changeBasketQuantity($id, $session);
                    header("Location: /goodsItem/?id={$id}");
                    die();
                }   else {
                    addBasket($session, $id, $price);
                    header("Location: /goodsItem/?id={$id}");
                    die();
                }
            }
        break;

        // Корзина

        case 'basket':
            session_start();
            $params['basket'] = getBasketItem($session); // вывод товаров в корзине
            $params['summ'] = getSumBasket($session); // сумма товаров
            $quantity = $_GET['quantity'];
            $id = (int)$_GET['id'];
            doBasketAction($id, $session, $quantity);
        break;

        // Страница с успешно оформленным заказом

        case 'congratulations':
            session_start();
            $session = session_id();
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $id = $_SESSION['id'];
            // Общая стоимость покупок в корзине
            $totalGet = getSumBasket($session);
            $total = (int)$totalGet['summ']; // преобразование в число

            if (isset($tel) && isset($email)) {
                // Если пользователь залогинился
                if (isset($id)) {
                    pushAuthOrder($session, $tel, $email, $id, $total);
                    session_regenerate_id();
                    session_destroy();
                }
                else {
                    pushOrder($session, $tel, $email, $total);
                    session_regenerate_id();
                    session_destroy();
                }
            }

        break;

        // .................API.................................................

        // Относится к странице calcAjax как api.
        // Страница apicalc не создаётся, просто нужно для передачи с калькулятора, как api,
        // в данном примере считает данные и отдаёт обратно.
        case 'apicalc':
            $data = json_decode(file_get_contents('php://input'));
            $arg1 = $data->arg1;
            $arg2 = $data->arg2;
            $operation = $data->operation;
            header("Content-type: application/json");
            echo json_encode(doCalculatorOperation($arg1, $arg2, $operation));
            die();
        break;
    }
    return $params;
}
