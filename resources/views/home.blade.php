@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="panel">
				<div class="panel-heading bg-red">
                    Home
                </div>
				<div class="panel-body text-center">
					Login Efetuado com Sucesso! Bem vindo <h3>{{ Auth::user()->name }}</h3>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
