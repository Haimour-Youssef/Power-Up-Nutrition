@extends('layouts.gues')

@section('content')
    <!-- Section d'en-tête -->
    <main class="container mx-auto px-4 py-12 pt-20">

        <!-- Recipe Detail Section -->
        <section id="recipe-detail" class="bg-white p-8 rounded-xl shadow-lg mb-12">
            <h1 class="text-4xl font-bold text-blue-700 mb-6 text-center">{{$recette->title}}  ({{ $recette->type ?? '' }})</h1>
            
            <div class="flex flex-col md:flex-row items-start gap-8">
                <div class="md:w-1/2">
                    @if($recette->image)
                        <img src="{{ asset('storage/' . $recette->image) }}" alt="Image de {{ $recette->title }}" class="rounded-lg shadow-md w-full h-auto object-cover mb-6">
                    @else
                        <img src="https://placehold.co/600x400/D4EDDA/3C763D?text=Smoothie+Protéiné" alt="Image de Smoothie Protéiné Post-Entraînement" class="rounded-lg shadow-md w-full h-auto object-cover mb-6">
                    @endif
                    <p class="text-lg leading-relaxed text-gray-700 mb-6">
                        {{$recette->description}}
                    </p>
                    <div class="flex items-center justify-around text-gray-600 text-sm mb-6">
                        <span class="flex items-center"><i class="fas fa-clock mr-2 text-blue-500"></i>Préparation: {{$recette->Preparation}} min</span>
                        <span class="flex items-center"><i class="fas fa-utensils mr-2 text-blue-500"></i>Portions: {{$recette->Portions}}</span>
                        <span class="flex items-center"><i class="fas fa-fire mr-2 text-blue-500"></i>Calories: {{$recette->Calories}} kcal</span>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <h2 class="text-2xl font-bold text-blue-700 mb-4">Ingrédients</h2>
                    <ul class="list-disc list-inside text-lg leading-relaxed text-gray-800 mb-6 space-y-2">
                        @foreach($recette->ingredients->sortBy('order') as $ingredient)
                            <li>{{ $ingredient->name }}</li>
                        @endforeach
                    </ul>

                    <h2 class="text-2xl font-bold text-blue-700 mb-4">Instructions</h2>
                    <ol class="list-decimal list-inside text-lg leading-relaxed text-gray-800 space-y-2">
                        @foreach($recette->instructions->sortBy('order') as $instruction)
                            <li>{{ $instruction->name }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
            
            <!-- Back to recipes button -->
            <div class="text-center mt-12">
                <a href="{{ url('/recettes')}}" class="inline-block bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                    <i class="fas fa-arrow-left mr-2"></i> Retour à toutes les recettes
                </a>
            </div>
        </section>

    </main>
     <!-- Section Pied de page -->
@endsection