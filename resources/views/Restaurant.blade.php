@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')

<div id="mainContent" class="container">
	<div id="infoblock">
		<div id="infohead">
			<h1>Restaurant</h1> <em>A Schema.org Type</em>
			<br/> </div>
		<div class="superPaths"> <a href="/Thing" class="core" title="Thing">Thing</a> > <a href="/Organization" class="core" title="Organization">Organization</a> > <a href="/LocalBusiness" class="core" title="LocalBusiness">LocalBusiness</a> > <a href="/FoodEstablishment" class="core" title="FoodEstablishment">FoodEstablishment</a> > <a href="/Restaurant" class="core" title="Restaurant">Restaurant</a>
			<br/> <a href="/Thing" class="core" title="Thing">Thing</a> > <a href="/Place" class="core" title="Place">Place</a> > <a href="/LocalBusiness" class="core" title="LocalBusiness">LocalBusiness</a> > <a href="/FoodEstablishment" class="core" title="FoodEstablishment">FoodEstablishment</a> > <a href="/Restaurant" class="core" title="Restaurant">Restaurant</a>
			<br/> </div>
		<div class="description">Ресторан.</div>
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
		<!-- Properties for Term: Restaurant-->
		<!-- Properties for Term: FoodEstablishment-->
		<tbody>
			<tr class="supertype">
				<th class="supertype-name" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Недвижимость от </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">FoodEstablishment</span></span>
				</th>
			</tr>
			<tr>
				<th class="prop-nam"><code> acceptsReservations</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Boolean</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Text</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает, принимает ли FoodEstablishment бронирования. </span><span style="vertical-align: inherit;">Значения могут быть логическими, URL-адресом, по которому можно сделать резервирование, или (для обратной совместимости) строками </span></span><code>Yes</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">или </span></span><code>No</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> hasMenu</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Меню</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Либо фактическое меню в виде структурированного представления, в виде текста или URL-адреса меню. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">меню</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> servesCuisine</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Кухня ресторана. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> starRating</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Рейтинг</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Официальный рейтинг гостиничного или общественного питания, например, от национальных ассоциаций или органов по стандартизации. </span><span style="vertical-align: inherit;">Используйте свойство author, чтобы указать рейтинговую организацию, например, организацию с таким названием, как (например, HOTREC, DEHOGA, WHR или Hotelstars). </span></span>
				</td>
			</tr>
			<!-- Properties for Term: LocalBusiness-->
			<tr class="supertype">
				<th class="supertype-name" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Недвижимость от </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">LocalBusiness</span></span>
				</th>
			</tr>
			<tr>
				<th class="prop-nam"><code> currenciesAccepted</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Принимаемая валюта. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Используйте стандартные форматы: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">формат валюты ISO 4217,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> например, &laquo;USD&raquo;; </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Символ</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> тикера для криптовалют, например, &laquo;BTC&raquo;; </span><span style="vertical-align: inherit;">хорошо известные названия </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">систем местной биржевой торговли</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (LETS) и других типов валют, например, "Ithaca HOUR". </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> openingHours</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Общие часы работы для бизнеса. </span><span style="vertical-align: inherit;">Часы работы могут быть указаны в виде недельного диапазона времени, начиная с дней, а затем раз в день. </span><span style="vertical-align: inherit;">Несколько дней можно указать через запятую ',', разделяя каждый день. </span><span style="vertical-align: inherit;">Дневной или временной диапазон указывается через дефис "-".</span></span>
					<br />
					<br />
					<ul>
						<li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дни определяются с </span><span style="vertical-align: inherit;">помощью следующих комбинаций из </span><span style="vertical-align: inherit;">двух букв: </span></span><code>Mo</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">, </span></span><code>Tu</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">, </span></span><code>We</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">, </span></span><code>Th</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">, </span></span><code>Fr</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">, </span></span><code>Sa</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">, </span></span><code>Su</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">.</span></span>
						</li>
						<li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Время указано в формате 24:00. </span><span style="vertical-align: inherit;">Например, 15:00 указано как </span></span><code>15:00</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">, 10:00 - как </span></span><code>10:00</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">.</span></span>
						</li>
						<li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вот пример: </span></span><code>&lt;time itemprop="openingHours" datetime="Tu,Th 16:00-20:00"&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">.</span></span>
						</li>
						<li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Если бизнес открыт 7 дней в неделю, то его можно указать как </span></span><code>&lt;time itemprop="openingHours" datetime="Mo-Su"&gt;Monday through Sunday, all day&lt;/time&gt;</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">.</span></span>
						</li>
					</ul>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> paymentAccepted</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Наличные, кредитная карта, криптовалюта, система обмена на местной бирже и т. Д. </span></span>
				</td>
			</tr>
			<tr>
				<th class="prop-nam"><code> priceRange</code></th>
				<td class="prop-ect"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Например, ценовой диапазон компании </span></span><code>$$$</code><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">. </span></span>
				</td>
			</tr>
			<!-- Properties for Term: Organization-->
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
			<!-- Properties for Term: Place-->
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
		<div class="row border  h-100 p-5 text-white bg-dark">
			<div class="col-sm-6">
				<p>&lt;div itemscope itemtype="https://schema.org/Restaurant"&gt;
					<br /> &lt;h1 itemprop="name"&gt; Фондю для развлечения и фэнтези &lt;/h1&gt;
					<br /> &lt;p itemprop="description"&gt; Великолепно и весело на все случаи жизни. &lt;/p&gt;
					<br /> &lt;p&gt; Открыто: &lt;span itemprop="openHours" content="Пн, Вт, Ср, Чт, Пт, Сб, Вс 11: 30&ndash;23: 00"&gt; Ежедневно с 11:30 до 23:00 &lt;/span&gt; &lt;/ p&gt;
					<br /> &lt;p&gt; Телефон: &lt;span itemprop=" phone " content="+155501003333"&gt; 555-0100-3333 &lt;/span&gt; &lt;/p&gt;
					<br /> &lt;р&gt; Просмотр &lt;a itemprop="hasMenu" HREF="http://example.com/menu"&gt; наше меню &lt;/a&gt; . &lt;/p&gt;
					<br />&lt;/div&gt;</p>
			</div>
			<div class="col-sm-6">
				<div itemscope itemtype="https://schema.org/Restaurant">
					<h1 itemprop="name"> Фондю для развлечения и фэнтези </h1>
					<p itemprop="description"> Великолепно и весело на все случаи жизни. </p>
					<p> Открыто: <span itemprop="openHours" content="Пн, Вт, Ср, Чт, Пт, Сб, Вс 11: 30–23: 00"> Ежедневно с 11:30 до 23:00 </span> </ p>
						<p>Телефон:<span itemprop=" phone " content="+155501003333"> 555-0100-3333 </span> </p>
						<р>Просмотр<a itemprop="hasMenu" HREF="http://example.com/menu"> наше меню </a>.</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection