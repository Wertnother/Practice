@extends('layouts.app')

@section('title')Recipe @endsection

@section('content')

<div id="mainContent" class="container">
	<div id="infoblock">
		<div id="infohead">
			<h1>Offer</h1> <em>A Schema.org Type</em>
			<br/> </div>
		<div class="superPaths"> <a href="/Thing" class="core" title="Thing">Thing</a> > <a href="/Intangible" class="core" title="Intangible">Intangible</a> > <a href="/Offer" class="core" title="Offer">Offer</a>
			<br/> </div>
		<div class="description">Предложение о передаче некоторых прав элемент или предоставить услугу - например, предложение о продаже билетов на мероприятие, взять напрокат DVD с фильмом, транслировать ТВ-шоу через Интернет, чтобы отремонтировать мотоцикл или дать книгу. </div>
	</div>
	<table class="table table-borrdered definition-table">
		<thead>
			<tr style="height: 15.0195px;">
				<th style="height: 15.0195px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Имущество</span></span>
				</th>
				<th style="height: 15.0195px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Ожидаемый тип</span></span>
				</th>
				<th style="height: 15.0195px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Описание</span></span>
				</th>
			</tr>
		</thead>
		<!-- Properties for Term: Offer-->
		<tbody>
			<tr class="supertype" style="height: 15px;">
				<th class="supertype-name" style="height: 15px;" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Недвижимость из </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">предложения</span></span>
				</th>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> acceptedPaymentMethod</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">LoanOrCredit</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">PaymentMethod</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Способы оплаты, принятые продавцом для этого предложения. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> addOn</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Предложение</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дополнительное предложение, которое можно получить только в сочетании с первым базовым предложением (например, дополнения и расширения, доступные за дополнительную плату). </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> advanceBookingRequirement</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Время, которое требуется между принятием предложения и фактическим использованием ресурса или услуги. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> aggregateRating</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">AggregateRating</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Общая оценка, основанная на совокупности обзоров или оценок элемента. </span></span>
				</td>
			</tr>
			<tr style="height: 61px;">
				<th class="prop-nam" style="height: 61px;"><code> areaServed</code></th>
				<td class="prop-ect" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">AdministrativeArea</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GeoShape</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Географическая зона, в которой предоставляется услуга или предлагаемый товар. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">serviceArea</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> availability</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ItemAvailability</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Доступность этого товара - например, "Есть в наличии", "Нет в наличии", "Предзаказ" и т. Д. </span></span>
				</td>
			</tr>
			<tr style="height: 45px;">
				<th class="prop-nam" style="height: 45px;"><code> availabilityEnds</code></th>
				<td class="prop-ect" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DateTime</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Time</span></span>
				</td>
				<td class="prop-desc" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Окончание доступности продукта или услуги, включенных в предложение. </span></span>
				</td>
			</tr>
			<tr style="height: 45px;">
				<th class="prop-nam" style="height: 45px;"><code> availabilityStarts</code></th>
				<td class="prop-ect" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DateTime</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Time</span></span>
				</td>
				<td class="prop-desc" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Начало доступности продукта или услуги, включенной в предложение. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> availableAtOrFrom</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место (а), из которого можно получить предложение (например, адреса магазинов). </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> availableDeliveryMethod</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Способ доставки</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Доступные способы доставки для этого предложения. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> businessFunction</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Бизнес-функция</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Бизнес-функция (например, продажа, аренда, ремонт, утилизация) предложения или компонента пакета (TypeAndQuantityNode). </span><span style="vertical-align: inherit;">По умолчанию это http://purl.org/goodrelations/v1#Sell. </span></span>
				</td>
			</tr>
			<tr style="height: 61px;">
				<th class="prop-nam" style="height: 61px;"><code> category</code></th>
				<td class="prop-ect" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">PhysicalActivityCategory</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">вещь,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Категория товара. </span><span style="vertical-align: inherit;">Большие знаки или косые черты могут использоваться для неформального обозначения иерархии категорий. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> deliveryLeadTime</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Типичная задержка между получением заказа и тем, что товар покидает склад или готовится к вывозу, если способ доставки - самовывоз на месте. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> eligibleCustomerType</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">BusinessEntityType</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Тип (ы) клиентов, для которых действует данное предложение. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> eligibleDuration</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Срок действия данного предложения. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> eligibleQuantity</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Интервал и единица измерения объемов заказа, для которых действует предложение или ценовая спецификация. </span><span style="vertical-align: inherit;">Это позволяет, например, указать, что определенный фрахт действителен только для определенного количества. </span></span>
				</td>
			</tr>
			<tr style="height: 61px;">
				<th class="prop-nam" style="height: 61px;"><code> eligibleRegion</code></th>
				<td class="prop-ect" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GeoShape</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код ISO 3166-1 (ISO 3166-1 alpha-2) или ISO 3166-2, место или GeoShape для геополитического региона (регионов), для которых действует предложение или спецификация стоимости доставки. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> См. Также </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">inelhibitedRegion</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> eligibleTransactionVolume</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Цена</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Объем транзакции в денежной единице, для которой действительна оферта или ценовая спецификация, например, для указания минимального объема закупок, для экспресс-доставки бесплатной доставки сверх определенного объема заказа или для ограничения приема кредитных карт покупками определенным минимальное количество. </span></span>
				</td>
			</tr>
			<tr style="height: 126px;">
				<th class="prop-nam" style="height: 126px;"><code> gtin</code></th>
				<td class="prop-ect" style="height: 126px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 126px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Глобальный номер предмета торговли ( </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GTIN</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ). </span><span style="vertical-align: inherit;">Номера GTIN идентифицируют торговые единицы, включая продукты и услуги, с помощью числовых идентификационных кодов. </span><span style="vertical-align: inherit;">Свойство </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">gtin</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> обобщает более ранние </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">свойства gtin8</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">gtin12</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">gtin13</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> и </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">gtin14</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span><span style="vertical-align: inherit;">В </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">спецификациях цифровых ссылок</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> GS1 номера </span><span style="vertical-align: inherit;">GTIN представлены в виде URL-адресов. </span><span style="vertical-align: inherit;">Правильное </span><span style="vertical-align: inherit;">значение </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">gtin</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> должно быть действительным GTIN, что означает, что это должна быть полностью числовая строка из 8, 12, 13 или 14 цифр или URL-адрес "GS1 Digital Link" на основе такой строки. </span><span style="vertical-align: inherit;">Числовой компонент также должен иметь </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">действительную контрольную цифру GS1</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> и соответствовать другим правилам для действительных номеров GTIN. </span><span style="vertical-align: inherit;">См. Также </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">сводку GTIN GS1.</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">и </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Википедия</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> для получения более подробной информации. </span><span style="vertical-align: inherit;">Заполнение значений gtin слева не требуется и не рекомендуется. </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> gtin12</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код GTIN-12 продукта или продукта, к которому относится предложение. </span><span style="vertical-align: inherit;">GTIN-12 - это 12-значный идентификационный ключ GS1, состоящий из префикса компании UPC, ссылки на товар и контрольной цифры, который используется для идентификации торговых единиц. </span><span style="vertical-align: inherit;">См. Подробности в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GS1 GTIN Summary</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> gtin13</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код GTIN-13 продукта или продукта, к которому относится предложение. </span><span style="vertical-align: inherit;">Это эквивалентно 13-значным кодам ISBN и EAN UCC-13. </span><span style="vertical-align: inherit;">Прежние 12-значные коды UPC можно преобразовать в код GTIN-13, просто добавив предшествующий ноль. </span><span style="vertical-align: inherit;">См. Подробности в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GS1 GTIN Summary</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> gtin14</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код GTIN-14 продукта или продукта, к которому относится предложение. </span><span style="vertical-align: inherit;">См. Подробности в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GS1 GTIN Summary</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> gtin8</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код GTIN-8 продукта или продукта, к которому относится предложение. </span><span style="vertical-align: inherit;">Этот код также известен как EAN / UCC-8 или 8-значный EAN. </span><span style="vertical-align: inherit;">См. Подробности в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GS1 GTIN Summary</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> hasMeasurement</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Измерение продукта, например длина брюк, размер колеса велосипеда или калибр винта. </span><span style="vertical-align: inherit;">Обычно это точное измерение, но также может быть диапазон измерений регулируемых изделий, например ремней и лыжных креплений. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> hasMerchantReturnPolicy</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">MerchantReturnPolicy</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Задает применимую MerchantReturnPolicy. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">hasProductReturnPolicy</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> includesObject</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">TypeAndQuantityNode</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Это ссылка на узел или узлы, указывающие точное количество продуктов, включенных в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">предложение</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> или </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ProductCollection</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 76px;">
				<th class="prop-nam" style="height: 76px;"><code> ineligibleRegion</code></th>
				<td class="prop-ect" style="height: 76px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GeoShape</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">место</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc" style="height: 76px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код ISO 3166-1 (ISO 3166-1 alpha-2) или ISO 3166-2, место или GeoShape для геополитического региона (регионов), для которых предложение или спецификация стоимости доставки недействительны, например регион, в котором транзакция не разрешена. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> См. Также </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">доступный регион</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> inventoryLevel</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текущий приблизительный уровень запасов для предмета или предметов. </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> itemCondition</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">OfferItemCondition</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Предопределенное значение из OfferItemCondition, определяющее состояние продукта или услуги либо продуктов или услуг, включенных в предложение. </span><span style="vertical-align: inherit;">Также используется в политике возврата продуктов, чтобы указать состояние продуктов, принимаемых к возврату. </span></span>
				</td>
			</tr>
			<tr style="height: 108px;">
				<th class="prop-nam" style="height: 108px;"><code> itemOffered</code></th>
				<td class="prop-ect" style="height: 108px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">AggregateOffer</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">событие,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или пункт </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">меню,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">продукт,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">услуга,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">поездка</span></span>
				</td>
				<td class="prop-desc" style="height: 108px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Товар, который предлагается (или требуется). </span><span style="vertical-align: inherit;">Транзакционный характер предложения или спроса документируется с помощью </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">бизнес-функции</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , например, продажа, аренда и т. Д. Хотя в этом определении явно перечислены некоторые общие ожидаемые типы, можно использовать другие. </span><span style="vertical-align: inherit;">Использование второго типа, такого как Продукт или подтип Продукта, может прояснить природу предложения. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратная недвижимость: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">предложения</span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> leaseLength</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продолжительность</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продолжительность аренды некоторых </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Объектов размещения</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span><span style="vertical-align: inherit;">относящихся</span><span style="vertical-align: inherit;"> либо к определенному </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Предложению,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> либо, в некоторых случаях, к собственности. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> mpn</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Номер детали производителя (MPN) продукта или продукта, к которому относится предложение. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> offeredBy</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указатель на организацию или лицо, делающее предложение. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">makeOffer</span></span>
				</td>
			</tr>
			<tr style="height: 218px;">
				<th class="prop-nam" style="height: 218px;"><code> price</code></th>
				<td class="prop-ect" style="height: 218px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Число</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc" style="height: 218px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Цена предложения продукта или ценового компонента, прикрепленная к PriceSpecification и ее подтипам. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Рекомендации по использованию:</span></span>
					<br />
					<br />
					<ul>
						<li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Используйте </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">priceCurrency</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> свойство (со стандартными форматами: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ISO 4217 формат валюты</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , например , </span><span style="vertical-align: inherit;">&laquo;USD&raquo;; </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Ticker символ</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> для cryptocurrencies , </span><span style="vertical-align: inherit;">например , </span><span style="vertical-align: inherit;">&laquo;BTC&raquo;, хорошо известные имена для </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Tradings систем Local Exchange</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (LETS) и других валютных типов , </span><span style="vertical-align: inherit;">например , </span><span style="vertical-align: inherit;">&laquo;Ithaca HOUR&raquo;) вместо включение в значение </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">неоднозначных символов,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> таких как "$".</span></span>
						</li>
						<li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Использовать '.' </span><span style="vertical-align: inherit;">(Unicode 'FULL STOP' (U + 002E)) вместо ',' для обозначения десятичной точки. </span><span style="vertical-align: inherit;">Избегайте использования этих символов в качестве разделителя для удобочитаемости.</span></span>
						</li>
						<li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратите внимание, что </span><span style="vertical-align: inherit;">синтаксис </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">RDFa</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> и Microdata позволяет использовать атрибут &laquo;content =&raquo; для публикации простых машиночитаемых значений наряду с более удобным форматированием.</span></span>
						</li>
						<li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Используйте значения от 0123456789 (Unicode 'DIGIT ZERO' (U + 0030) до 'DIGIT NINE' (U + 0039)), а не внешне похожие символы Unicode.</span></span>
						</li>
					</ul>
				</td>
			</tr>
			<tr style="height: 76px;">
				<th class="prop-nam" style="height: 76px;"><code> priceCurrency</code></th>
				<td class="prop-ect" style="height: 76px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 76px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Валюта цены или ценовой компонент, если он привязан к </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">PriceSpecification</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> и ее подтипам. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Используйте стандартные форматы: </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">формат валюты ISO 4217,</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> например, &laquo;USD&raquo;; </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Символ</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> тикера для криптовалют, например, &laquo;BTC&raquo;; </span><span style="vertical-align: inherit;">хорошо известные названия </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">систем местной биржевой торговли</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (LETS) и других типов валют, например, "Ithaca HOUR". </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> priceSpecification</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Цена</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Одна или несколько подробных ценовых спецификаций с указанием цены за единицу и стоимости доставки или оплаты. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> priceValidUntil</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата, после которой цена больше не доступна. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> review</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Рассмотрение</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обзор товара. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">обзоры</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> seller</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">лицо</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация, которая предлагает (продает / сдает в аренду / ссужает / ссужает) услуги / товары. </span><span style="vertical-align: inherit;">Продавец также может быть поставщиком. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">продавца</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">купца</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> serialNumber</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Серийный номер или любой буквенно-цифровой идентификатор конкретного продукта. </span><span style="vertical-align: inherit;">Приложенный к предложению, это ярлык для серийного номера продукта, включенного в предложение. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> shippingDetails</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ПредложениеДоставкаДетали</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обозначает информацию о политиках доставки и вариантах, связанных с </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Предложением</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> sku</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Единица складского учета (SKU), т. Е. Специфичный для продавца идентификатор продукта или услуги или продукта, к которому относится предложение. </span></span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> validFrom</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DateTime</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата, когда товар становится действительным. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> validThrough</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DateTime</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата, после которой товар недействителен. </span><span style="vertical-align: inherit;">Например, окончание предложения, период заработной платы или время работы. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> warranty</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Гарантия</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Гарантийные обязательства включены в предложение. </span><span style="vertical-align: inherit;">Заменяет </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">гарантийное</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> обещание </span><span style="vertical-align: inherit;">. </span></span>
				</td>
			</tr>
			<!-- Properties for Term: Intangible-->
			<!-- Properties for Term: Thing-->
			<tr class="supertype" style="height: 15px;">
				<th class="supertype-name" style="height: 15px;" colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойства от </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">вещи</span></span>
				</th>
			</tr>
			<tr style="height: 79px;">
				<th class="prop-nam" style="height: 79px;"><code> additionalType</code></th>
				<td class="prop-ect" style="height: 79px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 79px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дополнительный тип для элемента, обычно используемый для добавления более конкретных типов из внешних словарей в синтаксис микроданных. </span><span style="vertical-align: inherit;">Это связь между чем-то и классом, в котором эта вещь находится. В синтаксисе RDFa лучше использовать собственный синтаксис RDFa - атрибут 'typeof' - для нескольких типов. </span><span style="vertical-align: inherit;">Инструменты Schema.org могут иметь только более слабое представление о дополнительных типах, в частности о тех, которые определены извне. </span></span>
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
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> identifier</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">PropertyValue</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойство идентификатора представляет собой любой идентификатор для любого типа </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вещи</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , такой как ISBN, коды GTIN, UUID и т. Д. Schema.org предоставляет специальные свойства для представления многих из них либо в виде текстовых строк, либо в виде ссылок URL (URI). </span><span style="vertical-align: inherit;">См. Дополнительные сведения в </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">фоновых примечаниях</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> image</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Изображение предмета. </span><span style="vertical-align: inherit;">Это может быть </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> или полностью описанный </span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
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
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес справочной веб-страницы, недвусмысленно указывающий на идентичность элемента. </span><span style="vertical-align: inherit;">Например, URL-адрес страницы в Википедии, записи Викиданных или официального сайта. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> subjectOf</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">событие</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork или мероприятие по этому поводу. </span></span>
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
			<div class="col-sm-6"> <pre class="ds-tab-content prettyprint lang-html linenums clipsource ">
        &lt;div itemscope itemtype="https://schema.org/Book" itemid="#record"&gt;
