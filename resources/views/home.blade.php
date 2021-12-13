@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')

<div id="mainContent" class="faq">
	<div class="container">
		<h1>Начало работы с schema.org с использованием микроданных</h1>
		<p>Большинство веб-мастеров знакомы с HTML-тегами на своих страницах. Обычно теги HTML сообщают браузеру, как отображать информацию, содержащуюся в теге. Например, <code>&lt;h1&gt;Avatar&lt;/h1&gt;</code>указывает браузеру отобразить текстовую строку «Аватар» в формате заголовка 1. Однако тег HTML не дает никакой информации о том, что означает эта текстовая строка - «Аватар» может относиться к чрезвычайно успешному 3D-фильму или может относиться к типу изображения профиля - и это может затруднить поиск движки для интеллектуального отображения релевантного контента пользователю.</p>
		<p>Schema.org предоставляет набор общих словарей, которые веб-мастера могут использовать для разметки своих страниц способами, понятными для основных поисковых систем: Google, Microsoft, Yandex и Yahoo!</p>
		<p>Вы используете словарь <a href="../">schema.org</a> вместе с форматами <a href="http://en.wikipedia.org/wiki/Microdata_(HTML)">Microdata</a> , <a href="http://en.wikipedia.org/wiki/RDFa">RDFa</a> или <a href="http://en.wikipedia.org/wiki/JSON-LD">JSON-LD</a> для добавления информации к своему веб-контенту. Это руководство поможет вам быстрее освоить Microdata и schema.org, чтобы вы могли начать добавлять разметку на свои веб-страницы.</p>
		<p>Хотя в этом руководстве основное внимание уделяется <a href="http://en.wikipedia.org/wiki/Microdata_(HTML)">микроданным</a> , большинство примеров на сайте <a href="/">schema.org также</a> показывают примеры в RDFa и JSON-LD. Представленные здесь основные идеи (типы, свойства и т. Д.) Актуальны не только для микроданных - взгляните на примеры, чтобы сравнить детали.</p> <span id="top"></span>
		<ol class="toc">
			<li><a href="#microdata_how">Как разметить свой контент с помощью микроданных</a>
				<ol class="toc" type="a">
					<li><a href="#microdata_why">Зачем использовать микроданные?</a> </li>
					<li><a href="#microdata_itemscope_itemtype">itemscope и itemtype</a> </li>
					<li><a href="#microdata_itemprop">повторять</a> </li>
					<li><a href="#microdata_embedded">Встроенные предметы</a> </li>
				</ol>
			</li>
			<li><a href="#schemaorg">Использование словаря schema.org</a>
				<ol class="toc" type="a">
					<li><a href="#schemaorg_types">типы и свойства schema.org</a> </li>
					<li><a href="#schemaorg_expected">Ожидаемые типы, текст и URL-адреса</a> </li>
					<li><a href="#schemaorg_testing">Тестирование вашей разметки</a> </li>
				</ol>
			</li>
			<li><a href="#advanced">Расширенная тема: Машинно-понятные версии информации</a>
				<ol class="toc" type="a">
					<li><a href="#advanced_dates">Даты, время и продолжительность</a> </li>
					<li><a href="#advanced_enum">Перечисления и канонические ссылки</a> </li>
					<li><a href="#advanced_missing">Отсутствующая / неявная информация</a> </li>
					<li><a href="#advanced_extending">Расширение schema.org</a> </li>
				</ol>
			</li>
		</ol>
		<h2 id="microdata_how">1. Как разметить контент с помощью микроданных</h2>
		<h3 id="microdata_why">1а. Зачем использовать микроданные?</h3>
		<p>Ваши веб-страницы имеют основное значение, которое люди понимают, когда читают веб-страницы. Но поисковые системы имеют ограниченное представление о том, что обсуждается на этих страницах. Добавляя дополнительные теги в HTML-код своих веб-страниц - теги, которые говорят: «Привет, поисковая система, эта информация описывает этот конкретный фильм, или место, или человека, или видео» - вы можете помочь поисковым системам и другим приложениям лучше понять ваш контент. и отображать его в удобной и актуальной форме. Микроданные - это набор тегов, представленных в HTML5, которые позволяют вам это делать. </p>
		<h3 id="microdata_itemscope_itemtype">1b. itemscope и itemtype</h3>
		<p>Начнем с конкретного примера. Представьте, что у вас есть страница о фильме «Аватар» - страница со ссылкой на трейлер фильма, информацией о режиссере и т. Д. Ваш HTML-код может выглядеть примерно так: </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div&gt;
        &lt;h1&gt; Аватар &lt;/h1&gt;
        &lt;span&gt; Режиссер: Джеймс Кэмерон (родился 16 августа 1954 г.) &lt;/span&gt;
        &lt;span&gt; Научная фантастика &lt;/span&gt;
        &lt;a href="../movies/avatar-theatrical-trailer.html"&gt; Трейлер &lt;/a&gt;
        &lt;/div&gt;
      </pre>
    </div>
		<p>Для начала определите раздел страницы, посвященный фильму «Аватар». Для этого добавьте элемент itemscope в HTML-тег, содержащий информацию об элементе, например: </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div <strong>itemscope</strong> &gt;
        &lt;h1&gt; Аватар &lt;/h1&gt;
        &lt;span&gt; Режиссер: Джеймс Кэмерон (родился 16 августа 1954 г.) &lt;/span&gt;
        &lt;span&gt; Научная фантастика &lt;/span&gt;
        &lt;a href="../movies/avatar-theatrical-trailer.html"&gt; Трейлер &lt;/a&gt;
        &lt;/div&gt;
      </pre>
    </div>
		<p>Добавляя <code>itemscope</code>, вы указываете, что HTML-код, содержащийся в <code>&lt;div&gt;...&lt;/div&gt;</code>блоке, относится к определенному элементу. </p>
		<p>Но не всегда полезно указывать, что обсуждается какой-либо вопрос, не указывая, что это за элемент. Вы можете указать тип элемента, используя <code>itemtype</code>атрибут сразу после <code>itemscope</code>. </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div itemscope <strong>itemtype = "https://schema.org/Movie"</strong> &gt;
        &lt;h1&gt; Аватар &lt;/h1&gt;
        &lt;span&gt; Режиссер: Джеймс Кэмерон (родился 16 августа 1954 г.) &lt;/span&gt;
        &lt;span&gt; Научная фантастика &lt;/span&gt;
        &lt;a href="../movies/avatar-theatrical-trailer.html"&gt; Трейлер &lt;/a&gt;
        &lt;/div&gt;
      </pre>
    </div>
		<p>Это указывает, что элемент, содержащийся в div, на самом деле является фильмом, как определено в иерархии типов schema.org. В этом случае типы элементов предоставляются в виде URL-адресов <code>https://schema.org/Movie</code>. </p>
		<p class="backtotop" style="text-align:right;"><a href="#top">Вернуться наверх</a></p>
		<h3 id="microdata_itemprop">1c. повторять</h3>
		<p>Какую дополнительную информацию мы можем предоставить поисковым системам о фильме «Аватар»? У фильмов есть такие интересные свойства, как актеры, режиссер, рейтинги. Чтобы пометить свойства элемента, используйте <code>itemprop</code>атрибут. Например, чтобы идентифицировать режиссера фильма, добавьте <code>itemprop="director"</code>к элементу, содержащему имя режиссера. (Полный список всех свойств, которые вы можете связать с фильмом, можно найти на https://schema.org/Movie.) </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div itemscope itemtype = "https://schema.org/Movie"&gt;
        &lt;h1 <strong>itemprop = "name"</strong> &gt; Аватар &lt;/h1&gt;
        &lt;span&gt; Режиссер: &lt;span <strong>itemprop = "Director"</strong> &gt; Джеймс Кэмерон &lt;/span&gt; (родился 16 августа 1954 г.) &lt;/span&gt;
        &lt;span <strong>itemprop = "genre"</strong> &gt; Научная фантастика &lt;/span&gt;
        &lt;a href="../movies/avatar-theatrical-trailer.html" <strong>itemprop="trailer"&gt;</strong> Трейлер &lt;/a&gt;
        &lt;/div&gt;
      </pre>
    </div>
		<p>Обратите внимание, что мы добавили дополнительные <code>&lt;span&gt;...&lt;/span&gt;</code>теги, чтобы прикрепить <code>itemprop</code> атрибуты к соответствующему тексту на странице. <code>&lt;span&gt;</code>Теги не меняют способ отображения страниц в веб-браузере, поэтому они являются удобным элементом HTML для использования <code>itemprop</code>. </p>
		<p>Теперь поисковые системы могут понимать не только то, что http://www.avatarmovie.com - это URL-адрес, но также и то, что это URL-адрес трейлера научно-фантастического фильма «Аватар», режиссером которого являлся Джеймс Кэмерон. </p>
		<p class="backtotop"><a href="#top">Вернуться наверх</a></p>
		<h3 id="microdata_embedded">1г. Встроенные предметы</h3>
		<p>Иногда значение свойства элемента может быть другим элементом со своим собственным набором свойств. Например, мы можем указать, что режиссер фильма - это элемент типа Person, а Person имеет свойства <code>name</code>и <code>birthDate</code>. Чтобы указать, что значением свойства является другой элемент, вы начинаете новое <code>itemscope</code>сразу после соответствующего <code>itemprop</code>. </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div itemscope itemtype = "https://schema.org/Movie"&gt;
        &lt;h1 itemprop = "name"&gt; Аватар &lt;/h1&gt;
        &lt;div <strong>itemprop = "Director" itemscope itemtype = "https://schema.org/Person"</strong> &gt;
        Режиссер: &lt;span itemprop = "name"&gt; Джеймс Кэмерон &lt;/span&gt; (родился &lt;span <strong>itemprop = "BirthDate"</strong> &gt; 16 августа 1954 &lt;/span&gt;)
        &lt;/div&gt;
        &lt;span itemprop = "genre"&gt; Научная фантастика &lt;/span&gt;
        &lt;a href="../movies/avatar-theatrical-trailer.html" itemprop="trailer"&gt; Трейлер &lt;/a&gt;
        &lt;/div&gt;
      </pre>
    </div>
		<p class="backtotop"><a href="#top">Вернуться наверх</a></p>
		<h2 id="schemaorg">2. Использование словаря schema.org</h2>
		<h3 id="schemaorg_types">2а. типы и свойства schema.org</h3>
		<p>Не все веб-страницы посвящены фильмам и людям - в дополнение к типам Movie и Person, описанным в разделе 1, schema.org описывает множество других типов элементов, каждый из которых имеет свой собственный набор свойств, которые можно использовать для описания элемент. </p>
		<p>Широчайший тип элемента является <a href="../Thing">вещь</a> , которая имеет четыре свойства: <code>name</code>, <code>description</code>, <code>url</code>, и <code>image</code>. Более конкретные типы имеют общие свойства с более широкими типами. Например, <a href="../Place">Место</a> - это более конкретный тип Вещи, а <a href="../LocalBusiness">Местный бизнес</a> - более конкретный тип места. Более конкретные элементы наследуют свойства своих родителей. (На самом деле LocalBusiness - это более конкретный тип места <i>и</i> более конкретный тип организации, поэтому он наследует свойства от обоих родительских типов.) </p>
		<p>Вот набор часто используемых типов предметов: </p>
		<ul>
			<li>Творческие работы: <a href="../CreativeWork">CreativeWork</a> , <a href="../Book">Book</a> , <a href="../Movie">Movie</a> , <a href="../MusicRecording">MusicRecording</a> , <a href="../Recipe">Recipe</a> , <a href="../TVSeries">TVSeries</a> ... </li>
			<li>Встроенные нетекстовые объекты: <a href="../AudioObject">AudioObject</a> , <a href="../ImageObject">ImageObject</a> , <a href="../VideoObject">VideoObject</a></li>
			<li><a href="../Event">Мероприятие</a></li>
			<li><a href="../Organization">Организация</a></li>
			<li><a href="../Person">Человек</a></li>
			<li><a href="../Place">Место</a> , <a href="../LocalBusiness">местный бизнес</a> , <a href="../Restaurant">ресторан</a> ... </li>
			<li><a href="../Product">Продукт</a> , <a href="../Offer">предложение</a> , <a href="../AggregateOffer">совокупное </a><a href="../Offer">предложение</a>
				<a href="../AggregateOffer"></a>
			</li>
			<li><a href="../Review">Обзор</a> , <a href="../AggregateRating">AggregateRating</a></li>
		</ul>
		<p>Вы также можете увидеть <a href="full.html">полный список всех типов предметов</a> , перечисленных на одной странице. </p>
		<p class="backtotop"><a href="#top">Вернуться наверх</a></p>
		<h3 id="schemaorg_expected">2b. Ожидаемые типы, текст и URL-адреса</h3>
		<p>Вот несколько примечаний, которые следует учитывать при добавлении разметки schema.org на свои веб-страницы. </p>
		<ul>
			<li><strong>Лучше больше, кроме скрытого текста. </strong>В общем, чем больше контента вы разметите, тем лучше. Однако, как правило, следует размечать только тот контент, который виден людям, посещающим веб-страницу, а не контент в скрытых div или других скрытых элементах страницы. </li>
			<li><strong>Ожидаемые типы против текста. </strong>Просматривая типы schema.org, вы заметите, что многие свойства имеют «ожидаемые типы». Это означает, что значение свойства может быть встроенным элементом (см. Раздел 1d: встроенные элементы). Но это не является обязательным требованием - можно использовать обычный текст или URL-адрес. Кроме того, всякий раз, когда указан ожидаемый тип, также можно встраивать элемент, который является дочерним типом ожидаемого типа. Например, если ожидаемый тип - «Место», также можно встраивать LocalBusiness. </li>
			<li><strong>Используя свойство url. </strong>Некоторые веб-страницы посвящены определенному элементу. Например, у вас может быть веб-страница об одном человеке, которую вы можете разметить с помощью типа элемента «Человек». На других страницах есть набор описанных предметов. Например, на сайте вашей компании может быть страница со списком сотрудников со ссылкой на страницу профиля каждого человека. Для таких страниц с коллекцией элементов вы должны разметить каждый элемент отдельно (в данном случае как серию лиц) и добавить свойство url к ссылке на соответствующую страницу для каждого элемента, например: 
        <div class="h-100 p-1 text-white bg-dark rounded-2">
          <pre>
            &lt;div itemscope itemtype = "https://schema.org/Person"&gt;
            &lt;a href="alice.html" <strong>itemprop="url"&gt;</strong> Элис Джонс &lt;/a&gt;
            &lt;/div&gt;
            &lt;div itemscope itemtype = "https://schema.org/Person"&gt;
            &lt;a href="bob.html" <strong>itemprop="url"&gt;</strong> Боб Смит &lt;/a&gt;
            &lt;/div&gt;
          </pre>
        </div>
      </li>
		</ul>
		<p class="backtotop"><a href="#top">Вернуться наверх</a></p>
		<h3 id="schemaorg_testing">2c. Тестирование вашей разметки</h3>
		<p>Подобно тому, как веб-браузер важен для тестирования изменений в макете веб-страницы, а компилятор кода важен для тестирования кода, который вы пишете, вам также следует протестировать разметку schema.org, чтобы убедиться, что она реализована правильно. Google предоставляет инструмент для тестирования расширенных фрагментов кода, который можно использовать для проверки разметки и выявления ошибок. </p>
		<h2 id="advanced">3. Расширенная тема: машинно-понятные версии информации.</h2>
		<p>Многие страницы могут быть описаны с использованием только <code>itemscope</code>, <code>itemtype</code>и <code>itemprop</code>атрибуты (описано в разделе 1) вместе с типами и свойствами , определенными на schema.org (описано в разделе 2). </p>
		<p>Однако иногда машине трудно понять свойство элемента без дополнительного устранения неоднозначности. В этом разделе описывается, как вы можете предоставить машинно-понятные версии информации при разметке ваших страниц. </p>
		<ul>
			<li>Даты, время и продолжительность: используйте <code>time</code>тег с<code>datetime</code></li>
			<li>Перечисления и канонические ссылки: используйте <code>link</code>тег с<code>href</code></li>
			<li>Отсутствующая / неявная информация: используйте <code>meta</code>тег с <code>content</code>. </li>
		</ul>
		<p class="backtotop"><a href="#top">Вернуться наверх</a></p>
		<h3 id="advanced_dates">3а. Даты, время и продолжительность: используйте тег времени с datetime</h3>
		<p>Машине бывает трудно понять дату и время. Считайте дату «01.04.11». Означает ли это 11 января 2004 года? 4 января 2011 г.? Или 1 апреля 2011 года? Чтобы даты были однозначными, используйте <code>time</code>тег вместе с <code>datetime</code>атрибутом. Значением <code>datetime</code>атрибута является дата, указанная в <code>YYYY-MM-DD</code>формате. В приведенном ниже HTML-коде дата однозначно указывается как 1 апреля 2011 г. </p> <pre><strong>&lt;time datetime = "2011-04-01"&gt;</strong> 01.04.11 <strong>&lt;/time&gt;</strong></pre>
		<p>Вы также можете указать время в пределах дня, используя формат <code>hh:mm</code>или <code>hh:mm:ss</code>. Время начинается с буквы <code>T</code>и может указываться вместе с датой, например: </p> <pre><strong>&lt;time datetime = "2011-05-08T19: 30"&gt;</strong> 8 мая, 19:30 <strong>&lt;/time&gt;</strong></pre>
		<p>Давайте посмотрим на это в контексте. Вот HTML-код, описывающий концерт, который состоится 8 мая 2011 г. Разметка события включает название мероприятия, описание и дату мероприятия. </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div <strong>itemscope itemtype = "https://schema.org/Event"</strong> &gt;
        &lt;div <strong>itemprop = "name"</strong> &gt; Спинальный тап &lt;/div&gt;
        &lt;span <strong>itemprop = "description"</strong> &gt; Одна из самых громких групп на свете воссоединяется для незабываемого двухдневного шоу. &lt;/span&gt;
        Дата события:
        <strong>&lt;time itemprop = "startDate" datetime = "2011-05-08T19: 30"&gt;</strong> 8 мая, 19:30 <strong>&lt;/time&gt;</strong> 
        &lt;/div&gt;
      </pre>
    </div>
		<p>Аналогичным образом можно указать длительности с помощью <code>time</code>тега с <code>datetime</code>атрибутом. Продолжительность начинается с буквы <code>P</code>(расшифровывается как «период»). Вот как можно указать время приготовления по рецепту 1,5 часа: </p> <pre><strong>&lt;time</strong> itemprop = "cookTime" <strong>datetime = "PT1H30M"</strong> &gt; 1 1/2 часа <strong>&lt;/time&gt;</strong></pre>
		<p><code>H</code>используется для обозначения количества часов и <code>M</code>используется для обозначения количества минут. </p>
		<p>Стандарты даты, времени и продолжительности указаны в <a href="http://en.wikipedia.org/wiki/ISO_8601" target="new">стандарте даты и времени ISO 8601</a> . </p>
		<p class="backtotop"><a href="#top">Вернуться наверх</a></p>
		<h3 id="advanced_enum">3b. Перечисления и канонические ссылки: используйте ссылку с href</h3>
		<h4 id="advanced_enum_enum">Перечисления</h4>
		<p>Некоторые свойства могут принимать только ограниченный набор возможных значений. Программисты часто называют это «перечислениями». Например, интернет-магазин с товаром на продажу может использовать тип элемента <a href="https://schema.org/Offer">Предложение,</a> чтобы указать подробности предложения. <code>availability</code>Свойство обычно может иметь один из только несколько возможно с ценностно <code>In stock</code>, <code>Out of stock</code>, <code>Pre-order</code>и так далее. Подобно тому, как типы элементов указываются как URL-адреса, возможные значения для перечисления на schema.org также могут быть указаны как URL-адреса. </p>
		<p>Вот товар для продажи, помеченный типом предложения и соответствующими свойствами: </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div itemscope itemtype = "https://schema.org/Offer"&gt;
        &lt;span itemprop = "name"&gt; Blend-O-Matic &lt;/span&gt;
        &lt;span itemprop = "price"&gt; 19,95 доллара США &lt;/span&gt;
        &lt;span itemprop = "availability"&gt; Доступно сегодня! &lt;/span&gt;
        &lt;/div&gt;
      </pre>
    </div>
		<p>А вот тот же элемент, но с помощью <code>link</code>и, <code>href</code>чтобы однозначно указать доступность как одно из допустимых значений: </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div itemscope itemtype = "https://schema.org/Offer"&gt;
        &lt;span itemprop = "name"&gt; Blend-O-Matic &lt;/span&gt;
        &lt;span itemprop = "price"&gt; 19,95 доллара США &lt;/span&gt;
        <strong>&lt;link itemprop = "availability" href = "https://schema.org/InStock" /&gt;</strong> Доступно сегодня!
        &lt;/div&gt;
      </pre>
    </div>
		<p>Schema.org предоставляет перечисления для нескольких свойств - обычно там, где есть ограниченное количество типичных значений для свойства, есть соответствующее перечисление, указанное в schema.org. В этом случае возможные значения <code>availability</code>указаны в <a href="https://schema.org/ItemAvailability">ItemAvailability</a> . </p>
		<h4 id="advanced_canonical">Канонические ссылки</h4>
		<p>Обычно ссылки указываются с помощью <code>&lt;a&gt;</code>элемента. Например, следующие HTML-ссылки на страницу Википедии, посвященную книге «Над пропастью во ржи». </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div itemscope itemtype = "https://schema.org/Book"&gt;
        &lt;span itemprop = "name"&gt; Над пропастью во ржи &lt;/span&gt; -
        Автор &lt;span itemprop = "author"&gt; Дж. Д. Сэлинджер &lt;/span&gt;
        Вот &lt;a <strong>itemprop="url"</strong> href="http://en.wikipedia.org/wiki/The_Catcher_in_the_Rye"&gt; страница книги &lt;/a&gt; в Википедии.
        &lt;/div&gt;
      </pre>
    </div>
		<p>Как видите, <code>itemprop="url"</code>может использоваться для указания ссылки на страницу на другом сайте (в данном случае в Википедии), где обсуждается тот же элемент. Ссылки на сторонние сайты могут помочь поисковым системам лучше понять элемент, который вы описываете на своей веб-странице. </p>
		<p>Однако вы можете не захотеть добавлять видимую ссылку на свою страницу. В этом случае <code>link</code>вместо этого можно использовать элемент, как показано ниже: </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div itemscope itemtype = "https://schema.org/Book"&gt;
        &lt;span itemprop = "name"&gt; Над пропастью во ржи &lt;/span&gt; -
        <strong>&lt;link itemprop = "url" href = "http://en.wikipedia.org/wiki/The_Catcher_in_the_Rye" /&gt;</strong>
        Автор &lt;span itemprop = "author"&gt; Дж. Д. Сэлинджер &lt;/span&gt;
        &lt;/div&gt;
      </pre>
    </div>
		<p class="backtotop"><a href="#top">Вернуться наверх</a></p>
		<h3 id="advanced_missing">3c. Отсутствующая / неявная информация: используйте метатег с содержимым</h3>
		<p>Иногда на веб-странице есть информация, которую было бы полезно разметить, но эта информация не может быть размечена из-за того, как она отображается на странице. Информация может быть передана в изображении (например, изображении, используемом для представления оценки 4 из 5) или Flash-объекте (например, длительности видеоклипа), или это может подразумеваться, но не указываться явно. на странице (например, валюта цены). </p>
		<p>В этих случаях используйте <code>meta</code>тег вместе с <code>content</code>атрибутом, чтобы указать информацию. Рассмотрим этот пример - на изображении пользователи получают оценку 4 из 5 звезд: </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div itemscope itemtype = "https://schema.org/Offer"&gt;
        &lt;span itemprop = "name"&gt; Blend-O-Matic &lt;/span&gt;
        &lt;span itemprop = "price"&gt; 19,95 доллара США &lt;/span&gt;
        &lt;img src = "four-stars.jpg" /&gt;
        На основе 25 оценок пользователей
        &lt;/div&gt;
      </pre>
    </div>
		<p>Вот снова пример с размеченной рейтинговой информацией. </p> 
    <div class="h-100 p-1 text-white bg-dark rounded-2">
      <pre>
        &lt;div itemscope itemtype = "https://schema.org/Offer"&gt;
        &lt;span itemprop = "name"&gt; Blend-O-Matic &lt;/span&gt;
        &lt;span itemprop = "price"&gt; 19,95 доллара США &lt;/span&gt;
        &lt;div <strong>itemprop = "reviews" itemscope itemtype = "https://schema.org/AggregateRating"</strong> &gt;
        &lt;img src = "four-stars.jpg" /&gt;
        <strong>&lt;meta itemprop = "ratingValue" content = "4" /&gt; </strong>
        <strong>&lt;meta itemprop = "bestRating" content = "5" /&gt;</strong> 
        На основе &lt;span <strong>itemprop = "ratingCount"</strong> &gt; 25 &lt;/span&gt; оценок пользователей
        &lt;/div&gt;
        &lt;/div&gt;
      </pre>
    </div>
		<p>Эту технику следует использовать с осторожностью. Используйте только <code>meta</code>с контентом для информации, которая не может быть размечена другим способом. </p>
		<p class="backtotop"><a href="#top">Вернуться наверх</a></p>
		<h3 id="advanced_extending">3d. Расширение schema.org</h3>
		<p>У большинства сайтов и организаций не будет причин для расширения schema.org. Однако schema.org предлагает возможность указывать дополнительные свойства или подтипы к существующим типам. Если вы заинтересованы в этом, прочитайте больше о <a href="https://schema.org/docs/extension.html">механизме расширения schema.org</a> . </p>
		<br>
		<br>
		<br> 
  </div>
</div>
@endsection
