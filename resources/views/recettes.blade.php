@extends('layouts.gues')

@section('content')

    <main class="container mx-auto px-4 py-12 pt-20">

        <!-- Section: Toutes les Recettes -->
        <section id="all-recettes" class="bg-white p-8 rounded-xl shadow-lg mb-12">
            <h1 class="text-4xl font-bold text-blue-700 mb-8 text-center">Toutes nos Recettes Énergisantes</h1>
            <p class="text-lg leading-relaxed text-center max-w-3xl mx-auto mb-12">
                Explorez notre collection complète de recettes, soigneusement élaborées pour soutenir vos objectifs sportifs. Que vous cherchiez à augmenter votre énergie, améliorer votre récupération ou optimiser votre composition corporelle, vous trouverez ici l'inspiration culinaire qu'il vous faut.
            </p>

            @livewire('recette-list')
        </section>

    </main>
@endsection