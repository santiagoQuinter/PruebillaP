  @extends('plantilla')


@section('seccion')
   
    @if(!$errors->isEmpty())
        <div>
            <h2>Se encontraron algunos errores, revisa nuevamente</h2>
        </div>
    @endif


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12" >
            <div class="user">
                <header class="user__header">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
                    <h1 class="user__title">Editar Cliente</h1>
                </header>
                <form class="form" action="{{route('cliente.update',$cliente->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form__group">
                        <input type="number" placeholder="Identificación" class="form__input" name="cedula" value="{{$cliente->cedula}}"/>
                    </div>
                    
                    <div class="form__group">
                        <input type="text" placeholder="Nombre" class="form__input" name="nombre" value="{{$cliente->nombre}}"/>
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Editar Cliente</button>
                </form>
            </div>
        </div>
    </div>
@endsection