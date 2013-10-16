@extends('layout')
@section('createBook')
	{{ Form::open(['url' => 'books']) }}
	<div class="row">
			<div class="col-md-4"></div>

			<div class="col-md-4">
				<div class="row form">
					<div class="col-md-6">
						<div>
							<img src="http://placehold.it/200&text=Blank+Image">
						</div>
					</div>
					<div class="col-md-6">
						<div>
							<h2 class="form_header">Information</h2>
							<div class="input-group input">
								{{Form::text('isbn', null, ['class' => 'form-control input_field', 'placeholder' => 'ISBN 10']) }}
							</div>
							<div class="input-group input">
								{{Form::text('title', null, ['class' => 'form-control input_field', 'placeholder' => 'Title']) }}
							</div>
							<div class="input-group input">
								{{Form::text('author', null, ['class' => 'form-control input_field', 'placeholder' => 'Author']) }}
							</div>
							{{ Form::select('Category', ['biology' => 'Biology',
														 'computerScience' => 'Computer Science',
														 'english' => 'English'], null, ['class' => 'form-control input'])}}
							<div class="input-group input">
								<label for="price">Price:</label>
								<input type="range" id="priceRange" class="input-group input" name="price" min="5" max="400" step="5" value="50">
								<div class="input-group input">
									<span class="input-group-addon addon"><i class="icon-usd"></i></span>
									<input type="text" class="form-control input_field" id="priceInput" value="50">
									<span class="input-group-addon addon">.00</span>
								</div>
							</div>
							<label for="rating">Condition:</label>
							<span id="rating" class="rating">
								<span id="star1" class="star"></span>
								<span id="star2" class="star"></span>
								<span id="star3" class="star"></span>
								<span id="star4" class="star"></span>
								<span id="star5" class="star"></span>
							</span>
							<br />
							<input type="checkbox"> Trade?
							<br />
							<br />
							{{ HTML::decode(Form::button('<i class="icon-plus"></i> Add book', array('type' => 'submit', 'class' => 'btn btn-success btn-block'))) }}
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4"></div>
		</div>
		{{Form::close()}}
@show