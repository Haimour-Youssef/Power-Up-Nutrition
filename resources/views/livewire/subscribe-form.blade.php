<div>
    @if($success)
        <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg">Merci ! Le guide vous a été envoyé par email.</div>
    @else
        <form wire:submit.prevent="submit" class="space-y-4 text-center">
            <div>
                <input type="text" wire:model.defer="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nom..." required />
                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div>
                <input type="email" wire:model.defer="email" name="email" id="email" placeholder="name@company.com" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="inline-block bg-purple-400 text-white hover:bg-purple-700 font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                <i class="fas fa-book-open mr-2"></i> Consulter le guide
            </button>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                En cliquant sur "Consulter le guide", vous acceptez de recevoir notre guide par email.
            </p>
        </form>
    @endif
</div>
