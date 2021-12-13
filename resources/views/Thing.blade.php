@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')

<div id="mainContent" class="container">
	<div id="infoblock">
		<div id="infohead">
			<h1>Thing</h1> <em>A Schema.org Type</em>
			<br/> </div>
		<div class="superPaths"> <a href="/Thing" class="core" title="Thing">Thing</a>
			<br/> </div>
		<div class="description">Самый общий тип предмета.</div>
	</div>
	<table class="table table-bordered definition-table">
		<thead>
			<tr style="height: 30.4375px;">
				<th style="height: 30.4375px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Имущество</span></span>
				</th>
				<th style="height: 30.4375px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Ожидаемый тип</span></span>
				</th>
				<th style="height: 30.4375px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Описание</span></span>
				</th>
			</tr>
		</thead>
		<!-- Properties for Term: Thing-->
		<tbody>
			<tr class="supertype" style="height: 15px;">
				<th class="supertype-name" style="height: 15px;" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойства от </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">вещи</span></span>
				</th>
			</tr>
			<tr style="height: 61px;">
				<th class="prop-nam" style="height: 61px;"><code> additionalType</code></th>
				<td class="prop-ect" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дополнительный тип для элемента, обычно используемый для добавления более конкретных типов из внешних словарей в синтаксис микроданных. </span><span style="vertical-align: inherit;">Это связь между чем-то и классом, в котором эта вещь находится. В синтаксисе RDFa лучше использовать собственный синтаксис RDFa - атрибут 'typeof' - для нескольких типов. </span><span style="vertical-align: inherit;">Инструменты Schema.org могут иметь только более слабое представление о дополнительных типах, в частности о тех, которые определены извне. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> alternateName</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Псевдоним для элемента. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> description</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Описание предмета. </span></span>
				</td>
			</tr>
			<tr style="height: 45px;">
				<th class="prop-nam" style="height: 45px;"><code> disambiguatingDescription</code></th>
				<td class="prop-ect" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Подсвойство описания. </span><span style="vertical-align: inherit;">Краткое описание предмета, используемого для отличия от других похожих предметов. </span><span style="vertical-align: inherit;">Информация из других свойств (в частности, имя) может быть необходима для того, чтобы описание было полезным для устранения неоднозначности. </span></span>
				</td>
			</tr>
			<tr style="height: 58px;">
				<th class="prop-nam" style="height: 58px;"><code> identifier</code></th>
				<td class="prop-ect" style="height: 58px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">PropertyValue</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 58px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойство идентификатора представляет собой любой идентификатор для любого типа </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вещи</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , такой как ISBN, коды GTIN, UUID и т. Д. Schema.org предоставляет специальные свойства для представления многих из них либо в виде текстовых строк, либо в виде ссылок URL (URI). </span><span style="vertical-align: inherit;">См. Дополнительные сведения в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">фоновых примечаниях</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 43px;">
				<th class="prop-nam" style="height: 43px;"><code> image</code></th>
				<td class="prop-ect" style="height: 43px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 43px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Изображение предмета. </span><span style="vertical-align: inherit;">Это может быть </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> или полностью описанный </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 45px;">
				<th class="prop-nam" style="height: 45px;"><code> mainEntityOfPage</code></th>
				<td class="prop-ect" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает страницу (или другую CreativeWork), для которой эта вещь является основной описываемой сущностью. </span><span style="vertical-align: inherit;">См </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">справочных записок</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> для деталей. </span></span>
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
			<tr style="height: 30px;">
				<th class="prop-nam" style="height: 30px;"><code> potentialAction</code></th>
				<td class="prop-ect" style="height: 30px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Действие</span></span>
				</td>
				<td class="prop-desc" style="height: 30px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обозначает потенциальное действие, которое описывает идеализированное действие, в котором эта вещь будет играть роль &laquo;объекта&raquo;. </span></span>
				</td>
			</tr>
			<tr style="height: 30px;">
				<th class="prop-nam" style="height: 30px;"><code> sameAs</code></th>
				<td class="prop-ect" style="height: 30px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 30px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес справочной веб-страницы, недвусмысленно указывающий на идентичность элемента. </span><span style="vertical-align: inherit;">Например, URL-адрес страницы в Википедии, записи Викиданных или официального сайта. </span></span>
				</td>
			</tr>
			<tr style="height: 43px;">
				<th class="prop-nam" style="height: 43px;"><code> subjectOf</code></th>
				<td class="prop-ect" style="height: 43px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">событие</span></span>
				</td>
				<td class="prop-desc" style="height: 43px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork или мероприятие по этому поводу. </span></span>
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
    <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Более конкретные типы</font></font></b>
	<ul>
		<li> <a href="/Action" class="core" title="Action">Action</a></li>
		<li> <a href="/BioChemEntity" class="ext ext-pending" title="BioChemEntity">BioChemEntity</a></li>
		<li> <a href="/CreativeWork" class="core" title="CreativeWork">CreativeWork</a></li>
		<li> <a href="/Event" class="core" title="Event">Event</a></li>
		<li> <a href="/Intangible" class="core" title="Intangible">Intangible</a></li>
		<li> <a href="/MedicalEntity" class="core" title="MedicalEntity">MedicalEntity</a></li>
		<li> <a href="/Organization" class="core" title="Organization">Organization</a></li>
		<li> <a href="/Person" class="core" title="Person">Person</a></li>
		<li> <a href="/Place" class="core" title="Place">Place</a></li>
		<li> <a href="/Product" class="core" title="Product">Product</a></li>
		<li> <a href="/Taxon" class="ext ext-pending" title="Taxon">Taxon</a></li>
	</ul>
</div>
@endsection