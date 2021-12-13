@extends('layouts.app')

@section('title')Person@endsection

@section('content')
<div id="mainContent">
	<div class="container">
		<div id="infoblock">
			<div id="infohead">
				<h1>Person</h1> <em>A Schema.org Type</em>
				<br> </div>
			<div class="superPaths"> <a href="/Thing" class="core" title="Thing">Thing</a> &gt; <a href="/Person" class="core" title="Person">Person</a>
				<br> </div>
			<div class="description">A person (alive, dead, undead, or fictional).</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Имущество</th>
						<th>Ожидаемый тип</th>
						<th>Описание</th>
					</tr>
				</thead>
				<tbody>
					<tr class="supertype">
						<th class="supertype-name" colspan="3">Недвижимость от&nbsp;человека</th>
					</tr>
					<tr>
						<th class="prop-nam"><code>additionalName</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Дополнительное имя для человека, может использоваться для отчества.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>address</code></th>
						<td class="prop-ect">Почтовый адрес&nbsp;&nbsp; или
							<br />текст</td>
						<td class="prop-desc">Физический адрес предмета.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>affiliation</code></th>
						<td class="prop-ect">Организация</td>
						<td class="prop-desc">Организация, с которой связан этот человек.&nbsp;Например, школа / университет, клуб или команда.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>alumniOf</code></th>
						<td class="prop-ect">Образовательная&nbsp;организация&nbsp;&nbsp; или
							<br />организация</td>
						<td class="prop-desc">Организация, выпускником которой является человек.
							<br />Обратное свойство:&nbsp;выпускники</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>award</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Награда, выигранная этим предметом или за этот предмет.&nbsp;Заменяет&nbsp;награды&nbsp;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>birthDate</code></th>
						<td class="prop-ect">Дата</td>
						<td class="prop-desc">Дата рождения.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>birthPlace</code></th>
						<td class="prop-ect">Место</td>
						<td class="prop-desc">Место, где родился человек.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>brand</code></th>
						<td class="prop-ect">Бренд&nbsp;&nbsp; или
							<br />организация</td>
						<td class="prop-desc">Бренд (ы), связанный с продуктом или услугой, или бренд (ы), поддерживаемый организацией или деловым человеком.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>callSign</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Позывной&nbsp;, используемый в радиовещательной и радиосвязи для выявления людей, радио- и телевизионных станций, или транспортных средств.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>children</code></th>
						<td class="prop-ect">Человек</td>
						<td class="prop-desc">Ребенок человека.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>colleague</code></th>
						<td class="prop-ect">Человек&nbsp;&nbsp; или
							<br />URL</td>
						<td class="prop-desc">Коллега человека.&nbsp;Заменяет&nbsp;коллег&nbsp;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>contactPoint</code></th>
						<td class="prop-ect">Точка связи</td>
						<td class="prop-desc">Контактное лицо для человека или организации.&nbsp;Заменяет&nbsp;contactPoints&nbsp;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>deathDate</code></th>
						<td class="prop-ect">Дата</td>
						<td class="prop-desc">Дата смерти.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>deathPlace</code></th>
						<td class="prop-ect">Место</td>
						<td class="prop-desc">Место, где умер человек.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>duns</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Номер Dun &amp; Bradstreet DUNS для идентификации организации или делового человека.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>email</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Адрес электронной почты.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>familyName</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Фамилия.&nbsp;В США - фамилия человека.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>faxNumber</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Номер факса.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>follows</code></th>
						<td class="prop-ect">Человек</td>
						<td class="prop-desc">Наиболее общие однонаправленные социальные отношения.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>funder</code></th>
						<td class="prop-ect">Организация&nbsp;&nbsp; или
							<br />лицо</td>
						<td class="prop-desc">Человек или организация, которые поддерживают (спонсируют) что-то посредством какого-либо финансового вклада.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>gender</code></th>
						<td class="prop-ect">GenderType&nbsp;&nbsp; или
							<br />текст</td>
						<td class="prop-desc">Пол чего-либо, обычно&nbsp;человека&nbsp;, но возможно также вымышленных персонажей, животных и т. Д. Хотя можно использовать https://schema.org/Male и https://schema.org/Female, текстовые строки также приемлемы для людей, которые не идентифицируют себя как бинарный пол.&nbsp;Свойство&nbsp;гендера&nbsp;также может использоваться в расширенном смысле, например, для охвата пола спортивных команд.&nbsp;Как и в случае с полом людей, мы не пытаемся перечислить все возможности.&nbsp;Спортивная команда&nbsp;смешанного пола&nbsp;может быть обозначена текстовым значением &laquo;Mixed&raquo;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>givenName</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Собственное имя.&nbsp;В США - имя человека.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>globalLocationNumber</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Глобальный адресный номер&nbsp;(GLN, иногда называемый также Международный номер места или ILN) соответствующей организации, лица или место.&nbsp;Номер GLN - это 13-значный номер, используемый для идентификации сторон и физического местонахождения.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>hasCredential</code></th>
						<td class="prop-ect">Образовательный</td>
						<td class="prop-desc">Удостоверение, присвоенное лицу или организации.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>hasOccupation</code></th>
						<td class="prop-ect">Занятие</td>
						<td class="prop-desc">Род занятий человека.&nbsp;Для прошлых профессий используйте Role для обозначения дат.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>hasOfferCatalog</code></th>
						<td class="prop-ect">ПредложениеКаталог</td>
						<td class="prop-desc">Указывает на список OfferCatalog для этой организации, лица или услуги.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>hasPOS</code></th>
						<td class="prop-ect">Место</td>
						<td class="prop-desc">Пункты продаж, управляемые организацией или физическим лицом.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>height</code></th>
						<td class="prop-ect">Расстояние&nbsp;&nbsp; или
							<br />количественное значение</td>
						<td class="prop-desc">Высота предмета.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>homeLocation</code></th>
						<td class="prop-ect">Контактная точка&nbsp;&nbsp; или
							<br />место</td>
						<td class="prop-desc">Контактное место для проживания человека.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>honorificPrefix</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Почетный префикс перед именем человека, например Dr / Mrs / Mr.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>honorificSuffix</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Почетный суффикс после имени человека, например MD / PhD / MSCSW.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>interactionStatistic</code></th>
						<td class="prop-ect">InteractionCounter</td>
						<td class="prop-desc">Количество взаимодействий для CreativeWork с использованием веб-сайта или SoftwareApplication.&nbsp;Следует использовать наиболее конкретный дочерний тип InteractionCounter.&nbsp;Заменяет&nbsp;InteractionCount&nbsp;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>isicV4</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Международный стандарт отраслевой классификации всех видов экономической деятельности (ISIC), редакция 4 кода для конкретной организации, предпринимателя или места.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>jobTitle</code></th>
						<td class="prop-ect">DefinedTerm&nbsp;&nbsp; или
							<br />текст</td>
						<td class="prop-desc">Должность человека (например, финансовый менеджер).</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>knows</code></th>
						<td class="prop-ect">Человек</td>
						<td class="prop-desc">Наиболее общие двунаправленные социальные / рабочие отношения.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>knowsAbout</code></th>
						<td class="prop-ect">Текст&nbsp;&nbsp; или
							<br />вещь&nbsp;&nbsp; или
							<br />URL</td>
						<td class="prop-desc">Из с&nbsp;лица&nbsp;, и менее , как&nbsp;правило ,&nbsp;из&nbsp;организации&nbsp;, чтобы указать тему ,&nbsp;которая ,&nbsp;как известно ,&nbsp;о - предполагая возможный опыт ,&nbsp;но не подразумевая его.&nbsp;Мы не&nbsp;разделяем&nbsp;здесь уровни навыков и не связываем это с образовательным контентом, событиями, целями или&nbsp;описаниями объявлений о&nbsp;вакансиях&nbsp;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>knowsLanguage</code></th>
						<td class="prop-ect">Язык&nbsp;&nbsp; или
							<br />текст</td>
						<td class="prop-desc">Из с&nbsp;лица&nbsp;, и менее , как&nbsp;правило ,&nbsp;из&nbsp;организации&nbsp;, чтобы указать известный язык.&nbsp;Мы не делаем различий между уровнями навыков или чтением / письмом / говорением / жестами.&nbsp;Используйте коды языков из стандарта&nbsp;IETF BCP 47&nbsp;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>makesOffer</code></th>
						<td class="prop-ect">Предложение</td>
						<td class="prop-desc">Указатель на продукты или услуги, предлагаемые организацией или человеком.&nbsp;Перевернутая
							<br />собственность:&nbsp;givenBy</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>memberOf</code></th>
						<td class="prop-ect">Организация&nbsp;&nbsp; или
							<br />участие в программе</td>
						<td class="prop-desc">Организация (или членство в программе), к которой принадлежит данное лицо или организация.
							<br />Обратное свойство:&nbsp;member</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>naics</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Код Североамериканской отраслевой классификации (NAICS) для конкретной организации или делового человека.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>nationality</code></th>
						<td class="prop-ect">Страна</td>
						<td class="prop-desc">Национальность человека.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>netWorth</code></th>
						<td class="prop-ect">MonetaryAmount&nbsp;&nbsp; или
							<br />PriceSpecification</td>
						<td class="prop-desc">Общая финансовая стоимость человека, рассчитанная путем вычитания активов из обязательств.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>owns</code></th>
						<td class="prop-ect">Информация о праве собственности&nbsp;&nbsp; или
							<br />продукт</td>
						<td class="prop-desc">Товары, принадлежащие организации или физическому лицу.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>parent</code></th>
						<td class="prop-ect">Человек</td>
						<td class="prop-desc">Родитель этого человека.&nbsp;Заменяет&nbsp;родителей&nbsp;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>performerIn</code></th>
						<td class="prop-ect">Мероприятие</td>
						<td class="prop-desc">Событие, в котором этот человек является исполнителем или участником.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>publishingPrinciples</code></th>
						<td class="prop-ect">CreativeWork&nbsp;&nbsp; или
							<br />URL</td>
						<td class="prop-desc">Свойство publishingPrinciples указывает (обычно через&nbsp;URL-адрес&nbsp;) документ, описывающий редакционные принципы&nbsp;организации&nbsp;(или отдельного лица, например,&nbsp;человека,&nbsp;ведущего блог), которые относятся к их деятельности в качестве издателя, например, политики этики или разнообразия.&nbsp;Применительно к&nbsp;CreativeWork&nbsp;(например,&nbsp;NewsArticle&nbsp;) эти принципы принадлежат стороне, которая несет основную ответственность за создание&nbsp;CreativeWork&nbsp;.
							<br />
							<br />Хотя такие политики чаще всего выражаются на естественном языке, иногда связанная информация (например, указывающая&nbsp;спонсора&nbsp;) может быть выражена с использованием терминологии schema.org.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>relatedTo</code></th>
						<td class="prop-ect">Человек</td>
						<td class="prop-desc">Наиболее типичные семейные отношения.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>seeks</code></th>
						<td class="prop-ect">Потребность</td>
						<td class="prop-desc">Указатель на продукты или услуги, которые ищет организация или лицо (спрос).</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>sibling</code></th>
						<td class="prop-ect">Человек</td>
						<td class="prop-desc">Брат или сестра человека.&nbsp;Заменяет&nbsp;братьев и сестер&nbsp;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>sponsor</code></th>
						<td class="prop-ect">Организация&nbsp;&nbsp; или
							<br />лицо</td>
						<td class="prop-desc">Человек или организация, которые поддерживают вещь посредством обещания, обещания или финансового вклада.&nbsp;например, спонсор медицинского исследования или корпоративный спонсор мероприятия.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>spouse</code></th>
						<td class="prop-ect">Человек</td>
						<td class="prop-desc">Супруг человека.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>taxID</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Налоговый / налоговый идентификатор организации или лица, например, ИНН в США или CIF / NIF в Испании.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>telephone</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Телефонный номер.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>vatID</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Идентификатор налога на добавленную стоимость организации или лица.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>weight</code></th>
						<td class="prop-ect">Количественное значение</td>
						<td class="prop-desc">Вес товара или человека.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>workLocation</code></th>
						<td class="prop-ect">Контактная точка&nbsp;&nbsp; или
							<br />место</td>
						<td class="prop-desc">Контактное место по месту работы человека.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>worksFor</code></th>
						<td class="prop-ect">Организация</td>
						<td class="prop-desc">Организации, в которых работает человек.</td>
					</tr>
					<tr class="supertype">
						<th class="supertype-name" colspan="3">Свойства от&nbsp;вещи</th>
					</tr>
					<tr>
						<th class="prop-nam"><code>additionalType</code></th>
						<td class="prop-ect">URL</td>
						<td class="prop-desc">Дополнительный тип для элемента, обычно используемый для добавления более конкретных типов из внешних словарей в синтаксис микроданных.&nbsp;Это связь между чем-то и классом, в котором эта вещь находится. В синтаксисе RDFa лучше использовать собственный синтаксис RDFa - атрибут typeof - для нескольких типов.&nbsp;Инструменты Schema.org могут иметь только более слабое представление о дополнительных типах, в частности о тех, которые определены извне.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>alternateName</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Псевдоним для элемента.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>description</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Описание предмета.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>disambiguatingDescription</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Подсвойство описания.&nbsp;Краткое описание предмета, используемого для отличия от других похожих предметов.&nbsp;Информация из других свойств (в частности, имя) может быть необходима для того, чтобы описание было полезным для устранения неоднозначности.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>identifier</code></th>
						<td class="prop-ect">PropertyValue&nbsp;&nbsp; или
							<br />текст&nbsp;&nbsp; или
							<br />URL</td>
						<td class="prop-desc">Свойство идентификатора представляет собой любой идентификатор для любого типа&nbsp;Вещи&nbsp;, такой как ISBN, коды GTIN, UUID и т. Д. Schema.org предоставляет специальные свойства для представления многих из них в виде текстовых строк или ссылок URL (URI).&nbsp;См. Дополнительные сведения в&nbsp;фоновых примечаниях&nbsp;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>image</code></th>
						<td class="prop-ect">ImageObject&nbsp;&nbsp; или
							<br />URL</td>
						<td class="prop-desc">Изображение предмета.&nbsp;Это может быть&nbsp;URL-адрес&nbsp;или полностью описанный&nbsp;ImageObject&nbsp;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>mainEntityOfPage</code></th>
						<td class="prop-ect">CreativeWork&nbsp;&nbsp; или
							<br />URL</td>
						<td class="prop-desc">Указывает страницу (или другую CreativeWork), для которой эта вещь является основной описываемой сущностью.&nbsp;См&nbsp;справочных записок&nbsp;для деталей.
							<br />Обратное свойство:&nbsp;mainEntity</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>name</code></th>
						<td class="prop-ect">Текст</td>
						<td class="prop-desc">Название предмета.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>potentialAction</code></th>
						<td class="prop-ect">Действие</td>
						<td class="prop-desc">Обозначает потенциальное действие, которое описывает идеализированное действие, в котором эта вещь будет играть роль &laquo;объекта&raquo;.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>sameAs</code></th>
						<td class="prop-ect">URL</td>
						<td class="prop-desc">URL-адрес справочной веб-страницы, недвусмысленно указывающий на идентичность элемента.&nbsp;Например, URL-адрес страницы в Википедии, записи Викиданных или официального сайта.</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>subjectOf</code></th>
						<td class="prop-ect">CreativeWork&nbsp;&nbsp; или
							<br />событие</td>
						<td class="prop-desc">CreativeWork или мероприятие по этому поводу.
							<br />Обратное свойство:&nbsp;about</td>
					</tr>
					<tr>
						<th class="prop-nam"><code>url</code></th>
						<td class="prop-ect">URL</td>
						<td class="prop-desc">URL-адрес элемента.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="example"> <b>Примеры:</b>
			<div class="row border  h-100 p-5 text-white bg-dark">
				<div class="col-sm-6">
					<div class="ds-tab-note">Example encoded as <a class="ds-tab-note" href="https://en.wikipedia.org/wiki/Microdata_(HTML)">Microdata</a> embedded in HTML.</div> 
						<pre class="ds-tab-content prettyprint lang-html linenums clipsource ">
