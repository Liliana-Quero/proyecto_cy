{!! Form::open(array('url'=>'revision','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-md btn btn-success">
            <img src="{!! asset('images/buscar.png') !!}" width="25" height="25" style="opacity:65%">
            Buscar</button>
		</span>
	</div>
</div>

{{Form::close()}}
