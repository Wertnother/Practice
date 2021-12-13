@extends('layouts.app')

@section('title')Event @endsection

@section('content')

<div id="mainContent" class="container">
	<div id="infoblock">
		<div id="infohead">
			<h1>Event</h1> <em>A Schema.org Type</em>
			<br/> </div>
		<div class="superPaths"> <a href="/Thing" class="core" title="Thing">Thing</a> > <a href="/Event" class="core" title="Event">Event</a>
			<br/> </div>
		<div class="description">Событие, происходящее в определенное время и в определенном месте, например концерт, лекция или фестиваль. Информация о билетах может быть добавлена ​​через свойство предложения . Повторяющиеся события могут быть структурированы как отдельные объекты Event.</div>
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
		<!-- Properties for Term: Event-->
		<tbody>
			<tr class="supertype">
				<th class="supertype-name" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойства из </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">события</span></span>
				</th>
			</tr>
			<tr>
				<th class="prop-nam"><code> about</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вещь</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Предмет содержания. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">subjectOf</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> actor</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Актер, например, на телевидении, радио, в кино, видеоиграх и т. Д. Или на мероприятии. </span><span style="vertical-align: inherit;">Актеры могут быть связаны с отдельными предметами или с сериалом, сериалом, клипом. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">актеров</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
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
				<th class="prop-nam"><code> attendee</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек или организация, посетившие мероприятие. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">участников</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> audience</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Зрительская аудитория</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Целевая аудитория, то есть группа, для которой что-то было создано. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">serviceAudience</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> composer</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек или организация, написавшие сочинение, или композитор произведения, исполненного на каком-то мероприятии. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> contributor</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вторичный участник CreativeWork или Event. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> director</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Режиссер, например, телепередач, радио, фильмов, видеоигр и т. Д. Или мероприятий. </span><span style="vertical-align: inherit;">Режиссеры могут быть связаны с отдельными предметами или с сериалом, сериалом, клипом. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">директоров</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> doorTime</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата, </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">время</span><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">время</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Время приема начнется. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> duration</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продолжительность</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продолжительность элемента (фильма, аудиозаписи, события и т. Д.) В </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">формате даты ISO 8601</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> endDate</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DateTime</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата и время окончания элемента (в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">формате даты ISO 8601</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ). </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> eventAttendanceMode</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">EventAttendanceModeEnumeration</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">EventAttendanceMode события указывает, происходит ли оно в сети, в автономном режиме или смешанно. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> eventSchedule</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Расписание</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Связывает </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">событие</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> с </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">расписанием</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span><span style="vertical-align: inherit;">Бывают обстоятельства, при которых предпочтительнее совместно использовать расписание для серии повторяющихся событий, а не данные о самих отдельных событиях. </span><span style="vertical-align: inherit;">Например, веб-сайт или приложение могут предпочесть публиковать расписание еженедельных занятий в тренажерном зале, а не предоставлять данные по каждому мероприятию. </span><span style="vertical-align: inherit;">Расписание может обрабатываться приложениями для добавления предстоящих событий в календарь. </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Событие</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , которое связанно с </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Перечнем</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , используя это свойство не должен иметь </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">STARTDATE</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> или </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ENDDATE</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> свойств. </span><span style="vertical-align: inherit;">Вместо этого они определены в соответствующем </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">расписании.</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">, это позволяет избежать неоднозначности для клиентов, использующих данные. </span><span style="vertical-align: inherit;">Свойство может иметь повторяющиеся значения для указания разных расписаний, например, для разных месяцев или сезонов. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> eventStatus</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">EventStatusType</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">EventStatus события представляет его статус; </span><span style="vertical-align: inherit;">особенно полезно, когда мероприятие отменяется или переносится. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> funder</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек или организация, которые поддерживают (спонсируют) что-то посредством какого-либо финансового вклада. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> inLanguage</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Язык</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Язык контента или исполнения или используемый в действии. </span><span style="vertical-align: inherit;">Используйте один из языковых кодов из стандарта </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">IETF BCP 47</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span><span style="vertical-align: inherit;">См. Также </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">availableLanguage</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">язык</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
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
				<th class="prop-nam"><code> location</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">PostalAddress</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">VirtualLocation</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Местоположение, например, где происходит событие, где находится организация или где происходит действие. </span></span>
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
				<th class="prop-nam"><code> maximumPhysicalAttendeeCapacity</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Целое число</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Максимальная физическая вместимость участников </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">события, у</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> которого </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">eventAttendanceMode</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> является </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">OfflineEventAttendanceMode</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (или автономные аспекты в случае </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">MixedEventAttendanceMode</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ). </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> maximumVirtualAttendeeCapacity</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Целое число</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Максимальная физическая емкость участника из </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">События</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> которого </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">eventAttendanceMode</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> является </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">OnlineEventAttendanceMode</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (или онлайн аспектов, в случае </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">MixedEventAttendanceMode</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ). </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> offers</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Спрос</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">предложение</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Предложение предоставить этот элемент - например, предложение продать продукт, взять напрокат DVD с фильмом, оказать услугу или раздать билеты на мероприятие. </span><span style="vertical-align: inherit;">Используйте </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">businessFunction,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> чтобы указать вид предлагаемой транзакции, например, продажа, аренда и т. Д. Это свойство также может использоваться для описания </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">спроса</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span><span style="vertical-align: inherit;">Хотя это свойство указано, как и ожидалось, для ряда распространенных типов, оно может использоваться в других. </span><span style="vertical-align: inherit;">В этом случае использование второго типа, такого как Продукт или подтип Продукта, может прояснить характер предложения. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">itemOffered</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> organizer</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организатор Мероприятия. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> performer</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Исполнитель на мероприятии - например, ведущий, музыкант, музыкальная группа или актер. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">исполнителей</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> previousStartDate</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Используется вместе с eventStatus для перенесенных или отмененных событий. </span><span style="vertical-align: inherit;">Это свойство содержит ранее запланированную дату начала. </span><span style="vertical-align: inherit;">Для перенесенных событий следует использовать свойство startDate для новой запланированной даты начала. </span><span style="vertical-align: inherit;">В (редком) случае события, которое откладывалось и переносилось несколько раз, это поле может повторяться. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> recordedIn</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Творчество</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork, который полностью или частично запечатлел это событие. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">recordAt</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> remainingAttendeeCapacity</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Целое число</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количество мест для участников, которые остаются нераспределенными. </span></span>
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
				<th class="prop-nam"><code> sponsor</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек или организация, которые поддерживают вещь посредством обещания, обещания или финансового вклада. </span><span style="vertical-align: inherit;">например, спонсор медицинского исследования или корпоративный спонсор мероприятия. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> startDate</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DateTime</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата и время начала элемента (в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">формате даты ISO 8601</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ). </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> subEvent</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Мероприятие</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Событие, которое является частью этого события. </span><span style="vertical-align: inherit;">Например, конференция включает в себя множество презентаций, каждая из которых является второстепенным событием конференции. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вложенные события</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">superEvent</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> superEvent</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Мероприятие</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Событие, частью которого является данное событие. </span><span style="vertical-align: inherit;">Например, для каждой коллекции индивидуальных музыкальных представлений может быть музыкальный фестиваль в качестве суперсобытия. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">subEvent</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> translator</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация или человек, который адаптирует творческую работу к разным языкам, региональным особенностям и техническим требованиям целевого рынка, или переводит во время какого-либо мероприятия. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> typicalAgeRange</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Типичный ожидаемый возрастной диапазон, например, &laquo;7&ndash;9&raquo;, &laquo;11&ndash;&raquo;. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> workFeatured</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Творчество</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Работа, представленная на каком-то мероприятии, например, выставленная на ExhibitionEvent. </span><span style="vertical-align: inherit;">Конкретные подсвойства доступны для workPerformed (например, play) или workPresent (фильм на ScreeningEvent). </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> workPerformed</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Творчество</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Произведение, исполненное в каком-то событии, например, спектакль в TheaterEvent. </span></span>
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
		<div class="row border  h-100 p-5 text-white bg-dark">
			<div class="col-sm-6">
				<p>
					&lt;div class="event-wrapper" itemscope itemtype="https://schema.org/Event"&gt;
					<br /> &lt;div class="event-date" itemprop="startDate" content="2013-09-14T21: 30"&gt;
					<br /> 14 сен, сб
					<br /> &lt;/div&gt;
					<br /> &lt;div class="event-title" itemprop="name"&gt;
					<br /> Тайфун с радиационным городом
					<br /> &lt;/div&gt;
					<br /> &lt;div class="event- location " itemprop="location" itemscope itemtype="https://schema.org/Place"&gt;
					<br /> &lt;span itemprop="name"&gt; Hi-Dive &lt;/span&gt;
					<br /> &lt;div class="address" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"&gt;
					<br /> &lt;span itemprop="streetAddress"&gt; С. Бродвей, 7 &lt;/span&gt;
					<br /> &lt;br&gt;
					<br /> &lt;span itemprop="addressLocality"&gt; Денвер &lt;/span&gt; , &lt;span itemprop="addressRegion"&gt; CO &lt;/span&gt; &lt;span itemprop="postalCode"&gt; 80209 &lt;/span&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;div class="event-time"&gt; 21:30 &lt;/div&gt;
					<br /> &lt;div itemprop="offers" itemscope itemtype="https://schema.org/Offer"&gt;
					<br /> &lt;div class="event-price" itemprop="price" content="13.00"&gt; 13,00 долларов США &lt;/div&gt;
					<br /> &lt;meta itemprop="priceCurrency" содержание="USD"&gt; &lt;a itemprop="url" HREF="http://www.ticketfly.com/purchase/309433"&gt; Билеты &lt;/a&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;/div&gt;
				</p>

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
		<div class="row border  h-100 p-5 text-white bg-dark">
			<div class="col-sm-6">
				<p>&lt;div class="event-wrapper"&gt;
					<br /> &lt;div class="event-date"&gt; Сб, 12 октября &lt;/div&gt;
					<br /> &lt;div&gt; &lt;span&gt; (ранее запланировано на 14 сентября) &lt;/span&gt; &lt;/div&gt;
					<br /> &lt;div class="event-title"&gt; Тайфун с радиационным городом &lt;/div&gt;
					<br /> &lt;div class="событие-место"&gt;
					<br /> Привет-дайв
					<br /> &lt;div class="address"&gt;
					<br /> 7 С. Бродвей
					<br /> &lt;br&gt; Денвер, Колорадо 80209
					<br /> &lt;/div&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;div class="event-time"&gt; 22:00 &lt;/div&gt;
					<br /> &lt;span&gt;
					<br /> &lt;div class = "event-price" &gt; 13,00 долларов США &lt;/div&gt;
					<br /> &lt;a HREF = "http://www.ticketfly.com/purchase/309433"&gt; Билеты &lt;/a&gt;
					<br /> &lt;/span&gt;
					<br />&lt;/div&gt;</p>
			</div>
			<div class="col-sm-6">
				<div class="event-wrapper">
					<div class="event-date"> Сб, 12 октября </div>
					<div> <span> (ранее запланировано на 14 сентября) </span> </div>
					<div class="event-title"> Тайфун с радиационным городом </div>
					<div class="событие-место">
						Привет-дайв
						<div class="address">
							7 С. Бродвей
							<br> Денвер, Колорадо 80209
						</div>
					</div>
					<div class="event-time"> 22:00 </div>
					<span>
  <div class = "event-price" > 13,00 долларов США </div> 
  <a HREF = "http://www.ticketfly.com/purchase/309433"> Билеты </a> 
 </span>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection