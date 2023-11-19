<?php
use App\Models\users;
$admin = Users::where('email', "admin@mail.ru")->first();	
?>


<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <h1 class="mt-1 text-2xl font-medium text-gray-900">
        Добро пожаловать на личную страницу!
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
       Здесь вы можете внести изменения в свой профиль, посмотреть заявки на бронирование, оставленные отзывы.
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
							@if($admin->id == Auth::id())
                <a href="{{ route('feedbackAll') }}">Все отзывы</a>
								@else
                <a href="{{ route('feedbackUser') }}">Ваши отзывы</a>
							@endif
						</h2>
        </div>

				@if($admin->id == Auth::id())
				<p class="mt-4 text-gray-500 text-sm leading-relaxed">
							Здесь Вы можете посмотреть все отзывы, проверить или удалить их.
						</p>
							@else
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
						Здесь Вы можете посмотреть свои отзывы, отредактировать или удалить их.
        </p>
				@endif
        <p class="mt-4 text-sm">
					@if($admin->id == Auth::id())
					<a href="{{ route('feedbackAll') }}" class="inline-flex items-center font-semibold text-indigo-700">
                Посмотреть отзывы
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>

					@else
            <a href="{{ route('feedbackUser') }}" class="inline-flex items-center font-semibold text-indigo-700">
                Посмотреть отзывы
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
						@endif
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
            </svg>
						@if($admin->id == Auth::id())
						<h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="{{route('bookingUserAll') }}">Все заявки на бронирование</a>
            </h2>
						@else
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="{{route('bookingUser') }}">Ваши заявки на бронирование</a>
            </h2>
						@endif
        </div>

				@if($admin->id == Auth::id())
				<p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Здесь вы можете посмотреть все заявки на бронирование и удалить их.
        </p>
				@else
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Здесь вы можете посмотреть свои заявки на бронирование и забронировать снова.
        </p>
				@endif

        <p class="mt-4 text-sm">
					@if($admin->id == Auth::id())
					<a href="{{route('bookingUserAll') }}" class="inline-flex items-center font-semibold text-indigo-700">
                Посмотреть все заявки
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
				    </a>
					@else
            <a href="{{route('bookingUser') }}" class="inline-flex items-center font-semibold text-indigo-700">
                Посмотреть заявки
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
				    </a>
					@endif
        </p>
    </div>
</div>
