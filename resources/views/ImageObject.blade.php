@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')

<div id="mainContent" class="container">
	<div id="infoblock">
		<div id="infohead">
			<h1>ImageObject</h1> <em>A Schema.org Type</em>
			<br/> </div>
		<div class="superPaths"> <a href="/Thing" class="core" title="Thing">Thing</a> > <a href="/CreativeWork" class="core" title="CreativeWork">CreativeWork</a> > <a href="/MediaObject" class="core" title="MediaObject">MediaObject</a> > <a href="/ImageObject" class="core" title="ImageObject">ImageObject</a>
			<br/> </div>
		<div class="description">Файл изображения.</div>
	</div>
	<table class="table table-bordered definition-table">
		<thead>
			<tr>
				<th><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Имущество </span> </span>
				</th>
				<th><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Ожидаемый тип </span> </span>
				</th>
				<th><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Описание </span> </span>
				</th>
			</tr>
		</thead>
		<!-- Properties for Term: ImageObject-->
		<tbody>
			<tr class="supertype">
				<th class="supertype-name" colspan="3"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Свойства из </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ImageObject </span> </span>
				</th>
			</tr>
			<tr>
				<th class="prop-nam"><code> caption </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MediaObject </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Заголовок для этого объекта. </span> <span style="vertical-align: inherit;"> Для загружаемых машинных форматов (субтитры, субтитры и т. Д.) Используйте MediaObject и укажите </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> encodingFormat </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> embeddedTextCaption </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Представляет текстовые субтитры из </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MediaObject </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , например текст &laquo;мема&raquo;. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> exifData </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> PropertyValue </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> exif данные для этого объекта. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> representativeOfPage </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Логический </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает, соответствует ли это изображение содержанию страницы. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> thumbnail </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ImageObject </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Миниатюра для изображения или видео. </span> </span>
				</td>
			</tr>
			<!-- Properties for Term: MediaObject-->
			<tr class="supertype">
				<th class="supertype-name" colspan="3"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Свойства из </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MediaObject </span> </span>
				</th>
			</tr>
			<tr>
				<th class="prop-nam"><code> associatedArticle </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Новостная статья </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Новостная статья, связанная с медиа-объектом. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> bitrate </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Битрейт медиа-объекта. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> contentSize </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Размер файла в байтах (мег / килограмм). </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> contentUrl </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Фактические байты медиа-объекта, например файла изображения или видеофайла. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> duration </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Продолжительность </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Продолжительность элемента (фильма, аудиозаписи, события и т. Д.) В </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> формате даты ISO 8601 </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> embedUrl </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL-адрес, указывающий на проигрыватель определенного видео. </span> <span style="vertical-align: inherit;"> Как правило, это информация в </span> </span> <code> src </code> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> элементе </span> </span> <code> embed </code> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> тега и не должна совпадать с содержимым </span> </span> <code> loc </code> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> тега. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> encodesCreativeWork </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Творчество </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork, закодированный этим медиа-объектом. </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> кодировка </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> encodingFormat </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Тип носителя обычно выражается в формате MIME (см. </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Сайт IANA </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> и </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ссылку на MDN </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ), например, application / zip для двоичного </span> <span style="vertical-align: inherit;"> файла </span> <span style="vertical-align: inherit;"> SoftwareApplication, audio / mpeg для .mp3 и т. Д.). </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> В случаях, когда </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> имеет несколько представлений типов мультимедиа, </span> <span style="vertical-align: inherit;"> может использоваться </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> кодирование </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> для указания каждого </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> объекта MediaObject </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> вместе с конкретной </span> <span style="vertical-align: inherit;"> информацией </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> encodingFormat </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Незарегистрированные или нишевые кодировки и форматы файлов могут быть указаны вместо этого через наиболее подходящий URL-адрес, например, определяя веб-страницу или запись в Википедии / Викиданных. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> FileFormat </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> endTime </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> время </span> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> время </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Конец времени чего-то. </span> <span style="vertical-align: inherit;"> Для зарезервированного события или услуги (например, FoodEstablishmentReservation) - время, в которое оно должно закончиться. </span> <span style="vertical-align: inherit;"> Для действий, охватывающих период времени, когда действие было выполнено. </span> <span style="vertical-align: inherit;"> например, Джон писал книгу с января по </span> </span> <em> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> декабрь </span> </span> </em> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> Для мультимедиа, включая аудио и видео, это временной сдвиг конца клипа в более крупном файле. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратите внимание, что Event использует startDate / endDate вместо startTime / endTime, даже при описании дат со временем. </span> <span style="vertical-align: inherit;"> Эта ситуация может быть прояснена в будущих версиях. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> height </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Расстояние </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> количественное значение </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Высота предмета. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> ineligibleRegion </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> GeoShape </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> место </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Код ISO 3166-1 (ISO 3166-1 alpha-2) или ISO 3166-2, место или GeoShape для геополитического региона (регионов), для которых предложение или спецификация стоимости доставки недействительны, например регион, в котором транзакция не разрешена. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> См. Также </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> доступный регион </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> interpretedAsClaim </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Требовать </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Используется для обозначения конкретного утверждения, содержащегося, подразумеваемого, переведенного или уточненного из содержимого </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MediaObject </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> или другого </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> Сторона, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> выполняющая </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> перевод, может быть указана с помощью </span> <span style="vertical-align: inherit;"> ClaimInterpreter </span> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> playerType </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Требуется тип проигрывателя - например, Flash или Silverlight. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> productionCompany </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Производственная компания или студия, отвечающая за объект, например сериал, видеоигру, эпизод и т. Д. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> regionsAllowed </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Место </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Регионы, в которых разрешено использование СМИ. </span> <span style="vertical-align: inherit;"> Если не указано иное, предполагается, что это разрешено везде. </span> <span style="vertical-align: inherit;"> Укажите страны в </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> формате ISO 3166 </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> requiresSubscription </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Boolean </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MediaSubscription </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает, требуется ли для использования СМИ подписка (платная или бесплатная). </span> <span style="vertical-align: inherit;"> Допустимые значения: </span> </span> <code> true </code> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> или </span> </span> <code> false </code> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> (обратите внимание, что в более ранней версии было &laquo;да&raquo;, &laquo;нет&raquo;). </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> sha256 </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ША-2 </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> SHA256 хэш содержания этого пункта. </span> <span style="vertical-align: inherit;"> Например, вход нулевой длины имеет значение e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> startTime </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> время </span> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> время </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Время начала чего-то. </span> <span style="vertical-align: inherit;"> Для зарезервированного события или услуги (например, FoodEstablishmentReservation) - время, когда оно должно начаться. </span> <span style="vertical-align: inherit;"> Для действий, охватывающих период времени, когда действие было выполнено. </span> <span style="vertical-align: inherit;"> например, Джон писал книгу с </span> </span> <em> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> января </span> </span> </em> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> по декабрь. </span> <span style="vertical-align: inherit;"> Для мультимедиа, включая аудио и видео, это временное смещение начала клипа в более крупном файле. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратите внимание, что Event использует startDate / endDate вместо startTime / endTime, даже при описании дат со временем. </span> <span style="vertical-align: inherit;"> Эта ситуация может быть прояснена в будущих версиях. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> uploadDate </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата, когда этот медиа-объект был загружен на этот сайт. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> width </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Расстояние </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> количественное значение </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Ширина предмета. </span> </span>
				</td>
			</tr>
			<!-- Properties for Term: CreativeWork-->
			<tr class="supertype">
				<th class="supertype-name" colspan="3"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Свойства от </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span>
				</th>
			</tr>
			<tr>
				<th class="prop-nam"><code> about </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Вещь </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Предмет содержания. </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> subjectOf </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> abstract </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Аннотация - это краткое описание </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> accessMode </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Система сенсорного восприятия человека или когнитивные способности, с помощью которых человек может обрабатывать или воспринимать информацию. </span> <span style="vertical-align: inherit;"> Ожидаемые значения: слуховые, тактильные, текстовые, визуальные, цветозависимые, chartOnVisual, chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> accessModeSufficient </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ItemList </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Список одиночных или комбинированных режимов доступа, достаточных для понимания всего интеллектуального содержания ресурса. </span> <span style="vertical-align: inherit;"> Ожидаемые значения: слуховые, тактильные, текстовые, визуальные. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> accessibilityAPI </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает, что ресурс совместим с указанным API </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> специальных возможностей </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ( </span> <span style="vertical-align: inherit;"> вики WebSchemas перечисляет возможные значения </span> <span style="vertical-align: inherit;"> ). </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> accessibilityControl </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Определяет методы ввода, достаточные для полного управления описанным ресурсом ( </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> вики WebSchemas перечисляет возможные значения </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ). </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> accessibilityFeature </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Особенности содержимого ресурса, такие как доступные носители, альтернативы и поддерживаемые улучшения доступности ( </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> вики WebSchemas перечисляет возможные значения </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ). </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> accessibilityHazard </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Характеристика описываемого ресурса, физиологически опасная для некоторых пользователей. </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Относится </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> к руководству 2.3 WCAG 2.0 ( </span> <span style="vertical-align: inherit;"> возможные значения перечислены в вики WebSchemas </span> <span style="vertical-align: inherit;"> ). </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> accessibilitySummary </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Удобочитаемый обзор конкретных функций или недостатков специальных возможностей, согласованный с другими метаданными о специальных возможностях, но выражающий такие тонкости, как &laquo;краткие описания присутствуют, но для невизуальных пользователей потребуются длинные описания&raquo; или &laquo;есть краткие описания, а не длинные описания. необходимы." </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> accountablePerson </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Человек </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Определяет Лицо, которое несет юридическую ответственность за CreativeWork. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> acquireLicensePage </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает на страницу, на которой документируется, как можно приобрести или иным образом приобрести лицензии для текущего элемента. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> aggregateRating </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> AggregateRating </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Общая оценка, основанная на совокупности обзоров или оценок элемента. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> alternativeHeadline </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Второстепенное название CreativeWork. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> archivedAt </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> <span style="vertical-align: inherit;"> веб- </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> страница </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает страницу или другую ссылку, участвующую в архивировании </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> В случае </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MediaReview </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> элементы в </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MediaReviewItem </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> часто могут стать недоступными, но архивируются архивными, журналистскими, активистскими или правоохранительными организациями. </span> <span style="vertical-align: inherit;"> В таких случаях ссылочная страница не может напрямую публиковать контент. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> assesses </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DefinedTerm </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Описываемый элемент предназначен для оценки компетенции или результата обучения, определяемого указанным термином. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> associatedMedia </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MediaObject </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Медиа-объект, кодирующий CreativeWork. </span> <span style="vertical-align: inherit;"> Это свойство является синонимом кодировки. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> audience </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Зрительская аудитория </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Целевая аудитория, то есть группа, для которой что-то было создано. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> serviceAudience </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> audio </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> AudioObject </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> клип </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MusicRecording </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Встроенный звуковой объект. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> author </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Автор этого контента или рейтинга. </span> <span style="vertical-align: inherit;"> Обратите внимание, что особенность автора заключается в том, что HTML 5 предоставляет специальный механизм для указания авторства с помощью тега rel. </span> <span style="vertical-align: inherit;"> Это эквивалентно этому и может использоваться как взаимозаменяемые. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> award </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Награда, выигранная этим предметом или за этот предмет. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> награды </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> character </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Человек </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Вымышленный человек, связанный с творчеством. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> citation </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Цитата или ссылка на другую творческую работу, например, другую публикацию, веб-страницу, научную статью и т. Д. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> comment </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Комментарий </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Комментарии, как правило, от пользователей. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> commentCount </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Целое число </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Количество комментариев, полученных этим CreativeWork (например, статья, вопрос или ответ). </span> <span style="vertical-align: inherit;"> Это наиболее применимо к работам, опубликованным на веб-сайтах с системой комментирования; </span> <span style="vertical-align: inherit;"> дополнительные комментарии могут существовать в другом месте. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> conditionsOfAccess </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Условия, влияющие на доступность элемента или методы доступа к нему. </span> <span style="vertical-align: inherit;"> Обычно используется для реальных предметов , </span> <span style="vertical-align: inherit;"> таких как </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ArchiveComponent </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , проведенного в </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ArchiveOrganization </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> Это свойство не подходит для использования в качестве общего механизма управления доступом в Интернет. </span> <span style="vertical-align: inherit;"> Это выражается только на естественном языке. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Например, &laquo;Доступно по предварительной записи из читального зала&raquo; или &laquo;Доступно только из зарегистрированных учетных записей&raquo;. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> contentLocation </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Место </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Местоположение изображено или описано в содержании. </span> <span style="vertical-align: inherit;"> Например, место на фотографии или картине. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> contentRating </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Рейтинг </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Официальный рейтинг материала, например &laquo;MPAA PG-13&raquo;. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> contentReferenceTime </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DateTime </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Конкретное время, описываемое творческой работой, для произведений (например, статей, видеообъектов и т. Д.), Которые подчеркивают определенный момент в рамках События. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> contributor </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Вторичный участник CreativeWork или Event. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> copyrightHolder </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Сторона, обладающая законными авторскими правами на CreativeWork. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> copyrightNotice </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст уведомления, подходящий для описания аспектов авторского права на эту Творческую работу, в идеале с указанием владельца авторских прав на Работу. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> copyrightYear </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Число </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Год, в течение которого заявленные авторские права на CreativeWork были впервые заявлены. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> correction </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CorrectionComment </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает на исправление в </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> посредством </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CorrectionComment </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , в текстовом виде или в другом документе. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> countryOfOrigin </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Страна </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Страна происхождения чего-либо, включая продукты, а также творческие произведения, такие как фильмы и телепрограммы. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> В случае телевидения и кино это будет страна основных офисов производственной компании или лица, ответственного за фильм. </span> <span style="vertical-align: inherit;"> Для других видов </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> сложно дать полное общее руководство, и такие свойства, как </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> contentLocation </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> и </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> locationCreated, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> могут быть более применимыми. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> В случае товаров - страна происхождения товара. </span> <span style="vertical-align: inherit;"> Точная интерпретация этого может варьироваться в зависимости от контекста и типа продукта и не может быть перечислена здесь полностью. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> creativeWorkStatus </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DefinedTerm </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Статус творческой работы с точки зрения стадии ее жизненного цикла. </span> <span style="vertical-align: inherit;"> Примеры терминов включают "Неполный", "Черновик", "Опубликованный", "Устаревший". </span> <span style="vertical-align: inherit;"> Некоторые организации определяют набор терминов для этапов жизненного цикла публикации. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> creator </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Создатель / автор CreativeWork. </span> <span style="vertical-align: inherit;"> Это то же самое, что и свойство Author для CreativeWork. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> creditText </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст, который может использоваться для обозначения лиц и / или организаций, связанных с опубликованной Творческой работой. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> dateCreated </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DateTime </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата создания CreativeWork или добавления элемента в DataFeed. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> dateModified </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DateTime </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата последнего изменения CreativeWork или изменения записи элемента в DataFeed. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> datePublished </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DateTime </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата первого эфира / публикации. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> discussionUrl </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Ссылка на страницу с комментариями CreativeWork. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> editEIDR </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> EIDR </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> (развлечения идентификатор регистрация) </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> идентификатор </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , представляющий конкретное редактирование / издание для произведения кино или телевидения. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Например, фильм, известный как &laquo;Охотники за привидениями&raquo; с названием </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> EIDR </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &laquo;10.5240 / 7EC7-228A-510A-053E-CBB8-J&raquo;, имеет несколько правок, например &laquo;10.5240 / 1F2A-E1C5-680A-14C6-E76B-I&raquo; и &laquo;10.5240 / 8A35-3BEE-6497-5D12-9E4F-3&raquo;. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Поскольку типы schema.org, такие как </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Movie </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> и </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> TVEpisode, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> могут использоваться как для произведений, так и для их нескольких выражений, можно использовать </span> <span style="vertical-align: inherit;"> только </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> titleEIDR </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> (для общего описания) или вместе с </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> editEIDR. </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> для более подробного описания редактирования. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> editor </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Человек </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает человека, который редактировал CreativeWork. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> educationalAlignment </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> AlignmentObject </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Согласованность с установленной образовательной структурой. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Это свойство не следует использовать, если характер согласования можно описать с помощью простого свойства, например, чтобы выразить, что ресурс </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> учит </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> или </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> оценивает </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> компетенцию. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> educationalLevel </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DefinedTerm </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Уровень с точки зрения продвижения в образовательном или учебном контексте. </span> <span style="vertical-align: inherit;"> Примеры уровней образования включают &laquo;начальный&raquo;, &laquo;средний&raquo; или &laquo;продвинутый&raquo;, а также формальные наборы показателей уровня. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> educationalUse </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DefinedTerm </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Цель работы в контексте обучения; </span> <span style="vertical-align: inherit;"> например, &laquo;задание&raquo;, &laquo;групповая работа&raquo;. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> encoding </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MediaObject </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Медиа-объект, кодирующий CreativeWork. </span> <span style="vertical-align: inherit;"> Это свойство является синонимом AssociatedMedia. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> кодировки </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> encodesCreativeWork </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> encodingFormat </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Тип носителя обычно выражается в формате MIME (см. </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Сайт IANA </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> и </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ссылку на MDN </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ), например, application / zip для двоичного </span> <span style="vertical-align: inherit;"> файла </span> <span style="vertical-align: inherit;"> SoftwareApplication, audio / mpeg для .mp3 и т. Д.). </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> В случаях, когда </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> имеет несколько представлений типов мультимедиа, </span> <span style="vertical-align: inherit;"> может использоваться </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> кодирование </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> для указания каждого </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> объекта MediaObject </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> вместе с конкретной </span> <span style="vertical-align: inherit;"> информацией </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> encodingFormat </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Незарегистрированные или нишевые кодировки и форматы файлов могут быть указаны вместо этого через наиболее подходящий URL-адрес, например, определяя веб-страницу или запись в Википедии / Викиданных. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> FileFormat </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> exampleOfWork </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Творчество </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Творческое произведение, примером / экземпляром / реализацией / производным от данного произведения. </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> workExample </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> expires </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата истечения срока действия контента, когда он больше не является полезным или доступным. </span> <span style="vertical-align: inherit;"> Например, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> VideoObject </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> или </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> NewsArticle </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , доступность или актуальность которых ограничена по времени, или </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> проверка </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> фактов </span> <span style="vertical-align: inherit;"> ClaimReview </span> <span style="vertical-align: inherit;"> , издатель которой хочет указать, что она может больше не быть актуальной (или полезной для выделения) после некоторой даты. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> funder </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Человек или организация, которые поддерживают (спонсируют) что-то посредством какого-либо финансового вклада. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> genre </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Жанр творческой работы, транслируемый телеканалом или группой. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> hasPart </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Творчество </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обозначает элемент или CreativeWork, который является частью этого элемента, или CreativeWork (в некотором смысле). </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> isPartOf </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> headline </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Заголовок статьи. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> inLanguage </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Язык </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Язык контента или исполнения или используемый в действии. </span> <span style="vertical-align: inherit;"> Используйте один из языковых кодов из стандарта </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> IETF BCP 47 </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> См. Также </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> availableLanguage </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> язык </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> interactionStatistic </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> InteractionCounter </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Количество взаимодействий для CreativeWork с использованием веб-сайта или SoftwareApplication. </span> <span style="vertical-align: inherit;"> Следует использовать наиболее конкретный дочерний тип InteractionCounter. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> InteractionCount </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> interactivityType </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Преобладающий способ обучения, поддерживаемый учебным ресурсом. </span> <span style="vertical-align: inherit;"> Допустимые значения: &laquo;активный&raquo;, &laquo;подробный&raquo; или &laquo;смешанный&raquo;. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> interpretedAsClaim </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Требовать </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Используется для обозначения конкретного утверждения, содержащегося, подразумеваемого, переведенного или уточненного из содержимого </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> MediaObject </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> или другого </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> Сторона, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> выполняющая </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> перевод, может быть указана с помощью </span> <span style="vertical-align: inherit;"> ClaimInterpreter </span> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> isAccessibleForFree </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Логический </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Флаг, сигнализирующий о том, что предмет, событие или место доступны бесплатно. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> бесплатное </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> isBasedOn </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> продукт </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Ресурс, на основе которого эта работа получена или на основе которого она является модификацией или адаптацией. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> isBasedOnUrl </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> isFamilyFriendly </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Логический </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает, подходит ли этот контент для семейного просмотра. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> isPartOf </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает на элемент или CreativeWork, частью которого является этот элемент или CreativeWork (в некотором смысле). </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> hasPart </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> keywords </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DefinedTerm </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Ключевые слова или теги, используемые для описания этого содержания. </span> <span style="vertical-align: inherit;"> Несколько записей в списке ключевых слов обычно разделяются запятыми. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> learningResourceType </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DefinedTerm </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Преобладающий тип или вид, характеризующий учебный ресурс. </span> <span style="vertical-align: inherit;"> Например, &laquo;презентация&raquo;, &laquo;раздаточный материал&raquo;. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> license </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Лицензионный документ, который применяется к этому контенту, обычно обозначается URL-адресом. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> locationCreated </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Место </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Местоположение, в котором был создан CreativeWork, который может не совпадать с местоположением, указанным в CreativeWork. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> mainEntity </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Вещь </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обозначает основную сущность, описанную на какой-либо странице или в другом CreativeWork. </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> mainEntityOfPage </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> maintainer </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Сопровождающий из </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Dataset </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , пакет программного обеспечения ( </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> SoftwareApplication </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ) или другой </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> проект </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> Сопровождающий - это </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Лицо </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> или </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> которые управляют </span> <span style="vertical-align: inherit;"> добавлением </span> <span style="vertical-align: inherit;"> и / или публикацией некоторых (обычно сложных) артефактов. </span> <span style="vertical-align: inherit;"> Распространение программного обеспечения и данных обычно основано на &laquo;исходных&raquo; источниках. </span> <span style="vertical-align: inherit;"> Когда </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> сопровождающий </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> применяется к определенной версии чего-либо, например, к конкретной версии или упаковке </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> набора данных </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , всегда возможно, что у исходного источника есть другой сопровождающий. </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> isBasedOn </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Свойство можно использовать для обозначения таких отношений между наборами данных, чтобы прояснить различные роли обслуживания. </span> <span style="vertical-align: inherit;"> Точно так же в случае программного обеспечения у пакета могут быть выделенные специалисты по сопровождению, работающие над интеграцией в дистрибутивы программного обеспечения, такие как Ubuntu, а также ведущие специалисты по сопровождению основной работы. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> material </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Продукт </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Материал, из которого что-то сделано, например кожа, шерсть, хлопок, бумага. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> materialExtent </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> QuantitativeValue </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Количество описываемых материалов или выражение занимаемого ими физического пространства. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> mentions </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Вещь </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает, что CreativeWork содержит ссылку на концепцию, но не обязательно о ней. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> offers </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Спрос </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> предложение </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Предложение предоставить этот элемент - например, предложение продать продукт, взять напрокат DVD с фильмом, оказать услугу или раздать билеты на мероприятие. </span> <span style="vertical-align: inherit;"> Используйте </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> businessFunction, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> чтобы указать вид предлагаемой транзакции, например, продажа, аренда и т. Д. Это свойство также может использоваться для описания </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> спроса </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> Хотя это свойство указано, как и ожидалось, для ряда распространенных типов, оно может использоваться в других. </span> <span style="vertical-align: inherit;"> В этом случае использование второго типа, такого как Продукт или подтип Продукта, может прояснить характер предложения. </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> itemOffered </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> pattern </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DefinedTerm </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Узор, на котором что-то есть, например &laquo;горошек&raquo;, &laquo;полосатый&raquo;, &laquo;канадский флаг&raquo;. </span> <span style="vertical-align: inherit;"> Значения обычно выражаются в виде текста, хотя также поддерживаются ссылки на схемы контролируемых значений. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> position </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Целое число </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Положение элемента в серии или последовательности элементов. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> producer </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Человек или организация, создавшие произведение (например, музыкальный альбом, фильм, телесериал / радиосериал и т. Д.). </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> provider </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Поставщик услуг, оператор услуги или исполнитель услуги; </span> <span style="vertical-align: inherit;"> производитель товаров. </span> <span style="vertical-align: inherit;"> Другая сторона (продавец) может предлагать эти услуги или товары от имени поставщика. </span> <span style="vertical-align: inherit;"> Поставщик также может выступать в качестве продавца. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> оператора связи </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> publication </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> PublicationEvent </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Событие публикации, связанное с элементом. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> publisher </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Издатель творческой работы. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> publisherImprint </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Издательское подразделение, выпустившее комикс. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> publishingPrinciples </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Свойство publishPrinciples указывает (обычно через </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ) документ, описывающий редакционные принципы </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> организации </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> (или отдельного лица, например, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> человека, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ведущего блог), которые связаны с их деятельностью как издателя, например, с политикой этики или разнообразия. </span> <span style="vertical-align: inherit;"> Применительно к </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> (например, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> NewsArticle </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ) эти принципы принадлежат стороне, которая несет основную ответственность за создание </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Хотя такие политики чаще всего выражаются на естественном языке, иногда связанная информация (например, указывающая </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> спонсора </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ) может быть выражена с использованием терминологии schema.org. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> recordedAt </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Мероприятие </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Событие, на котором была записана CreativeWork. </span> <span style="vertical-align: inherit;"> CreativeWork может фиксировать все или часть мероприятия. </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> recordIn </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> releasedEvent </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> PublicationEvent </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Место и время выпуска релиза, выраженное как PublicationEvent. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> review </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Рассмотрение </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обзор товара. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> обзоры </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> schemaVersion </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает (по URL-адресу или строке) конкретную версию схемы, используемую в некоторых CreativeWork. </span> <span style="vertical-align: inherit;"> Это свойство было создано в первую очередь для обозначения использования определенного выпуска schema.org, например, </span> </span> <code> 10.0 </code> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> в виде простой строки или, более явно, через URL-адрес </span> </span> <code> https://schema.org/docs/releases.html#v10.0 </code> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> Могут быть ситуации, в которых другие схемы могут быть полезны таким образом, например, </span> </span> <code> http://dublincore.org/specifications/dublin-core/dces/1999-07-02/ </code> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> но это не было тщательно изучено в сообществе. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> sdDatePublished </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дата </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает дату создания / публикации текущих структурированных данных. </span> <span style="vertical-align: inherit;"> Обычно используется вместе с </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> sdPublisher </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> sdLicense </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Лицензионный документ, который применяется к этим структурированным данным, обычно обозначается URL-адресом. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> sdPublisher </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает сторону, ответственную за создание и публикацию текущей разметки структурированных данных, обычно в тех случаях, когда структурированные данные автоматически извлекаются из существующего опубликованного контента, но публикуются на другом сайте. </span> <span style="vertical-align: inherit;"> Например, студенческие проекты и инициативы по открытым данным часто повторно публикуют существующий контент с более четко структурированными метаданными. </span> <span style="vertical-align: inherit;"> Свойство </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> sdPublisher </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> помогает сделать такие методы более явными. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> size </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DefinedTerm </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> QuantitativeValue, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> SizeSpecification, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Стандартизированный размер продукта или творческой работы, задаваемый либо простой текстовой строкой (например, &laquo;XL&raquo;, &laquo;32Wx34L&raquo;), либо QuantitativeValue с unitCode, либо исчерпывающей и структурированной </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> спецификацией SizeSpecification </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ; </span> <span style="vertical-align: inherit;"> в других случаях параметры </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ширины </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> высоты </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> глубины </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> и </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> веса </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> могут быть более применимыми. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> sourceOrganization </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация, от имени которой работал создатель. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> spatial </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Место </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &laquo;Пространственное&raquo; свойство может использоваться в случаях, когда более конкретные свойства (например, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> locationCreated </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> SpaceCoverage </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> contentLocation </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ) не известны как подходящие. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> spatialCoverage </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Место </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Пространственное покрытие CreativeWork указывает на место (а), на котором сосредоточено содержание. </span> <span style="vertical-align: inherit;"> Это подсвойство contentLocation, предназначенное в первую очередь для более технических и подробных материалов. </span> <span style="vertical-align: inherit;"> Например, с набором данных он указывает области, которые описывает набор данных: набор данных о погоде в Нью-Йорке будет иметь пространственное покрытие, которое было местом: штат Нью-Йорк. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> sponsor </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Человек или организация, которые поддерживают вещь посредством обещания, обещания или финансового вклада. </span> <span style="vertical-align: inherit;"> например, спонсор медицинского исследования или корпоративный спонсор мероприятия. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> teaches </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DefinedTerm </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Описываемый элемент предназначен для того, чтобы помочь человеку изучить компетенцию или результат обучения, определяемый упомянутым термином. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> temporal </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DateTime </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Свойство &laquo;Temporal&raquo; можно использовать в случаях, когда </span> <span style="vertical-align: inherit;"> не известно, что подходят </span> <span style="vertical-align: inherit;"> более конкретные свойства (например, </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> temporalCoverage </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> dateCreated </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> dateModified </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> datePublished </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ). </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> temporalCoverage </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> DateTime </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> TemporalCoverage CreativeWork указывает период, к которому применяется контент, то есть который он описывает либо как DateTime, либо как текстовую строку, указывающую период времени в </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> формате интервала времени ISO 8601 </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> В случае набора данных он обычно будет указывать соответствующий период времени в точной нотации (например, для набора данных переписи 2011 года 2011 год будет записан как &laquo;2011/2012&raquo;). </span> <span style="vertical-align: inherit;"> Другие формы контента, например ScholarlyArticle, Book, TVSeries или TVEpisode, могут указывать свое временное покрытие в более широких терминах - текстуально или через общеизвестный URL. </span> <span style="vertical-align: inherit;"> Письменные произведения, такие как книги, иногда также могут иметь точное временное покрытие, например, работа, установленная в 1939&ndash;1945 годах, может быть указана в формате интервала ISO 8601 через &laquo;1939/1945&raquo;. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Бесконечные диапазоны дат могут быть написаны с ".." вместо даты окончания. </span> <span style="vertical-align: inherit;"> Например, &laquo;2015-11 / ..&raquo; обозначает диапазон, начинающийся в ноябре 2015 г., без указания конечной даты. </span> <span style="vertical-align: inherit;"> Это предварительный вариант и может быть обновлен в будущем, когда ISO 8601 будет официально обновлен. </span> <span style="vertical-align: inherit;"> Заменяет </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> datasetTimeInterval </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> text </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текстовое содержание CreativeWork. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> thumbnailUrl </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Миниатюрное изображение, относящееся к Вещи. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> timeRequired </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Продолжительность </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Приблизительное или типичное время, необходимое для работы с этим учебным ресурсом или через него для типичной целевой аудитории, например, &laquo;PT30M&raquo;, &laquo;PT1H25M&raquo;. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> translationOfWork </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Творчество </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Произведение, с которого было переведено данное произведение. </span> <span style="vertical-align: inherit;"> например, 物种起源 - это перевод &laquo;Происхождения видов&raquo;. </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> workTranslation </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> translator </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> лицо </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Организация или человек, который адаптирует творческую работу к разным языкам, региональным особенностям и техническим требованиям целевого рынка, или переводит во время какого-либо мероприятия. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> typicalAgeRange </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Типичный ожидаемый возрастной диапазон, например, &laquo;7&ndash;9&raquo;, &laquo;11&ndash;&raquo;. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> usageInfo </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Свойство schema.org </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> usageInfo </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> указывает дополнительную информацию о </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> <span style="vertical-align: inherit;"> Это свойство применимо как к работам, которые находятся в свободном доступе, так и к тем, которые требуют оплаты или других транзакций. </span> <span style="vertical-align: inherit;"> Он может ссылаться на дополнительную информацию, например, об ожиданиях сообщества в отношении предпочтительных правил ссылки и цитирования, а также на сведения о покупках. </span> <span style="vertical-align: inherit;"> Для того, что может быть лицензировано на коммерческой основе, usageInfo может быть предоставлена подробная информация о вариантах лицензирования для конкретных ресурсов. </span> </span>
					<br />
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Это свойство можно использовать вместе со свойством лицензии, которое указывает лицензии, применимые к некоторой части контента. </span> <span style="vertical-align: inherit;"> Свойство usageInfo может предоставлять информацию о других вариантах лицензирования, например о приобретении прав на коммерческое использование изображения, которое также доступно по некоммерческим лицензиям Creative Commons. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> version </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Число </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Версия CreativeWork, воплощенная в указанном ресурсе. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> video </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Клип </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> видеообъект </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Встроенный видеообъект. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> workExample </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Творчество </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Пример / экземпляр / реализация / вывод концепции этого творчества. </span> <span style="vertical-align: inherit;"> например. </span> <span style="vertical-align: inherit;"> Издание в мягкой обложке, первое издание или электронная книга. </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> exampleOfWork </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> workTranslation </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Творчество </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Произведение, являющееся переводом содержания этого произведения. </span> <span style="vertical-align: inherit;"> Например, 西遊記 имеет английский перевод &laquo;Путешествие на Запад&raquo;, немецкий перевод &laquo;Monkeys Pilgerfahrt&raquo; и вьетнамский перевод T&acirc;y du k&yacute; b&igrave;nh khảo. </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> translationOfWork </span> </span>
				</td>
			</tr>
			<!-- Properties for Term: Thing-->
			<tr class="supertype">
				<th class="supertype-name" colspan="3"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Свойства от </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> вещи </span> </span>
				</th>
			</tr>
			<tr>
				<th class="prop-nam"><code> additionalType </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Дополнительный тип для элемента, обычно используемый для добавления более конкретных типов из внешних словарей в синтаксис микроданных. </span> <span style="vertical-align: inherit;"> Это связь между чем-то и классом, в котором эта вещь находится. В синтаксисе RDFa лучше использовать собственный синтаксис RDFa - атрибут typeof - для нескольких типов. </span> <span style="vertical-align: inherit;"> Инструменты Schema.org могут иметь только более слабое представление о дополнительных типах, в частности о тех, которые определены извне. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> alternateName </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Псевдоним для элемента. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> description </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Описание предмета. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> disambiguatingDescription </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Подсвойство описания. </span> <span style="vertical-align: inherit;"> Краткое описание предмета, используемого для отличия от других похожих предметов. </span> <span style="vertical-align: inherit;"> Информация из других свойств (в частности, имя) может быть необходима для того, чтобы описание было полезным для устранения неоднозначности. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> identifier </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> PropertyValue </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> текст </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Свойство идентификатора представляет собой любой идентификатор для любого типа </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Вещи </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> , такой как ISBN, коды GTIN, UUID и т. Д. Schema.org предоставляет специальные свойства для представления многих из них либо в виде текстовых строк, либо в виде ссылок URL (URI). </span> <span style="vertical-align: inherit;"> См. Дополнительные сведения в </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> фоновых примечаниях </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> image </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ImageObject </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Изображение предмета. </span> <span style="vertical-align: inherit;"> Это может быть </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL-адрес </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> или полностью описанный </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> ImageObject </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> . </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> mainEntityOfPage </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Указывает страницу (или другую CreativeWork), для которой эта вещь является основной описываемой сущностью. </span> <span style="vertical-align: inherit;"> Подробные </span> <span style="vertical-align: inherit;"> сведения </span> <span style="vertical-align: inherit;"> см. В </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> примечаниях </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> к </span> <span style="vertical-align: inherit;"> фону </span> <span style="vertical-align: inherit;"> . </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> mainEntity </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> name </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Текст </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Название предмета. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> potentialAction </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Действие </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обозначает потенциальное действие, которое описывает идеализированное действие, в котором эта вещь будет играть роль &laquo;объекта&raquo;. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> sameAs </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL-адрес справочной веб-страницы, недвусмысленно указывающий на идентичность элемента. </span> <span style="vertical-align: inherit;"> Например, URL-адрес страницы в Википедии, записи Викиданных или официального сайта. </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> subjectOf </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> &nbsp; или </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> событие </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> CreativeWork или мероприятие по этому поводу. </span> </span>
					<br /> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> Обратное свойство: </span> </span> <span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> about </span> </span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> url </code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL </span> </span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"> <span style="vertical-align: inherit;"> URL-адрес элемента. </span> </span>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="example"> <b>Примеры:</b>
		<div class="row border  h-100 p-5 text-white bg-dark">
			<div class="col-sm-6">
				<div>
					<div>&lt;div&nbsp;itemscope&nbsp;itemtype="https://schema.org/ImageObject"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&nbsp;itemprop="name"&gt;&nbsp;Пляж&nbsp;в&nbsp;Мексике&nbsp;&lt;/h2&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src="https://www.planetware.com/wpimages/2019/12/mexico-best-beaches-tulum-riviera-maya.jpg"&nbsp;height="300"&nbsp;alt="Солнечный&nbsp;песчаный&nbsp;пляж."&nbsp;itemprop="contentUrl"&nbsp;/&gt;&nbsp;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;br/&gt;Автор&nbsp;&lt;span&nbsp;itemprop="author"&gt;&nbsp;Джейн&nbsp;Доу&nbsp;&lt;/span&gt;&nbsp;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;br/&gt;Сфотографировано&nbsp;в&nbsp;&lt;span&nbsp;itemprop="contentLocation"&gt;&nbsp;Пуэрто-Валларта,&nbsp;Мексика&nbsp;&lt;/span&gt;&nbsp;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;br/&gt;Дата&nbsp;загрузки:</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="datePublished"&nbsp;content="2008-01-25"&gt;&nbsp;25&nbsp;января&nbsp;2008&nbsp;г.</div>
					<br />
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;br/&gt;&lt;span&nbsp;itemprop="description"&gt;&nbsp;Я&nbsp;сделал&nbsp;этот&nbsp;снимок&nbsp;во&nbsp;время&nbsp;отпуска&nbsp;в&nbsp;прошлом&nbsp;году.&nbsp;&lt;/span&gt;</div>
					<div>&lt;/div&gt;</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div itemscope itemtype="https://schema.org/ImageObject">
					<h2 itemprop="name"> Пляж в Мексике </h2>
					<img src="https://www.planetware.com/wpimages/2019/12/mexico-best-beaches-tulum-riviera-maya.jpg" height="300" alt="Солнечный песчаный пляж." itemprop="contentUrl" />
					<br/>Автор <span itemprop="author"> Джейн Доу </span>
					<br/>Сфотографировано в <span itemprop="contentLocation"> Пуэрто-Валларта, Мексика </span>
					<br/>Дата загрузки:
					<meta itemprop="datePublished" content="2008-01-25"> 25 января 2008 г.

					<br/><span itemprop="description"> Я сделал этот снимок во время отпуска в прошлом году. </span>
				</div>
			</div>
		</div>
		<div class="row border  h-100 p-5 text-white bg-dark">
			<div class="col-sm-6">
				<div>
					<div>&lt;div&nbsp;itemscope&nbsp;itemtype="https://schema.org/ImageObject"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&nbsp;itemprop="name"&gt;&nbsp;Пляж&nbsp;в&nbsp;Мексике&nbsp;&lt;/h2&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src="https://www.planetware.com/wpimages/2019/12/mexico-best-beaches-tulum-riviera-maya.jpg"&nbsp;height="300"&nbsp;alt=""&nbsp;itemprop="contentUrl"/&gt;&nbsp;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;br/&gt;Автор&nbsp;&lt;span&nbsp;itemprop="author"&gt;&nbsp;Джейн&nbsp;Доу&nbsp;&lt;/span&gt;&nbsp;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;br/&gt;Сфотографировано&nbsp;в</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="contentLocation"&gt;&nbsp;Пуэрто-Валларта,&nbsp;Мексика&nbsp;&lt;/span&gt;&nbsp;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;br/&gt;Дата&nbsp;загрузки:</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="datePublished"&nbsp;content="2008-01-25"&gt;&nbsp;25&nbsp;января&nbsp;2008&nbsp;г.</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;br/&gt;&lt;span&nbsp;itemprop="description"&gt;&nbsp;Я&nbsp;сделал&nbsp;этот&nbsp;снимок&nbsp;во&nbsp;время&nbsp;отпуска&nbsp;в&nbsp;прошлом&nbsp;году.&nbsp;&lt;/span&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;!&nbsp;-&nbsp;Примечание.&nbsp;Мы&nbsp;не&nbsp;разделяем&nbsp;строки&nbsp;значений&nbsp;на&nbsp;информацию&nbsp;о&nbsp;единицах&nbsp;измерения&nbsp;и&nbsp;значении,&nbsp;поскольку&nbsp;необработанные&nbsp;данные&nbsp;EXIF&nbsp;не&nbsp;обеспечивают&nbsp;такой&nbsp;степени&nbsp;детализации.&nbsp;Если&nbsp;вы&nbsp;можете&nbsp;разделить&nbsp;блок,&nbsp;вы&nbsp;можете&nbsp;использовать&nbsp;свойство&nbsp;unitText&nbsp;-&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="exifData"&nbsp;itemscope&nbsp;itemtype="https://schema.org/PropertyValue"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="name"&nbsp;content="Время&nbsp;воздействия"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="value"&nbsp;content="1/659&nbsp;сек."&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="exifData"&nbsp;itemscope&nbsp;itemtype="https://schema.org/PropertyValue"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="name"&nbsp;content="FNumber"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="value"&nbsp;content="f&nbsp;/&nbsp;4.0"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="exifData"&nbsp;itemscope&nbsp;itemtype="https://schema.org/PropertyValue"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="name"&nbsp;content="MaxApertureValue"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="value"&nbsp;content="2.00"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="exifData"&nbsp;itemscope&nbsp;itemtype="https://schema.org/PropertyValue"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="name"&nbsp;content="Режим&nbsp;замера"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="value"&nbsp;content="Pattern"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="exifData"&nbsp;itemscope&nbsp;itemtype="https://schema.org/PropertyValue"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="name"&nbsp;content="Flash"&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="value"&nbsp;content="Flash&nbsp;не&nbsp;сработал"&nbsp;.&gt;</div>
					<div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;</div>
					<div>&lt;/div&gt;</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div itemscope itemtype="https://schema.org/ImageObject">
					<h2 itemprop="name"> Пляж в Мексике </h2>
					<img src="https://www.planetware.com/wpimages/2019/12/mexico-best-beaches-tulum-riviera-maya.jpg" height="300" alt="" itemprop="contentUrl" />
					<br/>Автор <span itemprop="author"> Джейн Доу </span>
					<br/>Сфотографировано в
					<span itemprop="contentLocation"> Пуэрто-Валларта, Мексика </span>
					<br/>Дата загрузки:
					<meta itemprop="datePublished" content="2008-01-25"> 25 января 2008 г.
					<br/><span itemprop="description"> Я сделал этот снимок во время отпуска в прошлом году. </span>
					<! - Примечание. Мы не разделяем строки значений на информацию о единицах измерения и значении, поскольку необработанные данные EXIF ​​не обеспечивают такой степени детализации. Если вы можете разделить блок, вы можете использовать свойство unitText ->
					<div itemprop="exifData" itemscope itemtype="https://schema.org/PropertyValue">
						<meta itemprop="name" content="Время воздействия">
						<meta itemprop="value" content="1/659 сек.">
					</div>
					<div itemprop="exifData" itemscope itemtype="https://schema.org/PropertyValue">
						<meta itemprop="name" content="FNumber">
						<meta itemprop="value" content="f / 4.0">
					</div>
					<div itemprop="exifData" itemscope itemtype="https://schema.org/PropertyValue">
						<meta itemprop="name" content="MaxApertureValue">
						<meta itemprop="value" content="2.00">
					</div>
					<div itemprop="exifData" itemscope itemtype="https://schema.org/PropertyValue">
						<meta itemprop="name" content="Режим замера">
						<meta itemprop="value" content="Pattern">
					</div>
					<div itemprop="exifData" itemscope itemtype="https://schema.org/PropertyValue">
						<meta itemprop="name" content="Flash">
						<meta itemprop="value" content="Flash не сработал" .>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection