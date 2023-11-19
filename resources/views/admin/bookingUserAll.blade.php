@extends('layouts.4masterAdmin')  

@section('head')
  Все брони
@endsection	
        
@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
					<br>
            <h2  class="heading"><span style="color:#d60c00;">Здесь собраны все заявки на бронирование</h2>
					<br>
						
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
									<h5 class="card-header" style="padding-left: 1.25rem; padding-top: 1.25rem;">Дата бронирования: {{ $el->date }}</h5>
									<div class="card-body" style="
																								flex: 1 1 auto;
																								min-height: 1px;
																								padding: 1.25rem;
																						}">
											<h5 class="card-title" style="
																							padding: 1.25rem 0.75rem 1.25rem 0;
																							margin-bottom: 0;
																							background-color: rgba(0,0,0,.03);
																							border-bottom: 1px solid rgba(0,0,0,.125);
																					}">Дата подачи заявки: {{ $el->created_at }}</h5>
											<h5 class="card-title">На сколько человек бронь: {{ $el->numquests }}</h5>
											<h5 class="card-title">На чье имя бронь: {{ $el->namequeste }}</h5>
											<p style="font-size:14px;" class="card-text">Комментарий к заявке: <br>{{ $el->message }}</p>
											<a href="{{ route('adminBookingDelete', $idBooking = $el->id) }}" class="btn btn-danger" style="margin-bottom: 15px;">Удалить запись</a>
									</div>
                </div>
								<br><br>
					
            @endforeach
@endsection