&lt;link itemprop="additionalType" href="https://schema.org/Product" /&gt;
&lt;h3 itemprop="name"&gt; Концерт &lt;/h3&gt;
&lt;div&gt; Библиографические данные
&lt;table&gt;
&lt;tr&gt;
&lt;th&gt; Главный автор: &lt;/th&gt;
&lt;td itemprop="author"&gt; Фершо, Гай &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div&gt; Сведения о фондах из городской библиотеки Anytown
&lt;table&gt;
&lt;! - Пример копии, доступной для ссуды -&gt;
&lt;tr itemscope itemtype="https://schema.org/Offer"&gt;
&lt;th&gt; Копировать &lt;/th&gt;
&lt;td&gt; Доступно
&lt;link itemprop="availability" href="https://schema.org/InStock"&gt;
&lt;div&gt; Штрих-код: &lt;span itemprop="serialNumber"&gt; CONC91000937 &lt;/span&gt; &lt;/div&gt;
&lt;div&gt; Телефонный номер: &lt;span itemprop="sku"&gt; 780 R2 &lt;/span&gt; &lt;/div&gt;
&lt;div&gt; Библиотека: &lt;span itemprop="offerBy" itemscope itemtype="https://schema.org/Library" itemid="http://library.anytown.gov.uk"&gt; Городская библиотека Anytown &lt;/span&gt; &lt;/div&gt;
&lt;link itemprop="businessFunction" href="http://purl.org/goodrelations/v1#LeaseOut"&gt;
&lt;link itemprop="itemOffered" href="#record"&gt; &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
        </pre> </div>
			<div class="col-sm-6">
				<div itemscope itemtype="https://schema.org/Book" itemid="#record">
					<link itemprop="additionalType" href="https://schema.org/Product" />
					<h3 itemprop="name"> Концерт </h3>
					<div> Библиографические данные
						<table>
							<tr>
								<th> Главный автор: </th>
								<td itemprop="author"> Фершо, Гай </td>
							</tr>
						</table>
					</div>
				</div>
				<div> Сведения о фондах из городской библиотеки Anytown
					<table>
						<! - Пример копии, доступной для ссуды ->
						<tr itemscope itemtype="https://schema.org/Offer">
							<th> Копировать </th>
							<td> Доступно
								<link itemprop="availability" href="https://schema.org/InStock">
								<div> Штрих-код: <span itemprop="serialNumber"> CONC91000937 </span> </div>
								<div> Телефонный номер: <span itemprop="sku"> 780 R2 </span> </div>
								<div> Библиотека: <span itemprop="offerBy" itemscope itemtype="https://schema.org/Library" itemid="http://library.anytown.gov.uk"> Городская библиотека Anytown </span> </div>
								<link itemprop="businessFunction" href="http://purl.org/goodrelations/v1#LeaseOut">
								<link itemprop="itemOffered" href="#record"> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="row border  h-100 p-5 text-white bg-dark">
			<div class="col-sm-6"> <pre class="ds-tab-content prettyprint lang-html linenums clipsource ">
                &lt;div&nbsp;itemscope&nbsp;itemtype="https://schema.org/Service"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;itemprop="serviceType"&nbsp;content="Уборка&nbsp;дома"&nbsp;/&gt;&nbsp;&lt;span&nbsp;itemprop="provider"&nbsp;itemscope&nbsp;itemtype="https://schema.org/LocalBusiness"&gt;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop&nbsp;=&nbsp;"name"&nbsp;&gt;&nbsp;Уборка&nbsp;дома&nbsp;ACME&nbsp;&lt;/span&gt;&nbsp;&lt;/span&gt;&nbsp;предлагает&nbsp;широкий&nbsp;спектр&nbsp;услуг&nbsp;в&nbsp;&lt;span&nbsp;itemprop="areaServed"&nbsp;itemscope&nbsp;itemtype="https://schema.org/State"&gt;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop&nbsp;=&nbsp;"name"&nbsp;&gt;&nbsp;Массачусетс&nbsp;&lt;/span&gt;&nbsp;,&nbsp;включая&nbsp;&lt;/span&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&nbsp;itemprop="hasOfferCatalog"&nbsp;itemscope&nbsp;itemtype="https://schema.org/OfferCatalog"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/OfferCatalog"&gt;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Уборка&nbsp;дома&nbsp;&lt;/span&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/OfferCatalog"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Offer"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="itemOffered"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Service"&gt;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Светлая&nbsp;уборка&nbsp;квартиры&nbsp;&lt;/span&gt;&nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Offer"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="itemOffered"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Service"&gt;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Домашний&nbsp;свет,&nbsp;очищающий&nbsp;до&nbsp;2&nbsp;спален&nbsp;&lt;/span&gt;&nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Offer"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="itemOffered"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Service"&gt;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Светлая&nbsp;уборка&nbsp;в&nbsp;доме&nbsp;с&nbsp;3&nbsp;и&nbsp;более&nbsp;спальнями&nbsp;&lt;/span&gt;&nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/OfferCatalog"&gt;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Разовые&nbsp;услуги&nbsp;&lt;/span&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/OfferCatalog"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Offer"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="itemOffered"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Service"&gt;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Мытье&nbsp;окон&nbsp;&lt;/span&gt;&nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Offer"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="itemOffered"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Service"&gt;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Глубокая&nbsp;чистка&nbsp;ковров&nbsp;&lt;/span&gt;&nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Offer"&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="itemOffered"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Service"&gt;&nbsp;&lt;span&nbsp;itemprop="name"&gt;&nbsp;Очистка&nbsp;при&nbsp;входе&nbsp;/&nbsp;выходе&nbsp;&lt;/span&gt;&nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;
