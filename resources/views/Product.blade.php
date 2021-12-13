@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')

<div id="mainContent" class="container">
	<div id="infoblock">
		<div id="infohead">
			<h1>Product</h1> <em>A Schema.org Type</em>
			<br/> </div>
		<div class="superPaths"> <a href="/Thing" class="core" title="Thing">Thing</a>			> <a href="/Product" class="core" title="Product">Product</a>
			<br/> </div>
		<div class="description">Любой предлагаемый товар или услугу. Например:
			пара обуви; билет на концерт; аренда авто;
			стрижка; или эпизод телешоу, транслируемого
			в Интернете.</div>
	</div>
	<table class="table table-bordered definition-table">
		<thead>
			<tr style="height: 15px;">
				<th style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Имущество</span></span>
				</th>
				<th style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Ожидаемый тип</span></span>
				</th>
				<th style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Описание</span></span>
				</th>
			</tr>
		</thead>
		<!-- Properties for Term: Product-->
		<tbody>
			<tr class="supertype" style="height: 15px;">
				<th class="supertype-name" style="height: 15px;"
				colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойства из </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">продукта</span></span>
				</th>
			</tr>
			<tr style="height: 108.859px;">
				<th class="prop-nam" style="height: 108.859px;"><code> additionalProperty</code></th>
				<td class="prop-ect" style="height: 108.859px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Стоимость имущества</span></span>
				</td>
				<td class="prop-desc" style="height: 108.859px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Пара свойство-значение, представляющая дополнительные характеристики объекта, например характеристика продукта или другая характеристика, для которой нет соответствующего свойства в schema.org. </span></span>
					<br />
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> aggregateRating</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">AggregateRating</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Общая оценка, основанная на совокупности обзоров или оценок элемента. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> audience</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Зрительская аудитория</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Целевая аудитория, то есть группа, для которой что-то было создано. </span>
					<span style="vertical-align: inherit;">Заменяет </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">serviceAudience</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> award</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Награда, выигранная этим предметом или за этот предмет. </span>
					<span style="vertical-align: inherit;">Заменяет </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">награды</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> brand</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Бренд</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">организация</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Бренд (ы), связанный с продуктом или услугой, или бренд (ы), поддерживаемый организацией или деловым человеком. </span></span>
				</td>
			</tr>
			<tr style="height: 61px;">
				<th class="prop-nam" style="height: 61px;"><code> category</code></th>
				<td class="prop-ect" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">PhysicalActivityCategory</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст,</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">вещь,</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 61px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Категория товара. </span>
					<span style="vertical-align: inherit;">Большие знаки или косые черты могут
						использоваться для неформального обозначения
						иерархии категорий. </span>
					</span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> color</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Цвет товара. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> countryOfAssembly</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место сборки изделия. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> countryOfLastProcessing</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Место, где товар (как правило, </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продукт</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ) был в последний раз обработан и протестирован перед импортом. </span></span>
				</td>
			</tr>
			<tr style="height: 138px;">
				<th class="prop-nam" style="height: 138px;"><code> countryOfOrigin</code></th>
				<td class="prop-ect" style="height: 138px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Страна</span></span>
				</td>
				<td class="prop-desc" style="height: 138px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Страна происхождения чего-либо, включая продукты, а также творческие произведения, такие как фильмы и телепрограммы. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> В случае телевидения и кино это будет страна основных офисов производственной компании или лица, ответственного за фильм. </span>
					<span style="vertical-align: inherit;">Для других видов </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> сложно дать полное общее руководство, и такие свойства, как </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">contentLocation</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> и </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">locationCreated,</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> могут быть более применимыми. </span></span>
					<br />
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> В случае товаров - страна происхождения товара. </span>
					<span style="vertical-align: inherit;">Точная интерпретация этого может
												варьироваться в зависимости от
												контекста и типа продукта и не
												может быть перечислена здесь
												полностью. </span>
					</span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> depth</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Расстояние</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Глубина предмета. </span></span>
				</td>
			</tr>
			<tr style="height: 126px;">
				<th class="prop-nam" style="height: 126px;"><code> gtin</code></th>
				<td class="prop-ect" style="height: 126px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 126px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Глобальный номер предмета торговли ( </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GTIN</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ). </span>
					<span style="vertical-align: inherit;">Номера GTIN идентифицируют торговые
								единицы, включая продукты и услуги,
								с помощью числовых идентификационных
								кодов. </span><span style="vertical-align: inherit;">Свойство </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">gtin</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> обобщает более ранние </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">свойства gtin8</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">gtin12</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">gtin13</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> и </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">gtin14</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span>
					<span style="vertical-align: inherit;">В </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">спецификациях цифровых ссылок</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> GS1 номера </span>
					<span style="vertical-align: inherit;">GTIN представлены в виде
																					URL-адресов. </span>
					<span style="vertical-align: inherit;">Правильное </span>
					<span style="vertical-align: inherit;">значение </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">gtin</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> должно быть действительным GTIN, что означает, что это должна быть полностью числовая строка из 8, 12, 13 или 14 цифр или URL-адрес "GS1 Digital Link" на основе такой строки. </span>
					<span style="vertical-align: inherit;">Числовой компонент
																									также должен иметь
																									</span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">действительную контрольную цифру GS1</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> и соответствовать другим правилам для действительных номеров GTIN. </span>
					<span style="vertical-align: inherit;">См. Также </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">сводку GTIN GS1.</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">и </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Википедия</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> для получения более подробной информации. </span>
					<span style="vertical-align: inherit;">Заполнение
																															значений gtin
																															слева не требуется
																															и не рекомендуется.
																															</span>
					</span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> gtin12</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код GTIN-12 продукта или продукта, к которому относится предложение. </span>
					<span style="vertical-align: inherit;">GTIN-12 - это 12-значный идентификационный
						ключ GS1, состоящий из префикса компании
						UPC, ссылки на товар и контрольной
						цифры, который используется для идентификации
						торговых единиц. </span>
					<span
					style="vertical-align: inherit;">См. Подробности в </span>
						</span>
						<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GS1 GTIN Summary</span></span>
						<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> gtin13</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код GTIN-13 продукта или продукта, к которому относится предложение. </span>
					<span style="vertical-align: inherit;">Это эквивалентно 13-значным кодам ISBN
						и EAN UCC-13. </span><span style="vertical-align: inherit;">Прежние 12-значные коды UPC можно преобразовать в код GTIN-13, просто добавив предшествующий ноль. </span>
					<span style="vertical-align: inherit;">См. Подробности в </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GS1 GTIN Summary</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> gtin14</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код GTIN-14 продукта или продукта, к которому относится предложение. </span>
					<span style="vertical-align: inherit;">См. Подробности в </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GS1 GTIN Summary</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> gtin8</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Код GTIN-8 продукта или продукта, к которому относится предложение. </span>
					<span style="vertical-align: inherit;">Этот код также известен как EAN / UCC-8
						или 8-значный EAN. </span>
					<span
					style="vertical-align: inherit;">См. Подробности в </span>
						</span>
						<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GS1 GTIN Summary</span></span>
						<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> hasEnergyConsumptionDetails</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ЭнергопотреблениеПодробнее</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Определяет категорию энергоэффективности (также известную как &laquo;класс&raquo; или &laquo;рейтинг&raquo;) для продукта в соответствии с международным стандартом энергоэффективности. </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> hasMeasurement</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Измерение продукта, например длина брюк, размер колеса велосипеда или калибр винта. </span>
					<span style="vertical-align: inherit;">Обычно это точное измерение, но также
						может быть диапазон измерений регулируемых
						изделий, например ремней и лыжных креплений.
						</span>
					</span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> hasMerchantReturnPolicy</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">MerchantReturnPolicy</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Задает применимую MerchantReturnPolicy. </span>
					<span style="vertical-align: inherit;">Заменяет </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">hasProductReturnPolicy</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> height</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Расстояние</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Высота предмета. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> inProductGroupWithID</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">productGroupID</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> для </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ProductGroup,</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> что этот продукт является </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">VariantOf</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> isAccessoryOrSparePartFor</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продукт</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указатель на другой продукт (или несколько продуктов), для которого этот продукт является аксессуаром или запчастью. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> isConsumableFor</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продукт</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указатель на другой продукт (или несколько продуктов), для которого этот продукт является расходным материалом. </span></span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> isRelatedTo</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продукт</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">услуга</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указатель на другой, так или иначе связанный продукт (или несколько продуктов). </span></span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> isSimilarTo</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продукт</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">услуга</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указатель на другой, функционально подобный продукт (или несколько продуктов). </span></span>
				</td>
			</tr>
			<tr style="height: 126px;">
				<th class="prop-nam" style="height: 126px;"><code> isVariantOf</code></th>
				<td class="prop-ect" style="height: 126px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ProductGroup</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ProductModel</span></span>
				</td>
				<td class="prop-desc" style="height: 126px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает, какой продукт является вариантом. </span>
					<span style="vertical-align: inherit;">В случае </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ProductModel</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> это указатель (от ProductModel) на базовый продукт, вариантом которого является этот продукт. </span>
					<span style="vertical-align: inherit;">Можно с уверенностью сделать вывод,
								что вариант наследует все функции
								продукта из базовой модели, если
								он не определен локально. </span>
					<span style="vertical-align: inherit;">Это не переходно. </span>
					<span
					style="vertical-align: inherit;">В случае </span>
						</span>
						<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ProductGroup</span></span>
						<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> описание группы также служит шаблоном, представляющим набор продуктов, которые различаются только по явно определенным, конкретным параметрам (поэтому он определяет как набор вариантов, так и то, какие значения различаются между этими вариантами) . </span>
						<span style="vertical-align: inherit;">При использовании с </span>
						</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ProductGroup</span></span>
						<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> это свойство может применяться к любому </span></span>
						<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">продукту,</span></span>
						<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> включенному в группу. </span></span>
						<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span>
						<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">hasVariant</span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> itemCondition</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">OfferItemCondition</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Предопределенное значение из OfferItemCondition, определяющее состояние продукта или услуги либо продуктов или услуг, включенных в предложение. </span>
					<span style="vertical-align: inherit;">Также используется в политике возврата
						продуктов, чтобы указать состояние
						продуктов, принимаемых к возврату.
						</span>
					</span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> logo</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Связанный логотип. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> manufacturer</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Организация</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Производитель товара. </span></span>
				</td>
			</tr>
			<tr style="height: 45px;">
				<th class="prop-nam" style="height: 45px;"><code> material</code></th>
				<td class="prop-ect" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продукт</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 45px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Материал, из которого что-то сделано, например кожа, шерсть, хлопок, бумага. </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> model</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ProductModel</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Модель продукта. </span>
					<span style="vertical-align: inherit;">Используйте с URL-адресом ProductModel
						или текстовым представлением идентификатора
						модели. </span><span style="vertical-align: inherit;">URL-адрес ProductModel может быть из внешнего источника. </span>
					<span style="vertical-align: inherit;">Рекомендуется дополнительно указывать
							надежные идентификаторы продуктов
							через свойства gtin8 / gtin13 / gtin14
							и mpn. </span>
					</span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> mpn</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Номер детали производителя (MPN) продукта или продукта, к которому относится предложение. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> nsn</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">складской номер</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> (nsn) </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Продукта по</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> классификации </span>
					<span style="vertical-align: inherit;">НАТО</span>
					<span
					style="vertical-align: inherit;"> . </span>
						</span>
				</td>
			</tr>
			<tr style="height: 110px;">
				<th class="prop-nam" style="height: 110px;"><code> offers</code></th>
				<td class="prop-ect" style="height: 110px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Спрос</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">предложение</span></span>
				</td>
				<td class="prop-desc" style="height: 110px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Предложение предоставить этот элемент - например, предложение продать продукт, взять напрокат DVD с фильмом, оказать услугу или раздать билеты на мероприятие. </span>
					<span style="vertical-align: inherit;">Используйте </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">businessFunction,</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> чтобы указать вид предлагаемой транзакции, например, продажа, аренда и т. Д. Это свойство также может использоваться для описания </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">спроса</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span>
					<span style="vertical-align: inherit;">Хотя это свойство указано, как и
										ожидалось, для ряда распространенных
										типов, оно может использоваться
										в других. </span><span style="vertical-align: inherit;">В этом случае использование второго типа, такого как Продукт или подтип Продукта, может прояснить характер предложения. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">itemOffered</span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> pattern</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DefinedTerm</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Узор, на котором что-то есть, например &laquo;горошек&raquo;, &laquo;полосатый&raquo;, &laquo;канадский флаг&raquo;. </span>
					<span style="vertical-align: inherit;">Значения обычно выражаются в виде текста,
						хотя также поддерживаются ссылки на
						схемы контролируемых значений. </span>
					</span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> productID</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Идентификатор продукта, например ISBN. </span>
					<span style="vertical-align: inherit;">Например: </span>
					</span><code>meta itemprop="productID" content="isbn:123-456-789"</code>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> productionDate</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата производства предмета, например, автомобиля. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> purchaseDate</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата, когда товар, например, автомобиль, был приобретен текущим владельцем. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> releaseDate</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дата выпуска продукта или модели продукта. </span>
					<span style="vertical-align: inherit;">Это может быть использовано, чтобы отличить
						точный вариант продукта. </span>
					</span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> review</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Рассмотрение</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обзор товара. </span>
					<span style="vertical-align: inherit;">Заменяет </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">обзоры</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 63px;">
				<th class="prop-nam" style="height: 63px;"><code> size</code></th>
				<td class="prop-ect" style="height: 63px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">DefinedTerm</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">QuantitativeValue,</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">SizeSpecification,</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
				</td>
				<td class="prop-desc" style="height: 63px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Стандартизированный размер продукта или творческой работы, задаваемый либо простой текстовой строкой (например, &laquo;XL&raquo;, &laquo;32Wx34L&raquo;), либо QuantitativeValue с unitCode, либо исчерпывающей и структурированной </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">спецификацией SizeSpecification</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> ; </span>
					<span style="vertical-align: inherit;">в других случаях параметры </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ширины</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">высоты</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">глубины</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> и </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">веса</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> могут быть более применимыми. </span></span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> sku</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Единица складского учета (SKU), т. Е. Специфичный для продавца идентификатор продукта или услуги или продукта, к которому относится предложение. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> slogan</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Текст</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Слоган или девиз, связанный с товаром. </span></span>
				</td>
			</tr>
			<tr style="height: 15px;">
				<th class="prop-nam" style="height: 15px;"><code> weight</code></th>
				<td class="prop-ect" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 15px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вес товара или человека. </span></span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> width</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Расстояние</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">количественное значение</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Ширина предмета. </span></span>
				</td>
			</tr>
			<!-- Properties for Term: Thing-->
			<tr class="supertype" style="height: 15px;">
				<th class="supertype-name" style="height: 15px;"
				colspan="3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойства от </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">вещи</span></span>
				</th>
			</tr>
			<tr style="height: 79px;">
				<th class="prop-nam" style="height: 79px;"><code> additionalType</code></th>
				<td class="prop-ect" style="height: 79px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 79px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Дополнительный тип для элемента, обычно используемый для добавления более конкретных типов из внешних словарей в синтаксис микроданных. </span>
					<span style="vertical-align: inherit;">Это связь между чем-то и классом, в
						котором эта вещь находится. В синтаксисе
						RDFa лучше использовать собственный
						синтаксис RDFa - атрибут 'typeof' -
						для нескольких типов. </span>
					<span style="vertical-align: inherit;">Инструменты Schema.org могут иметь
							только более слабое представление
							о дополнительных типах, в частности
							о тех, которые определены извне. </span>
					</span>
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
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Подсвойство описания. </span>
					<span style="vertical-align: inherit;">Краткое описание предмета, используемого
						для отличия от других похожих предметов.
						</span><span style="vertical-align: inherit;">Информация из других свойств (в частности, имя) может быть необходима для того, чтобы описание было полезным для устранения неоднозначности. </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> identifier</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">PropertyValue</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">текст</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Свойство идентификатора представляет собой любой идентификатор для любого типа </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Вещи</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> , такой как ISBN, коды GTIN, UUID и т. Д. Schema.org предоставляет специальные свойства для представления многих из них либо в виде текстовых строк, либо в виде ссылок URL (URI). </span>
					<span style="vertical-align: inherit;">См. Дополнительные сведения в </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">фоновых примечаниях</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 29px;">
				<th class="prop-nam" style="height: 29px;"><code> image</code></th>
				<td class="prop-ect" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 29px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Изображение предмета. </span>
					<span style="vertical-align: inherit;">Это может быть </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> или полностью описанный </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ImageObject</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> . </span></span>
				</td>
			</tr>
			<tr style="height: 47px;">
				<th class="prop-nam" style="height: 47px;"><code> mainEntityOfPage</code></th>
				<td class="prop-ect" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL</span></span>
				</td>
				<td class="prop-desc" style="height: 47px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Указывает страницу (или другую CreativeWork), для которой эта вещь является основной описываемой сущностью. </span>
					<span style="vertical-align: inherit;">См </span>
					</span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">справочных записок</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> для деталей. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">mainEntity</span></span>
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
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">URL-адрес справочной веб-страницы, недвусмысленно указывающий на идентичность элемента. </span>
					<span style="vertical-align: inherit;">Например, URL-адрес страницы в Википедии,
						записи Викиданных или официального
						сайта. </span>
					</span>
				</td>
			</tr>
			<tr style="height: 31px;">
				<th class="prop-nam" style="height: 31px;"><code> subjectOf</code></th>
				<td class="prop-ect" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork</span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> &nbsp; или </span></span>
					<br /> <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">событие</span></span>
				</td>
				<td class="prop-desc" style="height: 31px;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">CreativeWork или мероприятие по этому поводу. </span></span>
					<br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Обратное свойство: </span></span>
					<span style="vertical-align: inherit;"><span style="vertical-align: inherit;">about</span></span>
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
					<img itemprop="image" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxANDxAPDRANDQ4NEBUQDQ8NDxANDw0NFREWFhURFRUYHSggGBomGxUVITIhJikrLi4uFx8zODMsNygtLisBCgoKDg0OFg4NFS0lFSUrNS04NzE3LTcsMzc3NzcrLzcrNy0tLjcrKysuNzc3Ny4rKy4rKzUsNDEuLS0rLSsyK//AABEIALQBGQMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAQQCAwYFBwj/xABIEAABAwICAwkMCAUDBQAAAAAAAQIDBBESIRQx8FFTVGFxgZGT0gUGBxMXIjRBcrKz0TIzUnN0o8HTQkOSobGUwvEWIyRjgv/EABYBAQEBAAAAAAAAAAAAAAAAAAABAv/EABgRAQEBAQEAAAAAAAAAAAAAAAACATEh/9oADAMBAAIRAxEAPwD7iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFZalALIKukINIQC0CrpKDSUAtAq6Sg0lALQKulINJQC0CrpSDSkAtAq6UhOlAWQVtKGkgWQVtJQaSgFkFbSEGkIBZBW0hDW2pTG5NxrV6Vcn6AXQVvHoPHoBZBW8ehPjwLAIRb57pIAAAAAAAAAAADyD1zyAAB5/dzuvFQwunncrY22TJMTnOXU1qetQPQB8+XwpUu8VnRD2x5UqbeKvoh7YH0EHz3yo028Vf5XbHlSpt4q/yu0B9CB898qNPvFX+V2h5UafeKr8rtAfQgfPPKlT7xVfldoeVKn3iq/K7QH0MHzzypU/B6rpi7Q8qdPweq6Yu0B9EB878qdPweq6Yu0PKnT8HqumLtAfRCT5z5VKfg9V0xdovdx/CPTVMzIVZNA6VUbG6XArHPXJGqqLkqrkB3AIYt0uZADSz61/3bPekNxpb9a/2Ge9IUbiTxe+fvkp+5ccclSkqtml8VGkLEe5Xq1XalVNxTxY/CVQORXIyqs16sf5kSYHNR6qrvP8ANS0b81yyM7WZ3R2qA5fuZ370lVM2CNs6Pe7AmNsSJezc8nqqt89uaIv0jpkTMTWV7Oj0ovopyIZGMf0U5DIoAAAAAAAAAAAeSeseUBBwfhl9Cp/xbfgTHeHCeGb0Gm/Ft+BMB8mjjuhsSAQaiy3bpAr6Ptz8oSnLaJtzkogFTRttlGjFtE25iUQCno22ykaMXbEW25wKejDRi5YgCno4WnLa7dBDgKawGVAlqmBP/fF8RpueaqL0qD7+L4jQP0giGRCGRQsaG/Wv9iP3pDeaU+tf7EfvSAeN3297EfdWOFksksOjzJPG6HAq40aqIio5FRUzOf8AJbTKkaOqap7YmOjwuSJWva5mFbpbJbKubbLnnc7t9/4bc/6FenkcqqjlVbKiZojb6zNRNdwcz3J8H8FJPHUNnne+KRZPObEiOxOV2BbNybdb5Z5Il7ZHYt1mh8yNc1q3862d0TXxG5n6r+omcnzMHpR6k5DIxj1JyGRQAAAAAAAAAAA8o9U8oAcJ4ZvQab8W34Ex3Zwnhm9BpvxjfgTAfKYdRZZt0laDVzllgGxpLSG7dJk0AibcwQIABG39yRt/cCCFJIUCFMXGS7dBi4DVJt0mui9Kg+/i+I02SGui9Kh+/i99oH6SJCAok0J9a/2I/ekNxpT6x/sM96QDXJHGqri1qmd3Je1/mhDGRxrlZq8bkTVc3ORLpfWq5ZIuev5kPRuWL+JbJ5qLnr3AJWRE1rblVqGbPVz/AKmEiNS2L1rZLoi5rzZGxiZoB6LNSchkYs1JyGRAAAAAAAAAAAA8s9Q8oCTg/DP6DTfjG/AmO7OE8NHoNN+Mb8CYD5RBq5y0zbpKsGrnLLFA2NMkMGqSigZJt0EmKKRcDIbf3Mb7c4vtzgSF26DFVCuAlTF4VSHLtzlGt+3SaqH0mH7+L32mx5ro/SYfvo/faQfpRCSEMihY0fzH+xH70hvNH8x/sR+9IAe6ytTCrrrmuVmZLmv+OcSrm3zcXna/sZL536c5LkVVSy2RL3TLzstW24RIjlVuFUREXz0tfE2y5dICVbYfNxXduXwZL5xsbrTb1GEjVXDhXDZbuyvibuGbdabeoD0Wak5DIxZqTkMiAAAAAAAAAAAB5Z6h5QEnB+Gj0Cm/GN+BMd2cr4Uu4s1b3PbozHSvp52zOjYiue+NI5GLhRM1VMaLZM8lA+KxOshva/bPdNWgzpl4mdN28L0VF6Boc+8zdU/5Ab0k2zJSTbM0aFPvM3VP+ROhzbzN1T/kBuSQeMNOhzbzN1T/AJEaHNvM3VP+QG/xhHjDTok28zdU/wCQ0ObeZuqf8gN2MxV5q0OfeZuqf8hoc28z9U/5AbVkIWQ16HNvM3VP+RGhz7zP1T/kBk5+3ORR+kQ/fR++0xWjn3mfqX/I9PvY736urq4GRwTIiSsdJI+N7I4o2uRXOc5UsmSLl61A/QqEkOSygok0fzH+xH70hvNH8x/sR+9IBD5bKiWVcS2umpMr3XcT1EvjRytVf4VuhjJFdb2Yu4rkuptQDRUVKRqxML3eMfgRWNVyMXCq4nfZbla+6qFhi5pt6jS+NXLmjFT1XzX/AAbY75Xtf121agr0mak5DIxj1JyGREAAAAAAAAAAAPJPWPHxJugZG2GdW8aGjEgxIBc0ziJ0ziKWJBiQC7pnENM4iliQYkAu6ZxDS+IpYkJxAWmV6O1WXkXiv+qdJlpnEeStFEttdkTJL5ctt3X0jQYsstSImvWif8AetpnENL4ihBG2NuFupN1bmeJALml8Q0viKmJBiQC5pfEQ6q3EKmJCcSFGSrfWSYYkGJANhVkkVJbJa72xtuqXRPrl1X4jfiKkrv8AvN/+PdnAt4X/AGo+rXtDC/7UfVr2jJHDEBGF/wBqPq17RF3IrbqxUctls1Wr9FV3eIzxGErkuz2/9jgPSj1JyGRjHqTkMiAAAAAAAAAAAB5lT3Ode8apZV1OW1j0wByHdOvWlfglinX1o5jMTHJxKebL32QMyc2ZqrqxNal+lT6CV6yhhqERs8UUzUW6JKxsiIu6l0yA4VnfbA76LZ3W14Wo63Qpcoe67qm/iKasktrXxbWM/qc5EXpOwpKSKBuCCOOFl74ImNjbdda2Q3Acui1PA6n+um/cJ/8AJ4HUf10v7h04A5hEqeCT9ZTfuE4angk/WU37h0wA5rDU8Fn6ym/cGGp4LN1lN+4dKAObwVPBZuspv3BgqeCzdZT/ALh0gA5zBUcFm6yn7YwVHBpesp+2dGAOdwVHBpesp+2Q9KhEVdFmW3qa+nVV5PPOjAHCr3yImS0vdBFTWi0z0VCP+p28Grv9O47sAcPB3xte5rfEVjcSomJ8Lmtbf1qvqQd1u7sFL58yrd+FI2pkqq1VW6Lq/iO4NNVSRztwTRxzMvfDKxsjb7tlA4Kn78Ipb+LiqZMP0vF4X4b6r21G5O+ZOD1f9J21JRxQNwQRxwsvfDExsbb7tkQ3gcZS91pJvq6Wtcmq+Czb8q5Hv0tE5yNdJdiql1aqo5zeLLK56gAhEtluEgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//Z"
					alt='Kenmore 17 "Microwave' />
					<div itemprop="aggregateRating" itemscope
					itemtype="https://schema.org/AggregateRating">
						Оценка <span itemprop="ratingValue"> 3,5 </span>						/ 5 на основе <span itemprop="reviewCount"> 11 </span>						отзывов клиентов
					</div>
					<div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
						<! - цена 1000, число, с разделителем тысяч, зависящим от локали
    и десятичный знак, а символ $ помечен
    машиночитаемый код «USD» ->
						<span itemprop="priceCurrency" content="USD"> $ </span>						<span itemprop="prrice" содержание="1000,00"> 1,000.00 </span>
						<link itemprop="availability" href="https://schema.org/InStock"
						/> В наличии
					</div>

					Описание товара:
					<span itemprop="description"> Микроволновая печь на столешнице объемом 0,7 кубических фута. 
  Имеет шесть предустановленных категорий приготовления и удобные функции, такие как
  Дополнительная минута и блокировка от детей. </span>

					<br/>Отзывы клиентов:
					<div itemprop="review" itemscope itemtype="https://schema.org/Review">
						<span itemprop="name"> Не счастливый турист </span>						- автор <span itemprop="author"> Элли </span>						,
						<meta itemprop="datePublished" content="2011-04-01"> 1 апреля 2011 г.
						<div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
							<meta itemprop="худший рейтинг" content="1">
							<span itemprop="ratingValue">1</span>/
							<span itemprop="bestRating">5</span>							звезд
						</div>
						<span itemprop="reviewBody"> Лампа перегорела, и теперь мне нужно заменить её. </span>
					</div>

					<div itemprop="review" itemscope itemtype="https://schema.org/Review">
						<span itemprop="name"> Стоимость покупки </span>						- автор <span itemprop="author"> Лукас </span>						,
						<meta itemprop="datePublished" content="2011-03-25"> 25 марта 2011 г.
						<div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
							<meta itemprop="худший рейтинг" content="1"
							/>
							<span itemprop="ratingValue">4</span>/
							<span itemprop="bestRating">5</span>							звезд
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
        &lt;div&nbsp;itemscope&nbsp;itemtype="https://schema.org/ItemList"&gt;
          &nbsp;&nbsp;&lt;div&nbsp;itemprop="itemListElement"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Product"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;alt="Фотография&nbsp;товара"&nbsp;itemprop="image"&nbsp;height="400"&nbsp;src="https://content2.rozetka.com.ua/goods/images/big/153245733.jpg"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;itemprop="url"&nbsp;href="https://rozetka.com.ua/acer_nh_q99eu_009/p261807786/"&gt;&nbsp;&lt;span&nbsp;itemprop="name"&gt;Acer&nbsp;Aspire&nbsp;7&nbsp;A715-75G-56AA&lt;/span&gt;&nbsp;&lt;/a&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;itemprop="offers"&nbsp;itemscope&nbsp;itemtype="https://schema.org/Offer"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;itemprop="price"&gt;&nbsp;23&nbsp;333₴&nbsp;&lt;/span&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;&nbsp;...
          &nbsp;&nbsp;&lt;/div&gt;
          &nbsp;&nbsp;&lt;div&nbsp;itemprop="itemListElement"&nbsp;itemtype="https://schema.org/Product"&gt;
          &nbsp;&nbsp;&nbsp;&nbsp;...
          &nbsp;&nbsp;&lt;/div&gt;
        &lt;/div&gt;        
        </pre>
			</div>
			<div class="col-sm-6">
				<div itemscope itemtype="https://schema.org/ItemList">
					<div itemprop="itemListElement" itemscope
					itemtype="https://schema.org/Product">
						<img alt="Фотография товара" itemprop="image"
						height="400" src="https://content2.rozetka.com.ua/goods/images/big/153245733.jpg">
						<a itemprop="url" href="https://rozetka.com.ua/acer_nh_q99eu_009/p261807786/">
						<span itemprop="name">Acer Aspire 7 A715-75G-56AA</span>							</a>
						<div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<span itemprop="price"> 23 333₴ </span>
						</div> ...
					</div>
					<div itemprop="itemListElement" itemtype="https://schema.org/Product">
						...
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection