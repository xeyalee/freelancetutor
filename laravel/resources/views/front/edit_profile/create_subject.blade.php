@extends('layouts.main_with_sidebar')

<!-- section1 burda baslayir -->
@section('content')
				<form action="/profile/subject/create" method="post" >

				 	<input type="hidden" name="_token" value="{{ csrf_token() }}">

		            	<div class="box-body">

		              	<label>Fənn</label>
		                <div class="row">
		                <div class="col-md-12">
		                	<select class="selectpicker" name="title">
		                		<option value="0">Seçin</option>
		                		@foreach($category as $cat)
		                			<optgroup label="{{$cat->title}}">
		                				@foreach($cat->subjects->all() as $sub)
		                					<option value="{{$sub->id}}">{{$sub->title}}</option>
		                				@endforeach
		                			</optgroup>
									
								@endforeach
							</select>
						</div>

{{-- 		                	<div class="col-md-6">
			                	<select name="category" class="selectpicker form-control" >
				                	@foreach($category as $cat)
										<option> {{$cat->title}} </option>
									@endforeach
								</select>
		                	</div> --}}
		                	{{-- <div class="col-md-6">
		                		<select name="subject" class="selectpicker form-control" >
				                	@foreach($subject as $sub)
										<option> {{$sub->title}} </option>
									@endforeach
								</select>
		                	</div> --}}
		                </div>


		                <div class="form-group">
		                  <label for="Interval">Müddəti</label>
		                  <input name="interval" type="text" class="form-control" id="Interval">
		                </div>


		                <label>Qiymət</label>
		                <div class="row">
		                <div class="col-md-12">
			               	<div  class="form-group">
			               		<input type="number" name="cost" class="form-control">
			               	</div>
		                </div>
		                
		                </div>
		                <div class="form-group">
		                  <label for="Description">Mündəricat</label>
		                  <textarea name="description" class="form-control" id="Description" rows="6"></textarea>
		                </div>
		              </div>
		              <div class="box-footer">
		                <button type="submit" class="btn btn-primary">Yadda saxla</button>
		              </div>
            	</form>
@endsection

	
