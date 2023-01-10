{!! Form::open(array('url'=>'/revisar-registros','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<input type="hidden" name="suc" value="{{$sucursal->id}}">
		<input type="hidden" name="trim" value="{{$trimestre->id}}">
		<input type="hidden" name="top" value="{{$topico->id}}">
		<input type="text" class="form-control" name="buscar" placeholder="Buscar..." value="{{@$buscar}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-md btn btn-success">
				<img src="{!! asset('images/buscar.png') !!}" width="25" height="25" style="opacity:65%">
				Buscar</button>
		</span>
	</div>
</div>

{{Form::close()}}