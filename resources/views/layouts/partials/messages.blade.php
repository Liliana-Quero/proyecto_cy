@if(isset ($errors) && count($errors) > 0)
    <div class="alert alert-warning text-center" style=" background-color: peachpuff;  font-size: larger;">
            <i class="fa fa-check text-center"></i>
            ¡ERROR!
        </div>
        <ul class="list-unstyled mb-0">
            @foreach ($errors->all() as $error)
                <li style="color:red; font-family:initial;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $message)
            <div class="alert alert-succes" style="background-color: lawngreen; font-size: larger;">
            <i class="fa fa-check"></i>
            Cuenta creada
        </div>>
                <i class="fa fa-check"></i>
                {{ $message }}
            </div>
        @endforeach
    @else
        <div class="alert alert-succes"  style="background-color: lawngreen; font-size: larger;">
            <i class="fa fa-check"></i>
            {{ $data }}
        </div>
    @endif
@endif