&lt;div itemscope itemtype=&#34;https://schema.org/Person&#34;&gt;
  &lt;span itemprop=&#34;name&#34;&gt;Jane Doe&lt;/span&gt;
  &lt;img src=&#34;janedoe.jpg&#34; itemprop=&#34;image&#34; alt=&#34;Photo of Jane Doe&#34;/&gt;

  &lt;span itemprop=&#34;jobTitle&#34;&gt;Professor&lt;/span&gt;
  &lt;div itemprop=&#34;address&#34; itemscope itemtype=&#34;https://schema.org/PostalAddress&#34;&gt;
    &lt;span itemprop=&#34;streetAddress&#34;&gt;
      20341 Whitworth Institute
      405 N. Whitworth
    &lt;/span&gt;
    &lt;span itemprop=&#34;addressLocality&#34;&gt;Seattle&lt;/span&gt;,
    &lt;span itemprop=&#34;addressRegion&#34;&gt;WA&lt;/span&gt;
    &lt;span itemprop=&#34;postalCode&#34;&gt;98052&lt;/span&gt;
  &lt;/div&gt;
  &lt;span itemprop=&#34;telephone&#34;&gt;(425) 123-4567&lt;/span&gt;
  &lt;a href=&#34;mailto:jane-doe@xyz.edu&#34; itemprop=&#34;email&#34;&gt;
    jane-doe@xyz.edu&lt;/a&gt;

  Jane&#39;s home page:
  &lt;a href=&#34;http://www.janedoe.com&#34; itemprop=&#34;url&#34;&gt;janedoe.com&lt;/a&gt;

  Graduate students:
  &lt;a href=&#34;http://www.xyz.edu/students/alicejones.html&#34; itemprop=&#34;colleague&#34;&gt;
    Alice Jones&lt;/a&gt;
  &lt;a href=&#34;http://www.xyz.edu/students/bobsmith.html&#34; itemprop=&#34;colleague&#34;&gt;
    Bob Smith&lt;/a&gt;
