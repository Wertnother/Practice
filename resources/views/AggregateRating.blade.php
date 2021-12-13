@extends('layouts.app')

@section('title')AggregateRating @endsection

@section('content')

<div id="mainContent" class="container">
	<div id="infoblock">
		<div id="infohead">
			<h1>AggregateRating</h1> <em>A Schema.org Type</em>
			<br/> </div>
		<div class="superPaths"> <a href="/Thing" class="core" title="Thing">Thing</a> > <a href="/Intangible" class="core" title="Intangible">Intangible</a> > <a href="/Rating" class="core" title="Rating">Rating</a> > <a href="/AggregateRating" class="core" title="AggregateRating">AggregateRating</a>
			<br/> </div>
		<div class="description">Средняя оценка на основе нескольких оценок или отзывов.</div>
	</div>
	<table class="table table-bordered definition-table">
		<thead>
			<tr style="height: 31px;">
				<th style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Имущество</span></span>
				</th>
				<th style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Ожидаемый тип</span></span>
				</th>
				<th style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Описание</span></span>
				</th>
			</tr>
		</thead>
		<!-- Properties for Term: AggregateRating-->
		<tbody>
			<tr class="supertype" style="height: 15px;">
				<th class="supertype-name" style="height: 15px;" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Недвижимость от </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">AggregateRating</span></span>
				</th>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> itemReviewed</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вещь</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Элемент, который просматривается / оценивается. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> ratingCount</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Целое число</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Подсчет общего количества оценок. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> reviewCount</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Целое число</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Подсчет общего количества отзывов. </span></span>
				</td>
			</tr>
			<!-- Properties for Term: Rating-->
			<tr class="supertype" style="height: 15.5352px;">
				<th class="supertype-name" style="height: 15.5352px;" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Недвижимость из </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">рейтинга</span></span>
				</th>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> author</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Автор этого контента или рейтинга. </span><span style="vertical-align: inherit;">Обратите внимание, что особенность автора заключается в том, что HTML 5 предоставляет специальный механизм для указания авторства с помощью тега rel. </span><span style="vertical-align: inherit;">Это эквивалентно этому и может использоваться как взаимозаменяемые. </span></span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> bestRating</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Число</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Наивысшее значение, разрешенное в этой рейтинговой системе. </span><span style="vertical-align: inherit;">Если bestRating не указан, предполагается, что 5. </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> ratingExplanation</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Краткое объяснение (например, одно-два предложения), содержащее общий контекст и другую информацию, которая привела к заключению, выраженному в рейтинге. </span><span style="vertical-align: inherit;">Это особенно применимо к рейтингам, связанным с разметкой &laquo;проверка фактов&raquo; с помощью </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ClaimReview</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 136px;">
				<th class="prop-nam" style="height: 136px;"><code> ratingValue</code></th>
				<td class="prop-ect" style="height: 136px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Число</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc" style="height: 136px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Рейтинг содержания. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Рекомендации по использованию:</span></span>
					<br />
					<br />
					<ul>
						<li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Используйте значения от 0123456789 (Unicode 'DIGIT ZERO' (U + 0030) до 'DIGIT NINE' (U + 0039)), а не внешне похожие символы Unicode.</span></span>
						</li>
						<li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Использовать '.' </span><span style="vertical-align: inherit;">(Unicode 'FULL STOP' (U + 002E)) вместо ',' для обозначения десятичной точки. </span><span style="vertical-align: inherit;">Избегайте использования этих символов в качестве разделителя для удобочитаемости.</span></span>
						</li>
					</ul>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> reviewAspect</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Этот отзыв или рейтинг относится к этой части или аспекту проверяемого элемента. </span></span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> worstRating</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Число</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Наименьшее значение, разрешенное в этой рейтинговой системе. </span><span style="vertical-align: inherit;">Если худший рейтинг опущен, предполагается, что 1. </span></span>
				</td>
			</tr>
			<!-- Properties for Term: Intangible-->
			<!-- Properties for Term: Thing-->
			<tr class="supertype" style="height: 15px;">
				<th class="supertype-name" style="height: 15px;" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойства от </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">вещи</span></span>
				</th>
			</tr>
			<tr style="height: 63px;">
				<th class="prop-nam" style="height: 63px;"><code> additionalType</code></th>
				<td class="prop-ect" style="height: 63px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 63px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дополнительный тип для элемента, обычно используемый для добавления более конкретных типов из внешних словарей в синтаксис микроданных. </span><span style="vertical-align: inherit;">Это связь между чем-то и классом, в котором эта вещь находится. В синтаксисе RDFa лучше использовать собственный синтаксис RDFa - атрибут 'typeof' - для нескольких типов. </span><span style="vertical-align: inherit;">Инструменты Schema.org могут иметь только более слабое представление о дополнительных типах, в частности о тех, которые определены извне. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> alternateName</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Псевдоним элемента. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> description</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Описание предмета. </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> disambiguatingDescription</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Подсвойство описания. </span><span style="vertical-align: inherit;">Краткое описание предмета, используемого для отличия от других похожих предметов. </span><span style="vertical-align: inherit;">Информация из других свойств (в частности, имя) может быть необходима для того, чтобы описание было полезным для устранения неоднозначности. </span></span>
				</td>
			</tr>
			<tr style="height: 61px;">
				<th class="prop-nam" style="height: 61px;"><code> identifier</code></th>
				<td class="prop-ect" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">PropertyValue</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойство идентификатора представляет собой любой идентификатор для любого типа </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вещи</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , такой как ISBN, коды GTIN, UUID и т. Д. Schema.org предоставляет специальные свойства для представления многих из них либо в виде текстовых строк, либо в виде ссылок URL (URI). </span><span style="vertical-align: inherit;">См. Дополнительные сведения в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">фоновых примечаниях</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 45px;">
				<th class="prop-nam" style="height: 45px;"><code> image</code></th>
				<td class="prop-ect" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Изображение предмета. </span><span style="vertical-align: inherit;">Это может быть </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> или полностью описанный </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> mainEntityOfPage</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает страницу (или другую CreativeWork), для которой эта вещь является основной описываемой сущностью. </span><span style="vertical-align: inherit;">См </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">справочных записок</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> для деталей. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">mainEntity</span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> name</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Название предмета. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> potentialAction</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Действие</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обозначает потенциальное действие, которое описывает идеализированное действие, в котором эта вещь будет играть роль &laquo;объекта&raquo;. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> sameAs</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес справочной веб-страницы, недвусмысленно указывающий на идентичность элемента. </span><span style="vertical-align: inherit;">Например, URL-адрес страницы объекта в Википедии, записи в Викиданных или официального сайта. </span></span>
				</td>
			</tr>
			<tr style="height: 45px;">
				<th class="prop-nam" style="height: 45px;"><code> subjectOf</code></th>
				<td class="prop-ect" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">событие</span></span>
				</td>
				<td class="prop-desc" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork или мероприятие по этому поводу. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">about</span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> url</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес элемента. </span></span>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="example"> <b>Примеры:</b>
		<div class="row border  h-100 p-5 text-white bg-dark">
			<div class="col-sm-6">
				<pre class="ds-tab-content prettyprint lang-html linenums clipsource ">
        &lt;div&nbsp;itemscope&nbsp;itemtype="https://schema.org/Product"&gt;
          &nbsp;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Микроволновая&nbsp;печь&nbsp;Kenmore&nbsp;White&nbsp;17&nbsp;дюймов&nbsp;&lt;/span&gt;
          &nbsp;&nbsp;&lt;img&nbsp;itemprop="image"&nbsp;src="data:image/jpeg;base64,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"&nbsp;alt='Kenmore&nbsp;17&nbsp;"Microwave'&nbsp;/&gt;
          &nbsp;&nbsp;&lt;div&nbsp;itemprop="aggregateRating"&nbsp;itemscope&nbsp;itemtype="https://schema.org/AggregateRating"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;Оценка&nbsp;&lt;span&nbsp;itemprop="ratingValue"&gt;&nbsp;3,5&nbsp;&lt;/span&gt;&nbsp;/&nbsp;5&nbsp;на&nbsp;основе&nbsp;&lt;span&nbsp;itemprop="reviewCount"&gt;&nbsp;11&nbsp;&lt;/span&gt;&nbsp;отзывов&nbsp;клиентов
          &nbsp;&nbsp;&lt;/div&gt;
          &nbsp;&nbsp;&lt;div&nbsp;itemprop="offers"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Offer"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;!&nbsp;-&nbsp;цена&nbsp;1000,&nbsp;число,&nbsp;с&nbsp;разделителем&nbsp;тысяч,&nbsp;зависящим&nbsp;от&nbsp;локали
          &nbsp;&nbsp;&nbsp;&nbsp;и&nbsp;десятичный&nbsp;знак,&nbsp;а&nbsp;символ&nbsp;$&nbsp;помечен
          &nbsp;&nbsp;&nbsp;&nbsp;машиночитаемый&nbsp;код&nbsp;&laquo;USD&raquo;&nbsp;-&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="priceCurrency"&nbsp;content="USD"&gt;&nbsp;$&nbsp;&lt;/span&gt;&nbsp;&lt;span&nbsp;itemprop="prrice"&nbsp;содержание="1000,00"&gt;&nbsp;1,000.00&nbsp;&lt;/span&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;link&nbsp;itemprop="availability"&nbsp;href="https://schema.org/InStock"&nbsp;/&gt;&nbsp;В&nbsp;наличии
          &nbsp;&nbsp;&lt;/div&gt;
          <br />
          &nbsp;&nbsp;Описание&nbsp;товара:
          &nbsp;&nbsp;&lt;span&nbsp;itemprop="description"&gt;&nbsp;Микроволновая&nbsp;печь&nbsp;на&nbsp;столешнице&nbsp;объемом&nbsp;0,7&nbsp;кубических&nbsp;фута.&nbsp;
          &nbsp;&nbsp;Имеет&nbsp;шесть&nbsp;предустановленных&nbsp;категорий&nbsp;приготовления&nbsp;и&nbsp;удобные&nbsp;функции,&nbsp;такие&nbsp;как
          &nbsp;&nbsp;Дополнительная&nbsp;минута&nbsp;и&nbsp;блокировка&nbsp;от&nbsp;детей.&nbsp;&lt;/span&gt;&nbsp;
          <br />
          &nbsp;&nbsp;&lt;br/&gt;Отзывы&nbsp;клиентов:
          &nbsp;&nbsp;&lt;div&nbsp;itemprop="review"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Review"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Не&nbsp;счастливый&nbsp;турист&nbsp;&lt;/span&gt;&nbsp;-&nbsp;автор&nbsp;&lt;span&nbsp;itemprop="author"&gt;&nbsp;Элли&nbsp;&lt;/span&gt;&nbsp;,
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="datePublished"&nbsp;content="2011-04-01"&gt;&nbsp;1&nbsp;апреля&nbsp;2011&nbsp;г.
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="reviewRating"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Rating"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="худший&nbsp;рейтинг"&nbsp;content="1"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="ratingValue"&gt;1&lt;/span&gt;/
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="bestRating"&gt;5&lt;/span&gt;&nbsp;звезд
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="reviewBody"&gt;&nbsp;Лампа&nbsp;перегорела,&nbsp;и&nbsp;теперь&nbsp;мне&nbsp;нужно&nbsp;заменить&nbsp;её.&nbsp;&lt;/span&gt;
          &nbsp;&nbsp;&lt;/div&gt;
          <br />
          &nbsp;&nbsp;&lt;div&nbsp;itemprop="review"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Review"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Стоимость&nbsp;покупки&nbsp;&lt;/span&gt;&nbsp;-&nbsp;автор&nbsp;&lt;span&nbsp;itemprop="author"&gt;&nbsp;Лукас&nbsp;&lt;/span&gt;&nbsp;,
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="datePublished"&nbsp;content="2011-03-25"&gt;&nbsp;25&nbsp;марта&nbsp;2011&nbsp;г.
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="reviewRating"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Rating"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="худший&nbsp;рейтинг"&nbsp;content="1"&nbsp;/&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="ratingValue"&gt;4&lt;/span&gt;/
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="bestRating"&gt;5&lt;/span&gt;&nbsp;звезд
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="reviewBody"&gt;&nbsp;Отличная&nbsp;микроволновая&nbsp;печь&nbsp;по&nbsp;такой&nbsp;цене.&nbsp;Он&nbsp;маленький&nbsp;и&nbsp;вписывается&nbsp;в&nbsp;мою&nbsp;квартиру.&nbsp;&lt;/span&gt;
          &nbsp;&nbsp;&lt;/div&gt;
          &nbsp;&nbsp;...
          &lt;/div&gt;
        
        </pre>
			</div>
			<div class="col-sm-6">
				<div itemscope itemtype="https://schema.org/Product">
					<span itemprop="name"> Микроволновая печь Kenmore White 17 дюймов </span>
					<img itemprop="image" class="img-fluid" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxANDxAPDRANDQ4NEBUQDQ8NDxANDw0NFREWFhURFRUYHSggGBomGxUVITIhJikrLi4uFx8zODMsNygtLisBCgoKDg0OFg4NFS0lFSUrNS04NzE3LTcsMzc3NzcrLzcrNy0tLjcrKysuNzc3Ny4rKy4rKzUsNDEuLS0rLSsyK//AABEIALQBGQMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAQQCAwYFBwj/xABIEAABAwICAwkMCAUDBQAAAAAAAQIDBBESIRQx8FFTVGFxgZGT0gUGBxMXIjRBcrKz0TIzUnN0o8HTQkOSobGUwvEWIyRjgv/EABYBAQEBAAAAAAAAAAAAAAAAAAABAv/EABgRAQEBAQEAAAAAAAAAAAAAAAACATEh/9oADAMBAAIRAxEAPwD7iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFZalALIKukINIQC0CrpKDSUAtAq6Sg0lALQKulINJQC0CrpSDSkAtAq6UhOlAWQVtKGkgWQVtJQaSgFkFbSEGkIBZBW0hDW2pTG5NxrV6Vcn6AXQVvHoPHoBZBW8ehPjwLAIRb57pIAAAAAAAAAAADyD1zyAAB5/dzuvFQwunncrY22TJMTnOXU1qetQPQB8+XwpUu8VnRD2x5UqbeKvoh7YH0EHz3yo028Vf5XbHlSpt4q/yu0B9CB898qNPvFX+V2h5UafeKr8rtAfQgfPPKlT7xVfldoeVKn3iq/K7QH0MHzzypU/B6rpi7Q8qdPweq6Yu0B9EB878qdPweq6Yu0PKnT8HqumLtAfRCT5z5VKfg9V0xdovdx/CPTVMzIVZNA6VUbG6XArHPXJGqqLkqrkB3AIYt0uZADSz61/3bPekNxpb9a/2Ge9IUbiTxe+fvkp+5ccclSkqtml8VGkLEe5Xq1XalVNxTxY/CVQORXIyqs16sf5kSYHNR6qrvP8ANS0b81yyM7WZ3R2qA5fuZ370lVM2CNs6Pe7AmNsSJezc8nqqt89uaIv0jpkTMTWV7Oj0ovopyIZGMf0U5DIoAAAAAAAAAAAeSeseUBBwfhl9Cp/xbfgTHeHCeGb0Gm/Ft+BMB8mjjuhsSAQaiy3bpAr6Ptz8oSnLaJtzkogFTRttlGjFtE25iUQCno22ykaMXbEW25wKejDRi5YgCno4WnLa7dBDgKawGVAlqmBP/fF8RpueaqL0qD7+L4jQP0giGRCGRQsaG/Wv9iP3pDeaU+tf7EfvSAeN3297EfdWOFksksOjzJPG6HAq40aqIio5FRUzOf8AJbTKkaOqap7YmOjwuSJWva5mFbpbJbKubbLnnc7t9/4bc/6FenkcqqjlVbKiZojb6zNRNdwcz3J8H8FJPHUNnne+KRZPObEiOxOV2BbNybdb5Z5Il7ZHYt1mh8yNc1q3862d0TXxG5n6r+omcnzMHpR6k5DIxj1JyGRQAAAAAAAAAAA8o9U8oAcJ4ZvQab8W34Ex3Zwnhm9BpvxjfgTAfKYdRZZt0laDVzllgGxpLSG7dJk0AibcwQIABG39yRt/cCCFJIUCFMXGS7dBi4DVJt0mui9Kg+/i+I02SGui9Kh+/i99oH6SJCAok0J9a/2I/ekNxpT6x/sM96QDXJHGqri1qmd3Je1/mhDGRxrlZq8bkTVc3ORLpfWq5ZIuev5kPRuWL+JbJ5qLnr3AJWRE1rblVqGbPVz/AKmEiNS2L1rZLoi5rzZGxiZoB6LNSchkYs1JyGRAAAAAAAAAAAA8s9Q8oCTg/DP6DTfjG/AmO7OE8NHoNN+Mb8CYD5RBq5y0zbpKsGrnLLFA2NMkMGqSigZJt0EmKKRcDIbf3Mb7c4vtzgSF26DFVCuAlTF4VSHLtzlGt+3SaqH0mH7+L32mx5ro/SYfvo/faQfpRCSEMihY0fzH+xH70hvNH8x/sR+9IAe6ytTCrrrmuVmZLmv+OcSrm3zcXna/sZL536c5LkVVSy2RL3TLzstW24RIjlVuFUREXz0tfE2y5dICVbYfNxXduXwZL5xsbrTb1GEjVXDhXDZbuyvibuGbdabeoD0Wak5DIxZqTkMiAAAAAAAAAAAB5Z6h5QEnB+Gj0Cm/GN+BMd2cr4Uu4s1b3PbozHSvp52zOjYiue+NI5GLhRM1VMaLZM8lA+KxOshva/bPdNWgzpl4mdN28L0VF6Boc+8zdU/5Ab0k2zJSTbM0aFPvM3VP+ROhzbzN1T/kBuSQeMNOhzbzN1T/AJEaHNvM3VP+QG/xhHjDTok28zdU/wCQ0ObeZuqf8gN2MxV5q0OfeZuqf8hoc28z9U/5AbVkIWQ16HNvM3VP+RGhz7zP1T/kBk5+3ORR+kQ/fR++0xWjn3mfqX/I9PvY736urq4GRwTIiSsdJI+N7I4o2uRXOc5UsmSLl61A/QqEkOSygok0fzH+xH70hvNH8x/sR+9IBD5bKiWVcS2umpMr3XcT1EvjRytVf4VuhjJFdb2Yu4rkuptQDRUVKRqxML3eMfgRWNVyMXCq4nfZbla+6qFhi5pt6jS+NXLmjFT1XzX/AAbY75Xtf121agr0mak5DIxj1JyGREAAAAAAAAAAAPJPWPHxJugZG2GdW8aGjEgxIBc0ziJ0ziKWJBiQC7pnENM4iliQYkAu6ZxDS+IpYkJxAWmV6O1WXkXiv+qdJlpnEeStFEttdkTJL5ctt3X0jQYsstSImvWif8AetpnENL4ihBG2NuFupN1bmeJALml8Q0viKmJBiQC5pfEQ6q3EKmJCcSFGSrfWSYYkGJANhVkkVJbJa72xtuqXRPrl1X4jfiKkrv8AvN/+PdnAt4X/AGo+rXtDC/7UfVr2jJHDEBGF/wBqPq17RF3IrbqxUctls1Wr9FV3eIzxGErkuz2/9jgPSj1JyGRjHqTkMiAAAAAAAAAAAB5lT3Ode8apZV1OW1j0wByHdOvWlfglinX1o5jMTHJxKebL32QMyc2ZqrqxNal+lT6CV6yhhqERs8UUzUW6JKxsiIu6l0yA4VnfbA76LZ3W14Wo63Qpcoe67qm/iKasktrXxbWM/qc5EXpOwpKSKBuCCOOFl74ImNjbdda2Q3Acui1PA6n+um/cJ/8AJ4HUf10v7h04A5hEqeCT9ZTfuE4angk/WU37h0wA5rDU8Fn6ym/cGGp4LN1lN+4dKAObwVPBZuspv3BgqeCzdZT/ALh0gA5zBUcFm6yn7YwVHBpesp+2dGAOdwVHBpesp+2Q9KhEVdFmW3qa+nVV5PPOjAHCr3yImS0vdBFTWi0z0VCP+p28Grv9O47sAcPB3xte5rfEVjcSomJ8Lmtbf1qvqQd1u7sFL58yrd+FI2pkqq1VW6Lq/iO4NNVSRztwTRxzMvfDKxsjb7tlA4Kn78Ipb+LiqZMP0vF4X4b6r21G5O+ZOD1f9J21JRxQNwQRxwsvfDExsbb7tkQ3gcZS91pJvq6Wtcmq+Czb8q5Hv0tE5yNdJdiql1aqo5zeLLK56gAhEtluEgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//Z" alt='Kenmore 17 "Microwave' />
					<div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
						Оценка <span itemprop="ratingValue"> 3,5 </span> / 5 на основе <span itemprop="reviewCount"> 11 </span> отзывов клиентов
					</div>
					<div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
						<! - цена 1000, число, с разделителем тысяч, зависящим от локали
    и десятичный знак, а символ $ помечен
    машиночитаемый код «USD» ->
						<span itemprop="priceCurrency" content="USD"> $ </span> <span itemprop="prrice" содержание="1000,00"> 1,000.00 </span>
						<link itemprop="availability" href="https://schema.org/InStock" /> В наличии
					</div>

					Описание товара:
					<span itemprop="description"> Микроволновая печь на столешнице объемом 0,7 кубических фута. 
  Имеет шесть предустановленных категорий приготовления и удобные функции, такие как
  Дополнительная минута и блокировка от детей. </span>

					<br/>Отзывы клиентов:
					<div itemprop="review" itemscope itemtype="https://schema.org/Review">
						<span itemprop="name"> Не счастливый турист </span> - автор <span itemprop="author"> Элли </span> ,
						<meta itemprop="datePublished" content="2011-04-01"> 1 апреля 2011 г.
						<div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
							<meta itemprop="худший рейтинг" content="1">
							<span itemprop="ratingValue">1</span>/
							<span itemprop="bestRating">5</span> звезд
						</div>
						<span itemprop="reviewBody"> Лампа перегорела, и теперь мне нужно заменить её. </span>
					</div>

					<div itemprop="review" itemscope itemtype="https://schema.org/Review">
						<span itemprop="name"> Стоимость покупки </span> - автор <span itemprop="author"> Лукас </span> ,
						<meta itemprop="datePublished" content="2011-03-25"> 25 марта 2011 г.
						<div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
							<meta itemprop="худший рейтинг" content="1" />
							<span itemprop="ratingValue">4</span>/
							<span itemprop="bestRating">5</span> звезд
						</div>
						<span itemprop="reviewBody"> Отличная микроволновая печь по такой цене. Он маленький и вписывается в мою квартиру. </span>
					</div>
					...
				</div>
			</div>
		</div>
		<div class="row border  h-100 p-5 text-white bg-dark">
			<div class="col-sm-6">
				<pre class="ds-tab-content prettyprint lang-html linenums clipsource ">
        &lt;div&nbsp;itemscope&nbsp;itemtype="https://schema.org/Product"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;itemprop="image"&nbsp;class="img-fluid"&nbsp;src="https://hotline.ua/img/tx/182/1826731695.jpg"&nbsp;alt="Монитор&nbsp;Dell&nbsp;UltraSharp"&nbsp;/&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;ЖК-монитор&nbsp;Dell&nbsp;UltraSharp&nbsp;30&nbsp;дюймов&nbsp;&lt;/span&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="aggregateRating"&nbsp;itemscope&nbsp;itemtype="https://schema.org/AggregateRating"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="ratingValue"&gt;&nbsp;87&nbsp;&lt;/span&gt;&nbsp;из&nbsp;&lt;span&nbsp;itemprop="bestRating"&gt;&nbsp;100&nbsp;&lt;/span&gt;&nbsp;на&nbsp;основе&nbsp;&lt;span&nbsp;itemprop="ratingCount"&gt;&nbsp;24&nbsp;&lt;/span&gt;&nbsp;оценок&nbsp;пользователей
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="offers"&nbsp;itemscope&nbsp;itemtype="https://schema.org/AggregateOffer"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="lowPrice"&gt;&nbsp;1250&nbsp;долларов&nbsp;США&nbsp;&lt;/span&gt;&nbsp;до&nbsp;&lt;span&nbsp;itemprop="highPrice"&gt;&nbsp;1495&nbsp;долларов&nbsp;США&nbsp;&lt;/span&gt;&nbsp;от&nbsp;&lt;span&nbsp;itemprop="offerCount"&gt;&nbsp;8&nbsp;&lt;/span&gt;&nbsp;продавцов&nbsp;Продавцы:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="offers"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Offer"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;itemprop="url"&nbsp;HREF="save-a-lot-monitors.com/dell-30.html"&gt;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Мониторы&nbsp;Save&nbsp;A&nbsp;Lot&nbsp;-&nbsp;1250&nbsp;долларов&nbsp;США&nbsp;&lt;/a&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="offers"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Offer"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;itemprop="url"&nbsp;HREF="jondoe-gadgets.com/dell-30.html"&gt;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Гаджеты&nbsp;Джона&nbsp;Доу&nbsp;-&nbsp;1350&nbsp;долларов&nbsp;&lt;/a&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;...
&lt;/div&gt;
        
        </pre>
			</div>
			<div class="col-sm-6">
				<div itemscope itemtype="https://schema.org/Product">
					<img itemprop="image" class="img-fluid" src="https://hotline.ua/img/tx/182/1826731695.jpg" alt="Монитор Dell UltraSharp" />
					<span itemprop="name"> ЖК-монитор Dell UltraSharp 30 дюймов </span>

					<div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
						<span itemprop="ratingValue"> 87 </span> из <span itemprop="bestRating"> 100 </span> на основе <span itemprop="ratingCount"> 24 </span> оценок пользователей
					</div>

					<div itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
						<span itemprop="lowPrice"> 1250 долларов США </span> до <span itemprop="highPrice"> 1495 долларов США </span> от <span itemprop="offerCount"> 8 </span> продавцов Продавцы:
						<div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<a itemprop="url" HREF="save-a-lot-monitors.com/dell-30.html">  
        Мониторы Save A Lot - 1250 долларов США </a>
						</div>
						<div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<a itemprop="url" HREF="jondoe-gadgets.com/dell-30.html">  
        Гаджеты Джона Доу - 1350 долларов </a>
						</div>
					</div>
					...
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
