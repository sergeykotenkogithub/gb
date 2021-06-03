-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 03 2021 г., 04:01
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallerybase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `goods_id` int NOT NULL,
  `session_id` text NOT NULL,
  `quantity` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `goods_id`, `session_id`, `quantity`) VALUES
(2, 2, 'a0jfukh3l3oojgs40kt551s4glqgh2p8', 1),
(4, 3, 'a0jfukh3l3oojgs40kt551s4glqgh2p8', 1),
(10, 1, 'dsi39uh5io31gsip7k85si3b1vm6c360', 1),
(11, 2, '2gm7eggtbmdlsvgsnpflcbqs63tkqnu9', 1),
(12, 3, 't789o3u99i0go4scp8sa90ce8589eke3', 1),
(16, 2, 't789o3u99i0go4scp8sa90ce8589eke3', 1),
(17, 3, 't789o3u99i0go4scp8sa90ce8589eke3', 1),
(18, 3, 't789o3u99i0go4scp8sa90ce8589eke3', 1),
(19, 3, 't789o3u99i0go4scp8sa90ce8589eke3', 1),
(20, 1, 'vp3pm9d1ekdu42ttub5vjhigdme9lj8s', 1),
(21, 2, 'vp3pm9d1ekdu42ttub5vjhigdme9lj8s', 1),
(22, 2, 'vp3pm9d1ekdu42ttub5vjhigdme9lj8s', 1),
(23, 1, 'bvll4envvmk91p8qhvpt5a4pp1fmklii', 1),
(24, 2, 'bvll4envvmk91p8qhvpt5a4pp1fmklii', 1),
(26, 2, '3vsq9foq8b31oa3ajfcb1581gc50l0bq', 1),
(27, 3, '3vsq9foq8b31oa3ajfcb1581gc50l0bq', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `goods_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`, `goods_id`) VALUES
(1, 'Андрей', 'Яблоко очень вкусное.', 3),
(2, 'Павел', 'Кофе очень насыщенный и ароматный.', 1),
(3, 'Иван', 'Чай понравится любителям различных плодово-ягодных чайных композиций и тем, кто не относится скептически к каркаде в составе.', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `views` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `views`) VALUES
(7, '07.jpg', 18),
(8, '08.jpg', 6),
(15, '09.jpg', 4),
(16, '10.jpg', 2),
(17, '11.jpg', 2),
(18, '12.jpg', 0),
(19, '13.jpg', 2),
(20, '14.jpg', 13),
(21, '15.jpg', 12),
(98, '16.jpg', 4),
(128, '17.jpg', 1),
(129, '18.jpg', 1),
(130, '19.jpg', 3),
(131, '20.jpg', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Кофе', 'Кофе в зернах - сбалансированный и ароматный кофе, средняя обжарка. Богатый вкус с приятным послевкусием для настоящих мужчин', 620, 'coffee.jpg'),
(2, 'Чай', 'Травяной чай в пакетиках Милфорд Иммунити с эхинацеей и имбирем 3 упаковки по 20 пакетиков по 1,75 гр (35 грамм). Чайный напиток Милфорд - 100% натуральный продукт с уникальной рецептурой, отличным вкусом и ароматом чая. Чай создан на основе шиповника, корня имбиря, эхинацеи и корня элеутерококка. Польза чайного напитка заключается в его составе: Шиповник - источник витамина С Эхинацея укрепляет иммунитет, оказывает тонизирующее влияние, подавляет симптомы стресса. Отличное средство для повышения защитных сил организма Корень имбиря - в составе, в котором содержится множество биологически активных компонентов (около 400 соединений), предопределяющих лечебные свойства имбиря. Химический состав имбирного корня богат на содержание витамин С - главного \"борца\" с различного рода ОРЗ и ОРВИ Состав чайного напитка: сорго лимонное, листья ежевики, шиповник, корень имбиря, трава эхинацеи, ройбуш, цедра апельсина, корица, корень элеутерококка, корень эхинацеи.', 452, 'tea.jpg'),
(3, 'Яблоко', 'Яблоки Роял Гала среднего размера имеют красноватую кожуру с характерными немногочисленными вертикальными полосками желтого или желто-зеленого цвета. Хрустящая сочная мякоть этих плодов отличается приятным десертным вкусом.', 198, 'apple.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'Google Project Starline: «голографический» видеочат с максимальным эффектом присутствия собеседника', 'Возможно, лучшее, что показали на прошедшей презентации.\r\nНакануне вечером прошло открытие конференции Google I/O 2021. На нём поисковый гигант показал много чего интересного: новейшие разработки в поиске и искусственном интеллекте, Android 12, новый «язык дизайна» Material You.\r\n<br>\r\nНо одним из самых интересных анонсов оказался Project Starline. Если говорить кратко, то это «голографический Zoom».\r\n<h3>Что такое Project Starline?</h3>\r\nЭто набор хардверных и программных технологий, с помощью которых пользователи могут общаться через голографическую видеосвязь.\r\nПредставьте, что смотрите сквозь своеобразное магическое окно. И через это окно вы видите другого человека: в натуральную величину и полноценном трёхмерном измерении. Вы можете максимально натуралистично общаться, жестикулировать, установить контакт.\r\n<h3>Как устроена технология?</h3>\r\nТочных данных Google не опубликовала. Известно лишь, что техногигант объединил свои наработки в компьютерном зрении, машинном обучении, пространственном звуке и компрессии в реальном времени.\r\nВместе с тем компани разработала «революционный» дисплей, создающий ощущение объёма и глубины без необходимости использовать дополнительные очки или шлемы.\r\n<h3>Как оформить заказ на Project Starline?</h3>\r\nПока что никак. Google установила наборы проекта в нескольких своих офисах. Но представители компании уже заявили, что видят будущее виртуального общения именно таким, каким его показывает Project Starline.\r\nИнтенсив «Data Science — это проще, чем кажется». День 1\r\n26 мая в 20:00, Онлайн, Беcплатно\r\ntproger.ru\r\nСобытия и курсы на tproger.ru\r\nТакже ИТ-гигант пообещал поделиться новыми подробностями о новинке до конца 2021 года.'),
(2, 'В GitHub появилась возможность загружать видео', 'Внезапно, это очень полезная функция.\r\nВ блоге GitHub появилась запись о необычном нововведении. Теперь хранилище проектов позволяет загружать в репозитории полноценные видеофайлы в формате .mp4 and .mov.\r\nТестирование новой функции началось ещё в декабре 2020 года. Сейчас же она стала доступна всем пользователям GitHub. Загружать видео можно в совершенно разных разделах сервиса: в pull request, комментариях и т.д.\r\nЗачем вообще это может быть нужно?\r\nНапример, чтобы показать разработчику баг. Теперь не придётся объяснять всё на словах либо загружать видео с ошибкой на YouTube — всё можно «провернуть» прямо внутри GitHub. Так девелоперам будет проще воспроизвести неверную работу программы.\r\nНа каких платформах новая функция доступна?\r\nПредставители сервиса заявили, что загружать видео можно как через веб-версию, так и приложения для iOS и Android. Причём мобильные устройства позволяют напрямую загружать видео, сделанные во время тестирования приложений с GitHub.');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `hash` text NOT NULL,
  `tel` bigint NOT NULL,
  `email` text NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `hash`, `tel`, `email`, `date`) VALUES
(4, '2gm7eggtbmdlsvgsnpflcbqs63tkqnu9', 8561651613, 'wewqewe@kasdas.ru', '2021-06-02 21:33:11'),
(5, 't789o3u99i0go4scp8sa90ce8589eke3', 8486512315, 'qweqw@kk.com', '2021-06-02 22:42:05'),
(8, 'vp3pm9d1ekdu42ttub5vjhigdme9lj8s', 788651651, 'sdad2@sda', '2021-06-02 23:08:09'),
(9, 'bvll4envvmk91p8qhvpt5a4pp1fmklii', 8956216, 'seerw@sad', '2021-06-03 00:17:11'),
(11, '3vsq9foq8b31oa3ajfcb1581gc50l0bq', 859562, 'asds@sda', '2021-06-03 00:24:21');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '$2y$10$7MPBsjZJQvTdH2YQh6RLg.ql7roG.LsoRuSrmTtQjXs//VstSR5j2', '82944602260b822f98ffe86.13922138');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `goods_id` (`goods_id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`goods_id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