&lt;/div&gt;
						</pre>
					</div>
					<div class="col-sm-6">
						<div itemscope itemtype="https://schema.org/Person">
							<span itemprop="name">Jane Doe</span><br/>
							<img src="https://malanin-dent.ru/upload/wysiwyg/01e6400e1568864ffe2e3bbfc0b2cf2b.jpeg" itemprop="image" alt="Photo of Jane Doe"/><br/>
							<span itemprop="jobTitle">Professor</span>
							<div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
								<span itemprop="streetAddress">
      								20341 Whitworth Institute
      								405 N. Whitworth
    							</span>
							<span itemprop="addressLocality">Seattle</span>,
							<span itemprop="addressRegion">WA</span>
							<span itemprop="postalCode">98052</span>
						</div>
						<span itemprop="telephone">(425) 123-4567</span>
						<a href="mailto:jane-doe@xyz.edu" itemprop="email">jane-doe@xyz.edu</a> Jane's home page:
						<a href="http://www.janedoe.com" itemprop="url">janedoe.com</a> Graduate students:
						<a href="http://www.xyz.edu/students/alicejones.html" itemprop="colleague">Alice Jones</a>
						<a href="http://www.xyz.edu/students/bobsmith.html" itemprop="colleague">Bob Smith</a>
					</div>
				</div>
			</div>
			<div class="row border  h-100 p-5 text-white bg-dark">
				<div class="col-sm-6">
					<div class="ds-tab-note" >Example encoded as <a class="ds-tab-note" href="https://en.wikipedia.org/wiki/Microdata_(HTML)">Microdata</a> embedded in HTML.</div>
  						<pre class="ds-tab-content prettyprint lang-html linenums clipsource ">
