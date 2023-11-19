<x-app-layout>
    <x-slot name="header">
			  
				@if($admin->id == Auth::id())
				<h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Личный кабинет Админа') }}
        </h2>
				@else
				
				<h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Личный кабинет пользователя') }}
        </h2>
		
				@endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
						</div>
        </div>
    </div>
</x-app-layout>
