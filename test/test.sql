-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 28 2018 г., 16:24
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `bigtext` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`article_id`, `image`, `title`, `date`, `text`, `bigtext`, `type`) VALUES
(1, 'article1.jpg', 'Какой он, современный русский язык?', '2018-01-01', 'Сегодня много говорят о том, что русский язык в опасности, поскольку он сильно обеднел, а в речевом обиходе – англоязычная лексика...', 'Сегодня много говорят о том, что русский язык в опасности, поскольку он сильно обеднел, а в речевом обиходе – англоязычная лексика. Говорят, что язык нужно срочно спасать, иначе он утратит самобытность.\r\n    Звонят в колокола и лингвисты других стран. Французский язык давно не пополняется новыми словами, а многие его наречия попросту исчезли. Ученые считают, что ему грозит даже большая опасность, чем русскому. В немецком языке появилось столько иностранных слов, что еще 100 лет назад по этой причине был приостановлен процесс преобразования орфографии данного языка.\r\n    Что же касается русского языка: тут преобладает иностранная лексика, многочисленные жаргонизмы и термины, заимствованные из Америки. А интернет полностью погрузился во всякие «тайтлах» (title), буки (book) и т.п. Означает ли это вымирание русского языка? А может быть он, наоборот, переживает расцвет?\r\n    Еще Марина Цветаева в свое время тонко подметила такое свойство русского языка, как «уступчивость». Да, наш язык невероятно гибкий, податливый. Русский язык мгновенно русифицирует иностранные слова, наращивая на них всевозможные приставки и суффиксы, имеет множество различных диалектов. Русский язык находится в гораздо более выгодном положении, чем немецкий или французский.\r\n    Языковый взаимообогащающий обмен происходит постоянно. Нужно понимать, что это нормальное, произвольно происходящее явление. Впитывая в себя иноязычные слова, придавая им своё, русское звучание, язык «живет», развивается, обогащается. Неологизмы становятся естественной его частью. «Велик и могуч Русский язык!» - недаром писал Л.Н. Толстой.\r\n    Конечно, к тем процессам, которые сегодня происходят в русском языке, нельзя относиться равнодушно и безучастно. После долгих лет обособленности Россия вдруг стала доступна для влияния западной культуры. В язык буквально «хлынули» новые слова.\r\n    Многие россияне охотно повторяют новомодные речевые обороты, не понимая, порой, их истинного смысла. Речь от этого становится бессмысленной. Возникают грамматические ошибки. Но не будем слишком строги. В своё время Александр Сергеевич Пушкин подметил: «Как уст румяных без улыбки, без грамматической ошибки я русской речи не люблю».\r\n    Что по-настоящему тревожит, так это выпадение из повседневной речи таких чистых глубоких, имеющих исконно русские корни, слов как «добронравие», «агнец», «град». А ведь какие мелодичные, с добрым смыслом слова! «Забывание» народом подобных слов обезличивает язык, отнимает у него индивидуальность. На Западе число слов в словарях стремительно увеличивается за счет терминов техники и науки. Россия же в этом плане существенно отстает.\r\n    Лауреат Нобелевской премии Александр Солженицын писал: «Лучший способ обогащения языка – это восстановление прежде накопленных, а потом утерянных богатств». Может, настало время к этому прислушаться? Русский язык обладает множеством богатств. Нужно научиться только грамотно и с толком использовать эти ресурсы.\r\n    Всякому носителю русского языка следует с гордостью осознавать, что именно русская литература – самая читаемая в мире на сегодняшний день. Именно произведения русских классиков столь высоко ценятся среди читателей разных стран. В них заложены языковые нормы и традиции, которые следует знать и беречь!', 'Новости'),
(2, 'article2.jpg', 'Процесс возрастания интереса к русскому языку в мире', '2018-01-02', 'Еще совсем недавно, всего лишь каких-то 30 лет назад около 350 миллионов человек говорили на русском языке...', 'Еще совсем недавно, всего лишь каких-то 30 лет назад около 350 миллионов человек говорили на русском языке. Но после распада Советского союза эта цифра стала уменьшаться стремительными темпами. Уже к 2000 году на русском языке говорило на 50 миллионов человек меньше.\r\n    И только с недавнего времени мы можем говорить о возросшем интересе к русскому языку. Сегодня его изучают в школах и университетах как ближнего, так и дальнего зарубежья.\r\n    Такая положительная тенденция связана с развитием бизнеса и сотрудничества России со странами СНГ, созданием международных компаний. Немало русских туристов выезжают сегодня за рубеж отдыхать или в коммерческих целях. Наблюдается и большой поток иностранных туристов, желающих посетить Россию для налаживания деловых отношений и с целью познакомиться с традициями и культурой русского народа. Все чаще иностранные гости предпочитают использовать для коммуникации именно русский язык.\r\n    Во многих странах мира процветают и русские диаспоры. Например, в Болгарии проживает примерно 12 тысяч российских граждан, а в Азербайджане – около 13 тысяч. Поэтому мы можем говорить не только о популярности русского языка, но и о его значимости. Все больше людей из стран СНГ и дальнего зарубежья признают необходимость изучения этого языка. С каждым годом иностранных граждан, желающих жить, обучаться и работать в России становится все больше.\r\n    Опрос в 12 новых независимых странах СНГ, который провели в 2008 году, показал, что общение на русском языке возможно для большей части населения опрашиваемых регионов. Среди них были и те страны, в которых русским языком владело подавляющее большинство населения. Например, на Украине это 65%, в Казахстане – 63%, в а Беларуси – 77%. В Киргизии, Молдове, Латвии, Эстонии примерно четверть населения свободно говорит на русском и пользуется им для общения. В Грузии, Армении, Азербайджане, Таджикистане и Литве русским языком владеет не больше 30% всего населения.\r\n    Немало также и стран СНГ, в которых были приняты решения в пользу защиты русского языка в общеобразовательных учреждениях, в связи с чем увеличилось количество людей, изучающих этот язык. В Азербайджане, например, такие изменения привели к тому, что из этой страны значительно уменьшился отток русскоязычного населения. В русских секторах обучается примерно 7% всех учащихся страны (это около 109 тыс.).\r\n    Министерство образования и науки России совместно с Министерством образования Азербайджана запустили экспериментальный проект, целью которого является углубленное изучение русского языка. Этот проект уже реализуется в 50 школах Азербайджана. В образовательных учреждениях этой страны также было принято решение увеличить количество уроков русского языка как иностранного в два раза.\r\n    В Казахстане более 40% всех учащихся обучаются на русском языке. В других школах русский язык является обязательным предметом в программе. В Киргизии количество учеников, обучающихся русскому языку, значительно увеличилось и с каждым годом продолжает расти.\r\n    В Армении существуют определенные нормы, которые устанавливают необходимый уровень знаний русского языка для поступления в ВУЗы страны. Студенты Армении могут сдавать на выбор английский или русский язык. В общеобразовательных учреждениях этой страны русскому языку придают большое значение, о чем свидетельствуют показатели количества учителей в армянских школах:\r\n    - преподавателей русского языка - 51% (1500) всех учителей;\r\n    - преподавателей английского языка – 30% (930);\r\n    - преподавателей французского языка – 10% (350);\r\n    - преподавателей немецкого языка – 9% (320).', 'Блог'),
(3, 'article3.jpg', 'Почему нужно изучать русский язык?', '2018-01-03', 'Зачем нужно изучать русский язык? Этим вопросом озадачиваются не только иностранцы, приступающие к освоению русского языка...', 'Зачем нужно изучать русский язык? Этим вопросом озадачиваются не только иностранцы, приступающие к освоению русского языка. Некоторые россияне также недоумевают, зачем им нужно знать непростые правила грамматики, к чему учиться правильно ставить ударения, когда и без этого вполне можно обойтись.\r\n    В защиту русского языка можно привести довольно весомые аргументы. Для иностранца основательными причинами изучения именно русского языка будут пять основных факторов:\r\n    1. Именно русский язык входит, помимо французского и английского, в тройку мировых языков, на которых можно прочесть все существующие международные стандарты.\r\n    2. Русский язык - это один из самых мелодичных и красиво звучащих языков в мире.\r\n    3. Знание русского языка делает возможным чтение в оригинале научных трактатов великих русских ученых и произведений литературных классиков.\r\n    4. На русском языке говорят в России – стране, превосходящей по площади любые другие страны земного шара.\r\n    5. Именно для иностранцев серьезным аргументом будет то, что русский язык, наряду с английским, применяется для общения на международной космической станции.\r\n    Начавшего изучать русский иностранца следует заранее предупредить о сложности языка. То, что кажется обычным для любого русскоязычного, слушающего этот язык с пеленок, для иностранцев представляет серьезную трудность. В русском языке значительно больше правил, которые надлежит выучить, чем в английском или немецком.\r\n    Но самое удивительное – это то, что человека, проживающего в России и являющегося носителем языка, порой труднее, чем иностранца, убедить в том, что русский язык нужно изучать и знать. Многие россияне довольствуются вместо красивой русской речи маловразумительной смесью из вульгаризмов и междометий с вкраплениями жаргонных словечек и неприемлемых речевых оборотов.\r\n    Чтобы переубедить такого человека, следует дать ему услышать собственную речь, записав ее перед этим на диктофон. Нужно предоставить человеку возможность не только прослушать собственную несуразную болтовню, но и сравнить ее с речью профессионального чтеца или актера. Для этого достаточно проиграть запись чтения классического рассказа или стихотворения. Возможно, уловив яркую разницу, человек поймет, насколько он нуждается в глубоком изучении родного языка.\r\n    Многие объясняют ненужность грамотности присутствием в компьютерных программах функции проверки орфографии. Мол, компьютер всё сам проверит. Конечно, текстовые редакторы и браузеры такую проверку делают. Но и их базы включают далеко не все слова русского языка, что зачастую может вызвать немалые проблемы.\r\n    А на мобильных телефонах обычно вообще нет таких функций. А сегодня многие выходят в Интернет и общаются именно с помощью мобильной связи. Так, неправильно введенное слово система Т9 просто не распознает. Поэтому написать текст при помощи такой техники малограмотному человеку будет весьма затруднительно.\r\n    Напрашивается вывод, что в век компьютеризации быть грамотным также очень важно, как и раньше. Если у малограмотного человека возникает вопрос публикации своих статей где-либо, вряд ли он найдет издательство, которому понравится исправлять его бесчисленные ошибки – либо за такую услугу придется заплатить немало денег. Редактору, порой, проще отказать такому автору.\r\n    Так, может, стоит выучить правила родного языка, чтобы не осложнять жизнь ни себе, ни другим?', 'Новости');

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `about_author` text NOT NULL,
  `loginn` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`author_id`, `name`, `last_name`, `image`, `date_of_birth`, `about_author`, `loginn`, `pass`, `role`) VALUES
(1, 'Иван', 'Иванов', 'avatar1.jpg', '2018-10-19', 'Закончил школу с золотой медалью. Университет с красным дипломом.', 'login1', 'pass1', 1),
(2, 'Пётр', 'Петров', 'avatar2.jpg', '2018-10-16', 'Обучался на филологическом факультете государственного университета, а затем и в магистратуре. Имею диплом с отличием.', 'login2', 'pass2', 2),
(3, 'Семён', 'Семенов', 'avatar3.jpg', '2018-10-28', 'Получил высшее юридическое образование в юридическом институте.', 'login3', 'pass3', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD UNIQUE KEY `article_id` (`article_id`),
  ADD UNIQUE KEY `article_id_2` (`article_id`);

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
