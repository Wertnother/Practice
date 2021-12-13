@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')

<div id="mainContent" class="container">
	<div id="infoblock">
		<div id="infohead">
			<h1>Organization</h1> <em>A Schema.org Type</em>
			<br/> </div>
		<div class="superPaths"> <a href="/Thing" class="core" title="Thing">Thing</a> > <a href="/Organization" class="core" title="Organization">Organization</a>
			<br/> </div>
		<div class="description">An organization such as a school, NGO, corporation, club, etc.</div>
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
		<!-- Properties for Term: Organization-->
		<tbody>
			<tr class="supertype">
				<th class="supertype-name" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Недвижимость от </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организации</span></span>
				</th>
			</tr>
			<tr>
				<th class="prop-nam"><code> actionableFeedbackPolicy</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Для </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NewsMediaOrganization</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> или другой </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организации</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span><span style="vertical-align: inherit;">связанной с новостями </span><span style="vertical-align: inherit;">, заявление о деятельности по вовлечению общественности (для новостных СМИ, отделов новостей), включая вовлечение общественности - в цифровом или ином виде - в решения по освещению, составление отчетов и деятельность после публикации. </span></span>
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
				<th class="prop-nam"><code> alumni</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Выпускники организации. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">alumniOf</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> areaServed</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">AdministrativeArea</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GeoShape</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Географическая зона, в которой предоставляется услуга или предлагаемый товар. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">serviceArea</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> award</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Награда, выигранная этим предметом или за этот предмет. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">награды</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> brand</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Бренд</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организация</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Бренд (ы), связанный с продуктом или услугой, или бренд (ы), поддерживаемый организацией или деловым человеком. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> contactPoint</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Точка связи</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Контактное лицо для человека или организации. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">contactPoints</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> correctionsPolicy</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Для </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организации</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (например, </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NewsMediaOrganization</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) - заявление, описывающее (в средствах массовой информации, отделе новостей) политику раскрытия и исправления ошибок. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> department</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Отношения между организацией и отделом этой организации, также описываемые как организация (допускаются разные URL-адреса, логотипы, часы работы). </span><span style="vertical-align: inherit;">Например: магазин с аптекой или пекарня с кафе. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> dissolutionDate</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата роспуска организации. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> diversityPolicy</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Заявление о политике разнообразия путем </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организации</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , например , </span><span style="vertical-align: inherit;">в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NewsMediaOrganization</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span><span style="vertical-align: inherit;">Для </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NewsMediaOrganization</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> - заявление, описывающее политику разнообразия редакции как в отношении персонала, так и в отношении источников, обычно с предоставлением данных о персонале. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> diversityStaffingReport</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Статья</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Для </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организации</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (часто, но не обязательно, </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NewsMediaOrganization</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) - отчет по вопросам кадрового разнообразия. </span><span style="vertical-align: inherit;">В контексте новостей это могут быть, например, отчеты ASNE или RTDNA (США), или отчеты самих пользователей. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> duns</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Номер Dun &amp; Bradstreet DUNS для идентификации организации или делового человека. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> email</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Адрес электронной почты. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> employee</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Кто-то работает в этой организации. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">сотрудников</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> ethicsPolicy</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Заявление об этической политике, например, </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NewsMediaOrganization в</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> отношении журналистской и издательской практики или </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ресторана</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , страница с описанием политики в отношении источников питания. </span><span style="vertical-align: inherit;">В случае </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NewsMediaOrganization этическая</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> политика обычно представляет собой заявление, описывающее личные, организационные и корпоративные стандарты поведения, ожидаемые организацией. </span></span>
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
				<th class="prop-nam"><code> founder</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек, основавший эту организацию. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">учредителей</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> foundingDate</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата основания этой организации. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> foundingLocation</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место, где была основана Организация. </span></span>
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
				<th class="prop-nam"><code> globalLocationNumber</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Глобальный адресный номер</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (GLN, иногда называемый также Международный номер места или ILN) соответствующей организации, лица или место. </span><span style="vertical-align: inherit;">Номер GLN - это 13-значный номер, используемый для идентификации сторон и физического местонахождения. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> hasCredential</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Образовательный</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Удостоверение, присвоенное лицу или организации. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> hasMerchantReturnPolicy</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">MerchantReturnPolicy</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Задает применимую MerchantReturnPolicy. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">hasProductReturnPolicy</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> hasOfferCatalog</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ПредложениеКаталог</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает на список OfferCatalog для этой организации, лица или услуги. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> hasPOS</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Пункты продаж, управляемые организацией или физическим лицом. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> interactionStatistic</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">InteractionCounter</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количество взаимодействий для CreativeWork с использованием веб-сайта или SoftwareApplication. </span><span style="vertical-align: inherit;">Следует использовать наиболее конкретный дочерний тип InteractionCounter. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">InteractionCount</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
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
				<th class="prop-nam"><code> knowsAbout</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">вещь</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Из с </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лица</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , и менее , как </span><span style="vertical-align: inherit;">правило , </span><span style="vertical-align: inherit;">из </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организации</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , чтобы указать тему , </span><span style="vertical-align: inherit;">которая , </span><span style="vertical-align: inherit;">как известно , </span><span style="vertical-align: inherit;">о - предполагая возможный опыт , </span><span style="vertical-align: inherit;">но не подразумевая его. </span><span style="vertical-align: inherit;">Мы не </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">разделяем</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> здесь уровни навыков и не связываем это с образовательным контентом, событиями, целями или </span><span style="vertical-align: inherit;">описаниями объявлений о </span><span style="vertical-align: inherit;">вакансиях</span><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> knowsLanguage</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Язык</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Из с </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лица</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , и менее , как </span><span style="vertical-align: inherit;">правило , </span><span style="vertical-align: inherit;">из </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организации</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , чтобы указать известный язык. </span><span style="vertical-align: inherit;">Мы не делаем различий между уровнями навыков или чтением / письмом / говорением / жестами. </span><span style="vertical-align: inherit;">Используйте коды языков из стандарта </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">IETF BCP 47</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> legalName</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Официальное название организации, например, зарегистрированное название компании. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> leiCode</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Идентификатор организации, который однозначно идентифицирует юридическое лицо, как определено в ISO 17442. </span></span>
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
				<th class="prop-nam"><code> logo</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Связанный логотип. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> makesOffer</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Предложение</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указатель на продукты или услуги, предлагаемые организацией или человеком. </span><span style="vertical-align: inherit;">Перевернутая</span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> собственность: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">givenBy</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> member</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Член организации или участника программы. </span><span style="vertical-align: inherit;">Организации могут быть членами организаций; </span><span style="vertical-align: inherit;">Членство в программе обычно для физических лиц. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">musicGroupMember</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">члены</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">memberOf</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> memberOf</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">участие в программе</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация (или членство в программе), к которой принадлежит данное лицо или организация. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">member</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> naics</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код Североамериканской отраслевой классификации (NAICS) для конкретной организации или делового человека. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> nonprofitStatus</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NonprofitType</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Статус некоммерческой организации указывает на правовой статус некоммерческой организации по месту ее основной деятельности. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> numberOfEmployees</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количественное значение</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количество сотрудников в организации, например, в бизнесе. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> ownershipFundingInfo</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">AboutPage</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Для </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организации</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (часто, но не обязательно, </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NewsMediaOrganization</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) - описание организационной структуры собственности; </span><span style="vertical-align: inherit;">финансирование и гранты. </span><span style="vertical-align: inherit;">В новостях / СМИ это делается с особым упором на редакционную независимость. </span><span style="vertical-align: inherit;">Обратите внимание, что </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">спонсор</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> также доступен и может использоваться для того, чтобы сделать основную информацию о спонсоре машиночитаемой. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> owns</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Информация о праве собственности</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">продукт</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Товары, принадлежащие организации или физическому лицу. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> parentOrganization</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Более крупная организация, в которую входит </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">данная</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> организация, если таковая имеется. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">branchOf</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">subOrganization</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> publishingPrinciples</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойство publishPrinciples указывает (обычно через </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) документ, описывающий редакционные принципы </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организации</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (или отдельного лица, например, </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">человека,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ведущего блог), которые связаны с их деятельностью как издателя, например, с политикой этики или разнообразия. </span><span style="vertical-align: inherit;">Применительно к </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (например, </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NewsArticle</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) эти принципы принадлежат стороне, которая несет основную ответственность за создание </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Хотя такие политики чаще всего выражаются на естественном языке, иногда связанная информация (например, указывающая </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">спонсора</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) может быть выражена с использованием терминологии schema.org. </span></span>
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
				<th class="prop-nam"><code> seeks</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Потребность</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указатель на продукты или услуги, которые ищет организация или лицо (спрос). </span></span>
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
				<th class="prop-nam"><code> sponsor</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Человек или организация, которые поддерживают вещь посредством обещания, обещания или финансового вклада. </span><span style="vertical-align: inherit;">например, спонсор медицинского исследования или корпоративный спонсор мероприятия. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> subOrganization</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Отношения между двумя организациями, при которых первая включает в себя вторую, например, в качестве дочерней компании. </span><span style="vertical-align: inherit;">См. Также: более конкретное свойство &laquo;отдел&raquo;. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">parentOrganization</span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> taxID</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Налоговый / фискальный идентификатор организации или лица, например, ИНН в США или CIF / NIF в Испании. </span></span>
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
				<th class="prop-nam"><code> unnamedSourcesPolicy</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Для </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организации</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (обычно </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">NewsMediaOrganization</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) - заявление о политике использования неназванных источников и процессе принятия решения. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> vatID</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Идентификатор налога на добавленную стоимость организации или лица. </span></span>
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
				<p>&lt;div itemscope itemtype="https://schema.org/Order"&gt;
					<br /> &lt;div itemprop="seller" itemscope itemtype="https://schema.org/Organization"&gt;
					<br /> &lt;b itemprop="name"&gt; Расходные материалы ACME &lt;/b&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;div itemprop="customer" itemscope itemtype="https://schema.org/Person"&gt;
					<br /> &lt;b itemprop="name"&gt; Джейн Доу &lt;/b&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;div itemprop="ordersItem" itemscope itemtype="https://schema.org/OrderItem"&gt;
					<br /> Номер позиции : &lt;span itemprop="orderItemNumber"&gt; abc123 &lt;/span&gt;
					<br /> &lt;span itemprop="orderQuantity"&gt; 1 &lt;/span&gt;
					<br /> &lt;div itemprop="ordersItem" itemscope itemtype="https://schema.org/Product"&gt;
					<br /> &lt;span itemprop="name"&gt; Виджет &lt;/span&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;link itemprop="orderItemStatus" href="https://schema.org/OrderDelivered" /&gt; Доставлено
					<br /> &lt;div itemprop="orderDelivery" itemscope itemtype="https://schema.org/ParcelDelivery"&gt;
					<br /> &lt;время itemprop="expectedArrivalFrom"&gt; 2015-03-10 &lt;/ время&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;div itemprop="ordersItem" itemscope itemtype="https://schema.org/OrderItem"&gt;
					<br /> Номер позиции : &lt;span itemprop="orderItemNumber"&gt; def456 &lt;/span&gt;
					<br /> &lt;span itemprop="orderQuantity"&gt; 4 &lt;/span&gt;
					<br /> &lt;div itemprop="ordersItem" itemscope itemtype="https://schema.org/Product"&gt;
					<br /> &lt;span itemprop="name"&gt; Аксессуары для виджетов &lt;/span&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;link itemprop="orderItemStatus" href="https://schema.org/OrderInTransit" /&gt; Отправлено
					<br /> &lt;div itemprop="orderDelivery" itemscope itemtype="https://schema.org/ParcelDelivery"&gt;
					<br /> &lt;время itemprop="expectedArrivalFrom"&gt; 2015-03-15 &lt;/ время&gt;
					<br /> &lt;время itemprop="expectedArrivalUntil"&gt; 2015-03-18 &lt;/ время&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;/div&gt;
					<br /> &lt;/div&gt;</p>
			</div>
			<div class="col-sm-6">
				<div itemscope itemtype="https://schema.org/Order">
					<div itemprop="seller" itemscope itemtype="https://schema.org/Organization">
						<b itemprop="name"> Расходные материалы ACME </b>
					</div>
					<div itemprop="customer" itemscope itemtype="https://schema.org/Person">
						<b itemprop="name"> Джейн Доу </b>
					</div>
					<div itemprop="ordersItem" itemscope itemtype="https://schema.org/OrderItem">
						Номер позиции : <span itemprop="orderItemNumber"> abc123 </span>
						<span itemprop="orderQuantity"> 1 </span>
						<div itemprop="ordersItem" itemscope itemtype="https://schema.org/Product">
							<span itemprop="name"> Виджет </span>
						</div>
						<link itemprop="orderItemStatus" href="https://schema.org/OrderDelivered" /> Доставлено
						<div itemprop="orderDelivery" itemscope itemtype="https://schema.org/ParcelDelivery">
							<time itemprop="expectedArrivalFrom"> 2015-03-10 </time>
						</div>
					</div>
					<div itemprop="ordersItem" itemscope itemtype="https://schema.org/OrderItem">
						Номер позиции : <span itemprop="orderItemNumber"> def456 </span>
						<span itemprop="orderQuantity"> 4 </span>
						<div itemprop="ordersItem" itemscope itemtype="https://schema.org/Product">
							<span itemprop="name"> Аксессуары для виджетов </span>
						</div>
						<link itemprop="orderItemStatus" href="https://schema.org/OrderInTransit" /> Отправлено
						<div itemprop="orderDelivery" itemscope itemtype="https://schema.org/ParcelDelivery">
							<time itemprop="expectedArrivalFrom"> 2015-03-15 </time>
								<time itemprop="expectedArrivalUntil"> 2015-03-18 </time>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row border  h-100 p-5 text-white bg-dark">
			<div class="col-sm-6">
				<p>&lt;p itemscope itemprop="organization" itemtype="https://schema.org/Organization"&gt;
					<br /> &lt;a HREF="http://npr.org" itemprop="url"&gt;
					<br /> &lt;span itemprop="name"&gt; Национальное общественное радио &lt;/span&gt; &lt;/a&gt; имеет спонсора:
					<br /> &lt;span itemprop="спонсор" itemscope itemtype="https://schema.org/Organization"&gt;
					<br /> &lt;a itemprop = "url" HREF = "http://www.example.com/GloboCorp"&gt;
					<br /> &lt;span itemprop = "name" &gt; GloboCorp &lt;/span&gt; &lt;/a&gt;
					<br /> &lt;/span&gt; .
					<br />&lt;/p&gt;</p>
			</div>
			<div class="col-sm-6">
				<p itemscope itemprop="organization" itemtype="https://schema.org/Organization">
					<a HREF="http://npr.org" itemprop="url">
						<span itemprop="name">Национальное общественное радио</span> </a> имеет спонсора:
					<span itemprop="спонсор" itemscope itemtype="https://schema.org/Organization">   
          <a itemprop = "url" HREF = "http://www.example.com/GloboCorp">  
          <span itemprop = "name" >GloboCorp</span> </a>
					</span>.
				</p>
			</div>
		</div>
	</div>
</div>

@endsection