

	<div class="section">
		<div class="container">
			<h2 class="section-title">Выбор товаров</h2>
			<div class="row">
				<div class="col-md-3">
					<div class="card card-refine card-plain">
						<div class="card-content">
							<h4 class="card-title" id="filters">
								Фильтруй
								<button class="btn btn-default btn-fab btn-fab-mini btn-simple pull-right" rel="tooltip" title="сбросить">
									<i class="material-icons">cached</i>
								</button>
							</h4>



							<div class="panel panel-default panel-rose">
								<div class="panel-heading" role="tab" id="headingOne">
									<a class="collapsed" role="button" data-toggle="collapse" 
									data-parent="#accordion" href="#collapseOne" aria-expanded="false" 
									aria-controls="collapseOne">
										<h4 class="panel-title">Диапазон цен</h4>
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" 
								aria-labelledby="headingOne">
									<div class="panel-body panel-refine">
										<span id="price-left" class="price-left pull-left" 
										data-currency="&dollar;">100</span>
										<span id="price-right" class="price-right pull-right" 
										data-currency="&dollar;">850</span>
										<div class="clearfix"></div>
										<div id="sliderRefine" class="slider slider-rose"></div>
									</div>
								</div>
							</div>





							<div class="panel panel-default panel-rose">
								<div class="panel-heading" role="tab" id="headingTwo">
									<a class="collapsed" role="button" data-toggle="collapse" 
									data-parent="#accordion" href="#collapseTwo" aria-expanded="false" 
									aria-controls="collapseTwo">
										<h4 class="panel-title">Категория</h4>
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse <?php isActiveCat(1,1) ?>" role="tabpanel" 
								aria-labelledby="headingTwo">
									<div class="panel-body">
										<div class="checkbox">
											<label>
												<input type="checkbox" id="ft1" <?php isActiveCat(1); ?> 
												value="" data-toggle="checkbox">
												Детские столы и стулья
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" id="ft2" <?php isActiveCat(2); ?> 
												value="" data-toggle="checkbox">
												Школьные парты
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" id="ft3" <?php isActiveCat(3); ?> 
												value="" data-toggle="checkbox">
												Уличная мебель
											</label>
										</div>

									</div>
								</div>
							</div>





							<div class="panel panel-default panel-rose">
								<div class="panel-heading" role="tab" id="headingThree">
									<a class="collapsed" role="button" data-toggle="collapse" 
									data-parent="#accordion" href="#collapseThree" aria-expanded="false" 
									aria-controls="collapseThree">
										<h4 class="panel-title">Материал</h4>
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" 
								aria-labelledby="headingThree">
									<div class="panel-body">

										<div class="checkbox">
											<label>
												<input type="checkbox" value="" data-toggle="checkbox">
												Дерево
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" value="" data-toggle="checkbox">
												Нержавейка
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" value="" data-toggle="checkbox">
												Плазма
											</label>
										</div>
									</div>
								</div>
							</div>

							



						</div>
					</div><!-- end card -->
				</div>