&lt;/div&gt;       
        </pre> </div>
			<div class="col-sm-6">
				<div itemscope itemtype="https://schema.org/Service">
					<meta itemprop="serviceType" content="Уборка дома" /> <span itemprop="provider" itemscope itemtype="https://schema.org/LocalBusiness">   
    <span itemprop = "name" > Уборка дома ACME </span> </span> предлагает широкий спектр услуг в <span itemprop="areaServed" itemscope itemtype="https://schema.org/State">   
    <span itemprop = "name" > Массачусетс </span> , включая </span>
					<ul itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog"> <span itemprop="name"> Уборка дома </span>
							<ul itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
								<li itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
									<div itemprop="itemOffered" itemscope itemtype="https://schema.org/Service"> <span itemprop="name"> Светлая уборка квартиры </span> </div>
								</li>
								<li itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
									<div itemprop="itemOffered" itemscope itemtype="https://schema.org/Service"> <span itemprop="name"> Домашний свет, очищающий до 2 спален </span> </div>
								</li>
								<li itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
									<div itemprop="itemOffered" itemscope itemtype="https://schema.org/Service"> <span itemprop="name"> Светлая уборка в доме с 3 и более спальнями </span> </div>
								</li>
							</ul>
							<li itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog"> <span itemprop="name"> Разовые услуги </span>
								<ul itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
									<li itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
										<div itemprop="itemOffered" itemscope itemtype="https://schema.org/Service"> <span itemprop="name"> Мытье окон </span> </div>
									</li>
									<li itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
										<div itemprop="itemOffered" itemscope itemtype="https://schema.org/Service"> <span itemprop="name"> Глубокая чистка ковров </span> </div>
									</li>
									<li itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
										<div itemprop="itemOffered" itemscope itemtype="https://schema.org/Service"> <span itemprop="name"> Очистка при входе / выходе </span> </div>
									</li>
								</ul>
							</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection