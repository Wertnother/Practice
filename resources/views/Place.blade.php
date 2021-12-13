@extends('layouts.app')

@section('title')Place @endsection

@section('content')

<div id="mainContent" class="container">
	<div id="infoblock">
		<div id="infohead">
			<h1>Place</h1> <em>A Schema.org Type</em>
			<br/> </div>
		<div class="superPaths"> <a href="/Thing" class="core" title="Thing">Thing</a> > <a href="/Place" class="core" title="Place">Place</a>
			<br/> </div>
		<div class="description">Сущности с фиксированным физическим расширением.</div>
	</div>
	<table class="table table-bordered definition-table">
		<thead>
			<tr>
				<th><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Имущество</span></span>
				</th>
				<th><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Ожидаемый тип</span></span>
				</th>
				<th><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Описание</span></span>
				</th>
			</tr>
		</thead>
		<!-- Properties for Term: Place-->
		<tbody>
			<tr class="supertype">
				<th class="supertype-name" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Недвижимость с </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">места</span></span>
				</th>
			</tr>
			<tr>
				<th class="prop-nam"><code> additionalProperty</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Стоимость имущества</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Пара свойство-значение, представляющая дополнительные характеристики объекта, например характеристика продукта или другая характеристика, для которой нет соответствующего свойства в schema.org. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Примечание. Издателям следует знать, что приложения, предназначенные для использования определенных свойств schema.org (например, https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, .. .) обычно ожидают, что такие данные будут предоставлены с использованием этих свойств, а не с использованием универсального механизма свойство / значение. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> address</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Почтовый адрес</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Физический адрес предмета. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> aggregateRating</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">AggregateRating</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Общая оценка, основанная на совокупности обзоров или оценок элемента. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> amenityFeature</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Расположение</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Удобство (например, характеристика или услуга) Объекта размещения. </span><span style="vertical-align: inherit;">Это универсальное свойство не говорит о том, включена ли эта функция в предложение для основного размещения или доступна за дополнительную плату. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> branchCode</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Короткий текстовый код (также называемый &laquo;кодом магазина&raquo;), который однозначно идентифицирует место деятельности. </span><span style="vertical-align: inherit;">Код обычно назначается parentOrganization и используется в структурированных URL-адресах. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Например, в URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 код &laquo;3047&raquo; - это код ветки для конкретной ветки. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> containedInPlace</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Основные отношения сдерживания между местом и тем, в котором оно находится. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">содержащийся в</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">containsPlace</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> containsPlace</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Основные отношения сдерживания между местом и другим, которое оно содержит. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">containsInPlace</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> event</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Мероприятие</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Предстоящее или прошедшее событие, связанное с этим местом, организацией или действием. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">события</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> faxNumber</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Номер факса. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geo</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GeoCoordinates</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GeoShape</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Географические координаты места. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geoContains</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Геопространственная геометрия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Представляет связь между двумя геометриями (или местами, которые они представляют), связывая содержащую геометрию с содержащейся геометрией. </span><span style="vertical-align: inherit;">&laquo;a содержит b тогда и только тогда, когда никакие точки b не лежат вне a, и по крайней мере одна точка внутренней части b лежит внутри a&raquo;. </span><span style="vertical-align: inherit;">Как определено в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DE-9IM</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geoCoveredBy</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Геопространственная геометрия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Представляет связь между двумя геометриями (или местами, которые они представляют), связывая геометрию с другой, которая ее покрывает. </span><span style="vertical-align: inherit;">Как определено в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DE-9IM</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geoCovers</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Геопространственная геометрия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Представляет связь между двумя геометриями (или местами, которые они представляют), связывая геометрию покрытия с геометрией покрытия. </span><span style="vertical-align: inherit;">&laquo;Каждая точка b является точкой (внутренней или границы) a&raquo;. </span><span style="vertical-align: inherit;">Как определено в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DE-9IM</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geoCrosses</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Геопространственная геометрия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Представляет связь между двумя геометрическими фигурами (или местами, которые они представляют), связывая одну геометрию с другой, которая ее пересекает: &laquo;a кресты b: у них есть некоторые, но не все внутренние точки, общие, и размер пересечения меньше, чем у хотя бы один из них ". </span><span style="vertical-align: inherit;">Как определено в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DE-9IM</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geoDisjoint</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Геопространственная геометрия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Представляет пространственные отношения, в которых две геометрии (или места, которые они представляют) топологически не пересекаются: у них нет общей точки. </span><span style="vertical-align: inherit;">Они образуют набор несвязанных геометрий &raquo;(симметричная взаимосвязь, как определено в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DE-9IM</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geoEquals</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Геопространственная геометрия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Представляет пространственные отношения, в которых две геометрии (или места, которые они представляют) топологически равны, как определено в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DE-9IM</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span><span style="vertical-align: inherit;">&laquo;Две геометрии топологически равны, если их внутренняя часть пересекается и никакая часть внутренней или границы одной геометрии не пересекает внешнюю часть другой&raquo; (симметричное отношение) </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geoIntersects</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Геопространственная геометрия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Представляет пространственные отношения, в которых две геометрии (или места, которые они представляют) имеют по крайней мере одну общую точку. </span><span style="vertical-align: inherit;">Как определено в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DE-9IM</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geoOverlaps</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Геопространственная геометрия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Представляет связь между двумя геометриями (или местами, которые они представляют), связывая одну геометрию с другой, которая географически перекрывает ее, т.е. у них есть некоторые, но не все общие точки. </span><span style="vertical-align: inherit;">Как определено в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DE-9IM</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geoTouches</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Геопространственная геометрия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Представляет пространственные отношения, в которых соприкасаются две геометрии (или места, которые они представляют): у них есть по крайней мере одна общая граничная точка, но нет внутренних точек &raquo;(симметричная взаимосвязь, как определено в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DE-9IM</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> geoWithin</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Геопространственная геометрия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Представляет связь между двумя геометрическими фигурами (или местами, которые они представляют), связывая геометрию с той, которая ее содержит, т.е. она находится внутри (т.е. внутри) ее внутренней части. </span><span style="vertical-align: inherit;">Как определено в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DE-9IM</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> globalLocationNumber</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Глобальный адресный номер</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (GLN, иногда называемый также Международный номер места или ILN) соответствующей организации, лица или место. </span><span style="vertical-align: inherit;">Номер GLN - это 13-значный номер, используемый для идентификации сторон и физического местонахождения. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> hasDriveThroughService</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Логический</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает, предлагает ли какое-либо учреждение (например, </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">FoodEstablishment</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CovidTestingFacility</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) услугу, которой можно воспользоваться, проехав на автомобиле. </span><span style="vertical-align: inherit;">В случае </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CovidTestingFacility</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> такие средства потенциально могут помочь в социальном дистанцировании от других потенциально зараженных пользователей. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> hasMap</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Карта</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес карты места. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">карту</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">карты</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> isAccessibleForFree</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Логический</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Флаг, сигнализирующий о том, что предмет, событие или место доступны бесплатно. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">бесплатное</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> isicV4</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Международный стандарт отраслевой классификации всех видов экономической деятельности (ISIC), редакция 4 кода для конкретной организации, предпринимателя или места. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> latitude</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Число</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Широта места. </span><span style="vertical-align: inherit;">Например </span></span><code>37.42242</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">( </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">WGS 84</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ). </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> logo</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Связанный логотип. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> longitude</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Число</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Долгота места. </span><span style="vertical-align: inherit;">Например </span></span><code>-122.08585</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">( </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">WGS 84</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ). </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> maximumAttendeeCapacity</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Целое число</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Общее количество людей, которые могут посетить мероприятие или место проведения. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> openingHoursSpecification</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Часы работы</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Часы работы определенного места. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> photo</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">фотография</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Фотография этого места. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">фотографии</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> publicAccess</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Логический</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Флаг, сигнализирующий о том, что </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> открыто для посетителей. </span><span style="vertical-align: inherit;">Если это свойство опущено, предполагается, что логическое значение по умолчанию отсутствует. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> review</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Рассмотрение</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обзор товара. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">обзоры</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> slogan</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Слоган или девиз, связанный с товаром. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> smokingAllowed</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Логический</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает, разрешено ли курить на месте, например, в ресторане, гостинице или гостиничном номере. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> specialOpeningHoursSpecification</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Часы работы</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Особые часы работы определенного места. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Используйте это, чтобы явным образом переопределить общие часы работы, </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">введенные</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> в область действия </span><span style="vertical-align: inherit;">openHoursSpecification</span><span style="vertical-align: inherit;"> или </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">OpeningHours</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> telephone</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Телефонный номер. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> tourBookingPage</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Страница с информацией о том, как забронировать тур по какому-либо </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">месту</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , например, </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">жилому комплексу</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> или </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">жилому комплексу</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> в сфере недвижимости, а также о других видах туров, если это необходимо. </span></span>
				</td>
			</tr>
			<!-- Properties for Term: Thing-->
			<tr class="supertype">
				<th class="supertype-name" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойства от </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">вещи</span></span>
				</th>
			</tr>
			<tr>
				<th class="prop-nam"><code> additionalType</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дополнительный тип для элемента, обычно используемый для добавления более конкретных типов из внешних словарей в синтаксис микроданных. </span><span style="vertical-align: inherit;">Это связь между чем-то и классом, в котором эта вещь находится. В синтаксисе RDFa лучше использовать собственный синтаксис RDFa - атрибут typeof - для нескольких типов. </span><span style="vertical-align: inherit;">Инструменты Schema.org могут иметь только более слабое представление о дополнительных типах, в частности о тех, которые определены извне. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> alternateName</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Псевдоним для элемента. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> description</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Описание предмета. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> disambiguatingDescription</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Подсвойство описания. </span><span style="vertical-align: inherit;">Краткое описание предмета, используемого для отличия от других похожих предметов. </span><span style="vertical-align: inherit;">Информация из других свойств (в частности, имя) может быть необходима для того, чтобы описание было полезным для устранения неоднозначности. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> identifier</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">PropertyValue</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойство идентификатора представляет собой любой идентификатор для любого типа </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вещи</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , такой как ISBN, коды GTIN, UUID и т. Д. Schema.org предоставляет специальные свойства для представления многих из них либо в виде текстовых строк, либо в виде ссылок URL (URI). </span><span style="vertical-align: inherit;">См. Дополнительные сведения в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">фоновых примечаниях</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> image</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Изображение предмета. </span><span style="vertical-align: inherit;">Это может быть </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> или полностью описанный </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> mainEntityOfPage</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает страницу (или другую CreativeWork), для которой эта вещь является основной описываемой сущностью. </span><span style="vertical-align: inherit;">Подробные </span><span style="vertical-align: inherit;">сведения </span><span style="vertical-align: inherit;">см. В </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">примечаниях</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> к </span><span style="vertical-align: inherit;">фону</span><span style="vertical-align: inherit;"> . </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">mainEntity</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> name</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Название предмета. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> potentialAction</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Действие</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обозначает потенциальное действие, которое описывает идеализированное действие, в котором эта вещь будет играть роль &laquo;объекта&raquo;. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> sameAs</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес справочной веб-страницы, недвусмысленно указывающий на идентичность элемента. </span><span style="vertical-align: inherit;">Например, URL-адрес страницы в Википедии, записи Викиданных или официального сайта. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> subjectOf</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">событие</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork или мероприятие по этому поводу. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">about</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> url</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес элемента. </span></span>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="example"> <b>Примеры:</b>
		<div class="row  h-40 p-3 text-white bg-dark">
			<div class="col-sm-6">
				<p> &lt;div itemscope itemtype="https://schema.org/TVSeries"&gt; &lt;span itemprop="name"&gt; Анатомия серого &lt;/span&gt; - это телесериал о медицинской драме, созданный
					<br /> &lt;div itemprop="author" itemscope itemtype="https://schema.org/Person"&gt; &lt;span itemprop="name"&gt; Шонда Раймс &lt;/span&gt; &lt;/div&gt; В главной роли:
					<br /> &lt;div itemprop="actor" itemscope itemtype="https://schema.org/Person"&gt; &lt;span itemprop="name"&gt; Джастин Чемберс &lt;/span&gt; &lt;/div&gt;
					<br /> &lt;div itemprop="actor" itemscope itemtype="https://schema.org/Person"&gt; &lt;span itemprop="name"&gt; Джессика Кэпшоу &lt;/span&gt; &lt;/div&gt;
					<br /> &lt;div itemprop="containsSeason" itemscope itemtype="https://schema.org/TVSeason"&gt; &lt;span itemprop="name"&gt; Сезон 1 &lt;/span&gt; -
					<br /> &lt;meta itemprop="numberOfEpisodes" content="14" /&gt;
					<br /> &lt;meta itemprop="datePublished" content="2005-05-22"&gt; 22 мая 2005 г. &lt;/div&gt;
					<br /> &lt;div itemprop="containsSeason" itemscope itemtype="https://schema.org/TVSeason"&gt; &lt;span itemprop="name"&gt; Сезон 2 &lt;/span&gt; -
					<br /> &lt;meta itemprop="numberOfEpisodes" content="27" /&gt;
					<br /> &lt;meta itemprop="datePublished" content="2006-05-14"&gt; 14 мая 2006 г.
					<br /> &lt;div itemprop="episode" itemscope itemtype="https://schema.org/TVEpisode"&gt; &lt;span itemprop="name"&gt; Эпизод 1 &lt;/span&gt; -
					<br /> &lt;meta itemprop="episodeNumber" content="1" /&gt; &lt;/div&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;/div&gt; </p>
			</div>
			<div class="col-sm-6">
				<div class="event-wrapper" itemscope itemtype="https://schema.org/Event">
					<div class="event-date" itemprop="startDate" content="2013-09-14T21: 30">
						14 сен, сб
					</div>
					<div class="event-title" itemprop="name">
						Тайфун с радиационным городом
					</div>
					<div class="event- location " itemprop="location" itemscope itemtype="https://schema.org/Place">
						<span itemprop="name"> Hi-Dive </span>
						<div class="address" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
							<span itemprop="streetAddress"> С. Бродвей, 7 </span>
							<br>
							<span itemprop="addressLocality"> Денвер </span> , <span itemprop="addressRegion"> CO </span> <span itemprop="postalCode"> 80209 </span>
						</div>
					</div>
					<div class="event-time"> 21:30 </div>
					<div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
						<div class="event-price" itemprop="price" content="13.00"> 13,00 долларов США </div>
						<meta itemprop="priceCurrency" содержание="USD"> <a itemprop="url" HREF="http://www.ticketfly.com/purchase/309433"> Билеты </a>
					</div>
				</div>
			</div>
		</div>
		<div class="row  h-40 p-10 text-white bg-dark">
			<div class="col-sm-6">
				<p>&lt;div itemscope itemtype="https://schema.org/CivicStructure"&gt;
					<br /> &lt;span itemprop="name"&gt; Ратуша Спрингфилда &lt;/span&gt;
					<br /> Часы:
					<br /> &lt;meta itemprop="OpeningHours" content="Пн-Пт 09: 00-17: 30"&gt; Пн-Пт 9:00 - 17:30
					<br /> &lt;meta itemprop="OpeningHours" content="Сб 09: 00&ndash;12: 00"&gt; сб с 9:00 до 12:00.
					<br /> Закрыто вс
					<br />&lt;/div&gt;</p>
			</div>
			<div class="col-sm-6">
				<div itemscope itemtype="https://schema.org/CivicStructure">
					<span itemprop="name"> Ратуша Спрингфилда </span>
					<br />Часы:
					<br />
					<meta itemprop="OpeningHours" content="Пн-Пт 09:00-17:30"> Пн-Пт 9:00 - 17:30
					<br />
					<meta itemprop="OpeningHours" content="Сб 09:00–12:00"> сб с 9:00 до 12:00. Закрыто вс
				</div>
			</div>
		</div>
	</div>
</div>

@endsection