&lt;div itemscope=&#34;&#34; itemtype=&#34;https://schema.org/MusicEvent&#34;&gt;

  &lt;div itemprop=&#34;location&#34; itemscope=&#34;&#34; itemtype=&#34;https://schema.org/MusicVenue&#34;&gt;
    &lt;meta itemprop=&#34;name&#34; content=&#34;Chicago Symphony Center&#34;/&gt;
    &lt;link itemprop=&#34;sameAs&#34; href=&#34;http://en.wikipedia.org/wiki/Symphony_Center&#34;/&gt;
    &lt;meta itemprop=&#34;address&#34; content=&#34;220 S. Michigan Ave, Chicago, Illinois, USA&#34;/&gt;
  &lt;/div&gt;

  &lt;div itemprop=&#34;offers&#34; itemscope=&#34;&#34; itemtype=&#34;https://schema.org/Offer&#34;&gt;
    &lt;link itemprop=&#34;url&#34; href=&#34;/examples/ticket/12341234&#34; /&gt;
    &lt;meta itemprop=&#34;price&#34; content=&#34;40&#34;/&gt;
    &lt;meta itemprop=&#34;priceCurrency&#34; content=&#34;USD&#34; /&gt;
    &lt;link itemprop=&#34;availability&#34; href=&#34;https://schema.org/InStock&#34;/&gt;
  &lt;/div&gt;

  &lt;h2 itemprop=&#34;name&#34;&gt;Shostakovich Leningrad&lt;/h2&gt;
  &lt;div&gt;
    &lt;div itemprop=&#34;startDate&#34; content=&#34;2014-05-23T20:00&#34;&gt;May&lt;span&gt;23&lt;/span&gt;&lt;/div&gt;
    &lt;div&gt;8:00 PM&lt;/div&gt;
    &lt;div&gt;
      &lt;strong&gt;Britten, Shostakovich&lt;/strong&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;p&gt;Jaap van Zweden conducts two World War II-era pieces showcasing the glorious sound of the CSO.&lt;/p&gt;
  &lt;/div&gt;

  &lt;div&gt;
    &lt;h3&gt;Program&lt;/h3&gt;
    &lt;ul&gt;
      &lt;li itemprop=&#34;workPerformed&#34; itemscope=&#34;&#34; itemtype=&#34;https://schema.org/CreativeWork&#34;&gt;
        &lt;link itemprop=&#34;sameAs&#34; href=&#34;http://en.wikipedia.org/wiki/Peter_Grimes&#34; /&gt;
        &lt;span itemprop=&#34;name&#34;&gt;&lt;strong&gt;Britten&lt;/strong&gt; Four Sea Interludes and Passacaglia from &lt;em itemprop=&#34;name&#34;&gt;Peter Grimes&lt;/em&gt;&lt;/span&gt;
  &lt;/li&gt;
      &lt;li itemprop=&#34;workPerformed&#34; itemscope=&#34;&#34; itemtype=&#34;https://schema.org/CreativeWork&#34;&gt;
      &lt;link itemprop=&#34;sameAs&#34; href=&#34;http://en.wikipedia.org/wiki/Symphony_No._7_(Shostakovich)&#34; /&gt;
      &lt;span itemprop=&#34;name&#34;&gt;&lt;strong&gt;Shostakovich&lt;/strong&gt; Symphony No. 7 &lt;em&gt;(Leningrad)&lt;/em&gt;&lt;/span&gt;
  &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;

  &lt;div&gt;
    &lt;h3&gt;Performers&lt;/h3&gt;
    &lt;div itemprop=&#34;performer&#34; itemscope=&#34;&#34; itemtype=&#34;https://schema.org/MusicGroup&#34;&gt;
      &lt;img src=&#34;/examples/cso_c_logo_s.jpg&#34; alt=&#34;Chicago Symphony Orchestra&#34; /&gt;
      &lt;link itemprop=&#34;sameAs&#34; href=&#34;http://cso.org/&#34; /&gt;
      &lt;link itemprop=&#34;sameAs&#34; href=&#34;http://en.wikipedia.org/wiki/Chicago_Symphony_Orchestra&#34; /&gt;
      &lt;div&gt;
        &lt;a href=&#34;examples/Performer?id=4434&#34;&gt;&lt;span itemprop=&#34;name&#34;&gt;Chicago Symphony Orchestra&lt;/span&gt;&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div itemprop=&#34;performer&#34; itemscope=&#34;&#34; itemtype=&#34;https://schema.org/Person&#34;&gt;
      &lt;link itemprop=&#34;sameAs&#34; href=&#34;http://www.jaapvanzweden.com/&#34; /&gt;
      &lt;img itemprop=&#34;image&#34; src=&#34;/examples/jvanzweden_s.jpg&#34; alt=&#34;Jaap van Zweden&#34;/&gt;
      &lt;div&gt;
        &lt;a href=&#34;/examples/Performer.aspx?id=11324&#34;&gt;&lt;span itemprop=&#34;name&#34;&gt;Jaap van Zweden&lt;/span&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;conductor&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

