@extends('layouts.4masterAdmin')  

@section('head')
    Пользователи сайта
@endsection

@section('content') 
 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
					<br>
            <h2  class="heading" style="color:#401d0a;">Список пользователей</h2><br>
						<h4>Вы авторизованы под  логином {{ $user }}</h4>
            @foreach ($data as $el)
                <div class="card mt-2" style="
		margin-top: 0.5rem!important;
		position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}">
                <h5 class="card-header" style="padding-left: 1.25rem; padding-top: 1.25rem;">Login: {{ $el->name }} | E-mail: {{ $el->email }}</h5>
                <div class="card-body" style="
		flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}">
                    <h5 class="card-title" tyle="
		padding: 1.25rem 0.75rem 1.25rem 0;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}">Дата регистрации: {{ $el->created_at }}</h5>
                    <h5 class="card-title">Последнее обновление учетной записи: {{ $el->updated_at }}</h5>
                    <div>
											 <a href="{{ route('usersDelete', $idUser = $el->id) }}" class="btn btn-danger">Удалить пользователя</a>
										</div>
                </div>
                </div>
								<br><br>
            @endforeach
					
        </div>
    </div>
	@endsection