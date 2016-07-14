Инструкция.

Приложение организовано в соответствии с паттерном MVC.
Главная папка Application - в ней находятся модели, представление и контроллеры.
Точка входа - файл index.php в корне сайта. Данный файл запускает автозагрузку (файл autoload.php).

Пространство имен начинается с App - то есть папка Application (таковы настройки автозагрузки).

Для установки соединения с базой данных служит класс App/Db. Используется PDO. Конфиг - файл где задаются параметры для
соединения с базой данных находится по адресу files/config.php.

/* Получение данных из базы */

Реализован паттерн ORM ActiveRecord. Базовая модель - абстрактный класс App\Model. Данный класс содержит публичный метод
$id который соответствует полю id в таблице базы данных (у любой таблицы должен быть такое поле тип SERIAL). Кроме того,
базовая модель содержит методы для работы с данными, полностью реализую CRUD (create, read, update, delete).
Классы, создаваемые в пространстве имен App\Models представляют собой ничто иное, как сущности таблиц баз данных.
Всего создано 4 модели, что соответствует 4-м таблицам в базе данных.

Основная таблица perfomance содержит поля title, lead, link (ссылка на фото), а также внешние ключи time_id, scene_id,
author_id ссылающиеся на данные в таблицах date, scene, author. В классе App\Models\Perfomance созданы связи с тремя
другими таблицами, таким образом, чтобы можно было выводить данные из этих таблиц. Для создания связей используются
магические методы __get и __isset.

Для получения данных из базы необходимо в контроллере вызвать метод соответствущей модели findAll() - все строки либо
findById($id) - одна строка.

/* Контроллер */

Файлы контроллера лежат в пространстве имен \App\Controllers
Базовый контроллер задаёт параметры, таким образом что название каждого контроллера должен обязательно начинаться со
слова action . Название. Всего был создан 1 контроллер Pf и в нём 2 экшна actionAll() (по умолчанию) и actionPerfomance().

За роутинг отвечает класс App\SefRouter. Адреса можно писать следующим образом Имя_контроллера/Экшн а также
Папка_контроллеров/Имя_контроллера/Экшн также поддерживаются гет запросы, например Папка_контроллеров/Имя_контроллера/Экшн?id=1.

Кроме того, в базовом контроллере создан объект представления (App\View) для улобства рендеринга.

/* Представление */

За представление отвечает класс App\View. Данный класс содержит магические методы __set, __get, __isset. Это позволяет
создавать свойства для представления прямо в контроллере (псевдосвойства). При этом в шаблон приходит переменная,
совпадающая по имени с передаваемым свойством и содержащая значение этого свойства (массив или объект).

За вывод шаблонов отвечает шаблозатор Twig. Это абсолютно крутейшая штука, которая позволяет писать html код всего один
раз, а дальше работает наследование. Кроме того, Twig генерирует кеш (папка Application/cache). Отключить кеш можно
в файле App/View, строка 44. Закомментировать второй аргумент при создании объекта Twig_Environment.
Шаблоны находятся в папке Application/templates/html. Сами страницы (2 странички, которые нужно было реализовать в задании)
это файлы index.html и perfomance.html. Оба шаблона наследуются от базового шаблона front.html, находящегося по адресу
Application/templates/layouts.
Несмотря на то, что шаблоны находятся в html формате, внутри них использется полноценный язык программирования twig.
Он во многом похож на PHP, но по синтаксису ближе к java-скрипту. т.е. переменная не начинается со знака $, а просто имя.
Также есть оператор точка, который заменяет ->, либо образение к элементу массива $array($a). Echo заменено на {{ }}.
Внутрь этих скобок вставляется переменная, которую мы хотим вывести. Можно создавать циклы, применять фильтры и функции.
Кроме того, в классе App/View в методе RenderTwig() добавлен самописный фильтр, которые преобразует английские названия
дней недели в русские, что необходимо для афишы.

Первая страничка афиша /pf/all выводит список всех спектакле. Было добавлено в БД всего 6 спектаклей. Заголовки спектаклей
представляют собой ссылки, по которым можно перейти на вторую страницу, представляющую собой развернутое описание спектакля.
адрес каждой такой странички /controllers/pf/all/?id=номер спектакля (в БД). Страничка содержит Фотографию (сслки в БД
брались с главного сайта Театра Ермоловой для простоты). Также там есть заголовок спектакля, и его описание.
Опять же для удобства в базу данных описание к спектаклям клалось вместе с html тегами. Это довольно распространённый подход,
например когда в админке используются WYSIWIG редакторы. При этом по умолчанию Twig применяет функцию htmlchars() и теги
выводятся как есть, вместе со всем содержимым. Чтобы этого не происходило, мы применили фильтр raw.

Остальной контент, который есть на страницы статичный, просто был сделан копипаст с сайта театра Ермоловой.
Но всему можно легко придать динамики, создав дополнительные таблицы в БД, модели для них и реализацию в конроллере и
шаблонах.

Ну вот в общем то и всё, что я хотел рассказать.