&lt;/div&gt;
						</pre>
					</div>
					<div class="col-sm-6">
						<div itemscope="" itemtype="https://schema.org/MusicEvent">
							<div itemprop="location" itemscope="" itemtype="https://schema.org/MusicVenue">
								<meta itemprop="name" content="Chicago Symphony Center" />
								<link itemprop="sameAs" href="http://en.wikipedia.org/wiki/Symphony_Center" />
								<meta itemprop="address" content="220 S. Michigan Ave, Chicago, Illinois, USA" /> 
							</div>
								<div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
									<link itemprop="url" href="/examples/ticket/12341234" />
									<meta itemprop="price" content="40" />
									<meta itemprop="priceCurrency" content="USD" />
									<link itemprop="availability" href="https://schema.org/InStock" /> 
								</div>
								<h2 itemprop="name">Shostakovich Leningrad</h2>
								<div>
									<div itemprop="startDate" content="2014-05-23T20:00">May<span>23</span>
								</div>
								<div>8:00 PM</div>
								<div> <strong>Britten, Shostakovich</strong> </div>
							</div>
							<div>
								<p>Jaap van Zweden conducts two World War II-era pieces showcasing the glorious sound of the CSO.</p>
							</div>
							<div>
								<h3>Program</h3>
									<ul>
										<li itemprop="workPerformed" itemscope="" itemtype="https://schema.org/CreativeWork">
											<link itemprop="sameAs" href="http://en.wikipedia.org/wiki/Peter_Grimes" /> <span itemprop="name"><strong>Britten</strong> Four Sea Interludes and Passacaglia from <em itemprop="name">Peter Grimes</em></span> </li>
										<li itemprop="workPerformed" itemscope="" itemtype="https://schema.org/CreativeWork">
											<link itemprop="sameAs" href="http://en.wikipedia.org/wiki/Symphony_No._7_(Shostakovich)" /> <span itemprop="name"><strong>Shostakovich</strong> Symphony No. 7 <em>(Leningrad)</em></span> </li>
									</ul>
								</div>
								<div>
									<h3>Performers</h3>
									<div itemprop="performer" itemscope="" itemtype="https://schema.org/MusicGroup"> <img weight="200" height="300" src="https://image.isu.pub/200508205203-41b57e63db609c4fdde98d0c5acff357/jpg/page_1_thumb_large.jpg" alt="Chicago Symphony Orchestra" />
										<link itemprop="sameAs" href="http://cso.org/" />
										<link itemprop="sameAs" href="http://en.wikipedia.org/wiki/Chicago_Symphony_Orchestra" />
										<div> <a href="examples/Performer?id=4434"><span itemprop="name">Chicago Symphony Orchestra</span></a> </div>
									</div>
									<div itemprop="performer" itemscope="" itemtype="https://schema.org/Person">
										<link itemprop="sameAs" href="http://www.jaapvanzweden.com/" /> <img itemprop="image" weight="200" height="300" src="https://static01.nyt.com/images/2016/01/27/arts/28NYPHIL1/28NYPHIL1-articleLarge.jpg?quality=75&auto=webp&disable=upscale" alt="Jaap van Zweden" />
									<div> <a href="/examples/Performer.aspx?id=11324"><span itemprop="name">Jaap van Zweden</span></a> </div>
									<div>conductor</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection