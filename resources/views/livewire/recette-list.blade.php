<div>
    <div class="mb-8 p-6 bg-gray-100 rounded-lg shadow-inner">
        <div class="flex flex-col md:flex-row items-center justify-center gap-4 mb-6">
            <input type="text" wire:model.debounce.500ms="search" placeholder="Rechercher une recette..."
                   class="w-full md:w-1/2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
        </div>
        <div class="flex flex-wrap justify-center gap-3">
            <button wire:click="setCategory('all')" class="category-button {{ $category === 'all' ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-800' }} font-semibold py-2 px-5 rounded-full transition duration-300">Toutes</button>
            <button wire:click="setCategory('petit-dejeuner')" class="category-button {{ $category === 'petit-dejeuner' ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-800' }} font-semibold py-2 px-5 rounded-full transition duration-300">Petit-déjeuner</button>
            <button wire:click="setCategory('dejeuner')" class="category-button {{ $category === 'dejeuner' ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-800' }} font-semibold py-2 px-5 rounded-full transition duration-300">Déjeuner</button>
            <button wire:click="setCategory('diner')" class="category-button {{ $category === 'diner' ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-800' }} font-semibold py-2 px-5 rounded-full transition duration-300">Dîner</button>
            <button wire:click="setCategory('snack')" class="category-button {{ $category === 'snack' ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-800' }} font-semibold py-2 px-5 rounded-full transition duration-300">Snack</button>
            <button wire:click="setCategory('boisson')" class="category-button {{ $category === 'boisson' ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-800' }} font-semibold py-2 px-5 rounded-full transition duration-300">Boisson</button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @forelse($recettes as $recette)
            <div class="recipe-card bg-white p-6 rounded-lg shadow-md flex flex-col">
                <img src="{{ $recette->image ? Storage::url($recette->image) : 'https://placehold.co/400x250?text=Recette' }}" alt="Image of {{ $recette->title }}" class="rounded-md mb-4 w-full h-40 object-cover">
                <h3 class="text-xl font-semibold mb-2">{{ $recette->title }}</h3>
                <p class="text-gray-700 mb-4 flex-grow">{{ \Illuminate\Support\Str::limit($recette->description, 80) }}</p>
                <a href="{{ route('recetteDetail', $recette->title) }}" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full text-sm text-center transition duration-300">
                    Voir la recette <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        @empty
            <div class="col-span-4 text-center text-gray-500">Aucune recette trouvée.</div>
        @endforelse
    </div>

    <div class="mt-8 flex justify-center">
        {{ $recettes->onEachSide(1)->links('pagination::simple-tailwind') }}
    </div>
</div>
