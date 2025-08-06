
                    {{-- @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    @endauth --}}
@extends('layouts.gues')

@section('content')
    <main class="pt-20"> <!-- Rembourrage supérieur pour compenser l'en-tête fixe -->

        <!-- Section Héro / Page d'accueil -->
        <section id="home"
            class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20 md:py-32 flex items-center justify-center min-h-screen-75 rounded-b-xl shadow-lg">
            <div class="container mx-auto text-center px-6">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 animate-fade-in-down">
                    Libérez votre potentiel grâce à la nutrition sportive
                </h1>
                <p class="text-lg md:text-xl mb-10 max-w-2xl mx-auto opacity-90 animate-fade-in-up">
                    PowerUp Nutrition — le carburant ultime pour maximiser vos performances. La nutrition sportive n’est
                    pas une option, c’est votre levier de succès.
                </p>
                <div class="space-y-4 md:space-y-0 md:space-x-4">
                    <a href="#contact"
                        class="bg-white text-indigo-700 hover:bg-gray-100 px-8 py-4 rounded-full text-lg font-semibold shadow-lg transition-all duration-300 transform hover:scale-105 inline-block">
                        Je débute ma transformation
                    </a>
                    <a href="#contact"
                        class="bg-white text-indigo-700 hover:bg-gray-100 px-8 py-4 rounded-full text-lg font-semibold shadow-lg transition-all duration-300 transform hover:scale-105 inline-block">
                        Programme personnalisé
                    </a>
                    <a href="#contact"
                        class="bg-white text-indigo-700 hover:bg-gray-100 px-8 py-4 rounded-full text-lg font-semibold shadow-lg transition-all duration-300 transform hover:scale-105 inline-block">
                        Contactez-moi
                    </a>
                </div>
                <!-- Visuel puissant : sportif en action, alimentation saine en arrière-plan -->
                <!-- Carousel Hero Images -->
                <div class="relative mt-16 max-w-4xl mx-auto">
                    <div id="hero-carousel" class="overflow-hidden rounded-lg shadow-xl">
                        <div class="carousel-slide flex transition-transform duration-700"
                            style="transform: translateX(0%);">
                            <img src="./assets/img/Catalogue AR-01.png" alt="Sportif en action et alimentation saine"
                                class="w-full object-cover flex-shrink-0" />
                            <img src="./assets/img/Catalogue AR-05.png" alt="Homme courant au soleil"
                                class="w-full object-cover flex-shrink-0" />
                            <img src="./assets/img/une-femme-qui-mange-sainement.jpg" alt="Repas équilibré sportif"
                                class="w-full object-cover flex-shrink-0" />
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <button id="carousel-prev"
                        class="absolute left-2 top-1/2 -translate-y-1/2 bg-white bg-opacity-70 hover:bg-opacity-100 text-indigo-700 rounded-full p-2 shadow-md focus:outline-none">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button id="carousel-next"
                        class="absolute right-2 top-1/2 -translate-y-1/2 bg-white bg-opacity-70 hover:bg-opacity-100 text-indigo-700 rounded-full p-2 shadow-md focus:outline-none">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    <!-- Carousel Indicators -->
                    <div class="flex justify-center mt-4 space-x-2">
                        <button class="carousel-indicator w-3 h-3 rounded-full bg-indigo-300" data-index="0"></button>
                        <button class="carousel-indicator w-3 h-3 rounded-full bg-indigo-100" data-index="1"></button>
                        <button class="carousel-indicator w-3 h-3 rounded-full bg-indigo-100" data-index="2"></button>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section : L’importance de la nutrition sportive -->
        <section id="importance" class="py-16 md:py-24 bg-white rounded-xl shadow-md mx-auto my-12 px-6">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-8">L’importance de la nutrition sportive</h2>
                <div class="flex flex-col md:flex-row items-center justify-center gap-10">
                    <div class="md:w-1/2">
                        <img src="./assets/img/Catalogue AR-07.png" alt="Athlètes s'alimentant"
                            class="rounded-lg shadow-xl w-full h-auto object-cover">
                    </div>
                    <div class="md:w-1/2 text-left">
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            Le carburant de votre succès. La nourriture que vous consommez influence directement votre
                            force, endurance, récupération et santé mentale.
                        </p>
                        <ul class="list-disc list-inside text-lg text-gray-600 leading-relaxed mb-6">
                            <li>Optimise la force, la vitesse et l'endurance</li>
                            <li>Aide à la récupération plus rapide et efficace</li>
                            <li>Préserve la santé mentale et physique</li>
                            <li>Permet de repousser vos limites chaque jour</li>
                        </ul>
                        <p class="text-lg text-gray-600 leading-relaxed font-semibold">
                            Saviez-vous que 70% de votre performance dépend de ce que vous mangez ?
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section : Stratégies d’énergie pour l’endurance -->
        <section id="endurance" class="py-16 md:py-24 bg-gray-50 rounded-xl shadow-md mx-auto my-12 px-6">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-12">Stratégies d’énergie et de fuelling pour l’endurance
                </h2>
                <p class="text-xl text-gray-700 mb-10 max-w-3xl mx-auto">
                    Pour les sports d'endurance, chaque seconde compte. Une stratégie de fuelling bien pensée peut faire
                    toute la différence. Une stratégie adaptée peut améliorer la performance de 20 à 30% lors des
                    compétitions d'endurance.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <!-- Carte de service 1 -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 text-5xl mb-4">⚡</div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">AVANT L'EFFORT</h3>
                        <p class="text-gray-600">
                            Carburant pour une énergie durable. Préparez votre corps pour l'effort à venir.
                        </p>
                    </div>
                    <!-- Carte de service 2 -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 text-5xl mb-4">💧</div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">PENDANT L'EFFORT</h3>
                        <p class="text-gray-600">
                            Maintien du glucose et des électrolytes pour éviter la fatigue et rester hydraté.
                        </p>
                    </div>
                    <!-- Carte de service 3 -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 text-5xl mb-4">💪</div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">APRÈS L'EFFORT</h3>
                        <p class="text-gray-600">
                            Récupération rapide pour reconstruire les réserves et repartir plus fort.
                        </p>
                    </div>
                </div>
                <img src="./assets/img/Catalogue AR-02.png" alt="Gels énergétiques et sportifs en course"
                    class="mt-16 rounded-lg shadow-xl mx-auto w-full max-w-4xl h-auto object-cover">
                <a href="#contact"
                    class="mt-12 bg-indigo-600 text-white hover:bg-indigo-700 px-8 py-4 rounded-full text-lg font-semibold shadow-lg transition-all duration-300 transform hover:scale-105 inline-block">
                    Créez votre plan personnalisé de fuelling
                </a>
            </div>
        </section>

        <!-- Section : Atteindre votre poids cible pour une performance optimale -->
        <section id="poids-cible" class="py-16 md:py-24 bg-white rounded-xl shadow-md mx-auto my-12 px-6">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-8">Atteindre votre poids cible pour une performance
                    optimale</h2>
                <div class="flex flex-col md:flex-row items-center justify-center gap-10">
                    <div class="md:w-1/2 text-left">
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            Le poids n'est pas qu'un chiffre, c'est un facteur déterminant dans la compétition et la
                            santé. Un poids cible bien défini permet :
                        </p>
                        <ul class="list-disc list-inside text-lg text-gray-600 leading-relaxed mb-6">
                            <li>D'améliorer la puissance et la vitesse</li>
                            <li>De réduire la fatigue et les blessures</li>
                            <li>De renforcer la confiance en soi</li>
                        </ul>
                        <p class="text-lg text-gray-600 leading-relaxed font-semibold">
                            Jusqu’à 85 % des athlètes atteignent leur performance optimale en atteignant leur poids
                            idéal.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="./assets/img/Catalogue AR-04.png" alt="Athlète et balance"
                            class="rounded-lg shadow-xl w-full h-auto object-cover">
                    </div>
                </div>
                <a href="#contact"
                    class="mt-12 bg-indigo-600 text-white hover:bg-indigo-700 px-8 py-4 rounded-full text-lg font-semibold shadow-lg transition-all duration-300 transform hover:scale-105 inline-block">
                    Contactez powerup nutrition pour un programme personnalisé
                </a>
            </div>
        </section>

        <!-- Section : Nutrition pour musculation : bulking et cutting -->
        <section id="musculation" class="py-16 md:py-24 bg-gray-50 rounded-xl shadow-md mx-auto my-12 px-6">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-12">Nutrition pour musculation : bulking et cutting</h2>
                <p class="text-xl text-gray-700 mb-10 max-w-3xl mx-auto">
                    Que vous souhaitiez gagner du muscle ou perdre de la graisse, la clé est un plan précis et contrôlé.
                    Je vous propose un accompagnement sur-mesure pour optimiser chaque étape, sans compromis sur la
                    santé ou la performance.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <!-- Bulking Card -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 text-5xl mb-4">📈</div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">BULKING</h3>
                        <p class="text-gray-600">
                            Alimentation structurée pour une prise de masse saine et efficace.
                        </p>
                    </div>
                    <!-- Cutting Card -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                        <div class="text-indigo-600 text-5xl mb-4">🔪</div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">CUTTING</h3>
                        <p class="text-gray-600">
                            Stratégie pour définir et sculpter votre corps sans perdre en performance.
                        </p>
                    </div>
                </div>
                <p class="text-lg text-gray-600 leading-relaxed font-semibold mt-10">
                    Un programme structuré augmente la croissance musculaire de 25% par rapport à un entraînement sans
                    nutrition ciblée.
                </p>
                <img src="./assets/img/Catalogue AR-06.png" alt="Bodybuilders et repas équilibrés"
                    class="mt-16 rounded-lg shadow-xl mx-auto w-full max-w-4xl h-auto object-cover">
                <a href="#contact"
                    class="mt-12 bg-indigo-600 text-white hover:bg-indigo-700 px-8 py-4 rounded-full text-lg font-semibold shadow-lg transition-all duration-300 transform hover:scale-105 inline-block">
                    Contactez powerup nutrition pour un programme personnalisé
                </a>
            </div>
        </section>

                <!-- New Section: Recettes -->
        <section id="recettes" class="bg-white p-8 rounded-xl shadow-lg mb-12">
            <h2 class="text-3xl font-bold text-blue-700 mb-6 text-center">Nos Recettes Énergisantes</h2>
            <p class="text-lg leading-relaxed text-center max-w-3xl mx-auto mb-8">
                Découvrez nos 4 meilleures recettes, conçues pour vous apporter l'énergie et les nutriments nécessaires à l'optimisation de vos performances et de votre récupération. Simples, délicieuses et efficaces !
            </p>
            @php
                $recettes = \App\Models\Recette::orderBy('created_at', 'desc')->take(4)->get();
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                @foreach($recettes as $recette)
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col">
                        <img src="{{ $recette->image ? Storage::url($recette->image) : 'https://placehold.co/400x250?text=Recette' }}" alt="Image of {{ $recette->title }}" class="rounded-md mb-4 w-full h-40 object-cover">
                        <h3 class="text-xl font-semibold mb-2">{{ $recette->title }}</h3>
                        <p class="text-gray-700 mb-4 flex-grow">{{ \Illuminate\Support\Str::limit($recette->description, 80) }}</p>
                        <a href="{{ route('recetteDetail', $recette->title) }}" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full text-sm text-center transition duration-300">
                            Voir la recette <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- "Voir plus" button for recipes -->
            <div class="text-center mt-8">
                <a href="{{ url('/recettes')}}" class="inline-block bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                    Voir plus de recettes <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </section>

        <!-- Section : La supplémentation efficace -->
        <section id="supplementation"
            class="py-16 md:py-24 bg-white rounded-xl shadow-md mx-auto my-12 px-2 sm:px-4 md:px-6">
            <div class="container mx-auto">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8 sm:mb-12 text-center">La supplémentation
                    efficace</h2>
                <div class="flex flex-col lg:flex-row gap-8 md:gap-10 items-stretch">
                    <!-- Table: Suppléments -->
                    <div class="lg:w-2/3 w-full bg-white rounded-xl shadow p-4 sm:p-6 flex flex-col justify-center">
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4 sm:mb-6">Exemples de suppléments
                            ayant démontré leur intérêt en nutrition sportive<span class="text-indigo-500">*</span></h3>
                        <div class="overflow-x-auto">
                            <table
                                class="min-w-full bg-white border border-gray-200 rounded-lg text-left text-xs sm:text-sm">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th
                                            class="px-2 sm:px-4 py-2 sm:py-3 border-b-2 border-gray-200 font-semibold text-gray-700">
                                            Supplément</th>
                                        <th
                                            class="px-2 sm:px-4 py-2 sm:py-3 border-b-2 border-gray-200 font-semibold text-gray-700">
                                            Bienfaits</th>
                                        <th
                                            class="px-2 sm:px-4 py-2 sm:py-3 border-b-2 border-gray-200 font-semibold text-gray-700">
                                            Référence</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100 font-medium">
                                            Protéines (Whey, Caséine)</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Favorisent la
                                            croissance musculaire, améliorent la récupération et la réparation
                                            tissulaire</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Journal of the
                                            International Society of Sports Nutrition (2017)</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 bg-gray-50">
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100 font-medium">
                                            Créatine</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Augmente la
                                            force, la puissance explosive, la récupération entre séries</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Medicine &
                                            Science in Sports & Exercise (2012)</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100 font-medium">BCAA
                                            (Leucine, Isoleucine, Valine)</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Réduisent la
                                            fatigue, favorisent la récupération, protègent contre la dégradation
                                            musculaire</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Nutrients (2018)
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 bg-gray-50">
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100 font-medium">
                                            Électrolytes (Sodium, Potassium, Magnésium)</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Maintiennent
                                            l'équilibre hydrique, préviennent crampes et déshydratation</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Sports Medicine
                                            (2019)</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100 font-medium">
                                            Oméga-3</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Réduisent
                                            l'inflammation, accélèrent la récupération, soutiennent la santé
                                            cardiovasculaire</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">The British
                                            Journal of Nutrition (2016)</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 bg-gray-50">
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100 font-medium">
                                            Glutamine</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Soutient la
                                            récupération, réduit la fatigue, améliore la santé intestinale</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Amino Acids
                                            (2015)</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100 font-medium">
                                            Beta-Alanine</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Améliore la
                                            performance lors d'efforts courts et intenses (anaérobie)</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 border-b border-gray-100">Amino Acids
                                            (2017)</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 bg-gray-50">
                                        <td class="px-2 sm:px-4 py-2 sm:py-3 font-medium">Vitamine D</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3">Soutient la santé osseuse, renforce le
                                            système immunitaire</td>
                                        <td class="px-2 sm:px-4 py-2 sm:py-3">Nutrients (2020)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-xs text-gray-500 mt-2">*L'utilisation doit être encadrée par un professionnel
                            pour garantir l'efficacité et la sécurité.</p>
                    </div>
                    <!-- Statistique & Callout -->
                    <div
                        class="lg:w-1/3 w-full flex flex-col items-center justify-center bg-indigo-50 rounded-xl shadow p-4 sm:p-8 text-center mt-8 lg:mt-0">
                        <img src="./assets/img/Catalogue AR-03.png" alt="Athlète avec shaker de supplément"
                            class="rounded-lg shadow-lg mb-6 sm:mb-8 h-48 sm:h-80 w-full object-cover">
                        <div class="flex flex-col items-center justify-center h-full">
                            <div class="text-indigo-800 font-extrabold text-4xl sm:text-5xl md:text-6xl mb-1 sm:mb-2">
                                60<span class="align-super text-2xl sm:text-3xl">%</span></div>
                            <div class="text-lg sm:text-xl md:text-2xl font-bold text-indigo-900 mb-2 sm:mb-4">des
                                athlètes</div>
                            <div class="text-base sm:text-lg text-indigo-800 mb-4 sm:mb-6">utilisent des suppléments
                                pour améliorer leur performance</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- New Section: Notre Guide -->
        <section id="guide" class="bg-gradient-to-r from-purple-600 to-purple-800 text-white p-8 rounded-xl shadow-lg mx-10 mb-12 flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">Vous pouvez consulter notre guide</h2>
                <p class="text-lg leading-relaxed mb-4">
                    Plongez plus profondément dans le monde de la nutrition sportive avec notre guide complet. Que vous soyez débutant ou athlète confirmé, ce guide regorge de conseils pratiques, de stratégies avancées et d'informations essentielles pour optimiser votre alimentation et vos performances.
                </p>
                <p class="text-lg mb-6">
                    Apprenez les secrets des professionnels pour une énergie durable, une récupération accélérée et des résultats concrets.
                </p>
                <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="inline-block bg-white text-purple-700 hover:bg-gray-100 font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                    <i class="fas fa-book-open mr-2"></i> Consulter le guide
                </button>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Vous pouvez recevoir notre guide via email
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
@livewire('subscribe-form')
            </div>
        </div>
    </div>
</div> 

            </div>
            <div class="md:w-1/2">
                <img src="./assets/img/ordonnance-d-ecriture-nutritionniste-close-up.jpg" alt="Image d'un guide nutritionnel" class="rounded-lg shadow-md w-full h-auto object-cover">
            </div>
        </section>

        <!-- Section Témoignages -->
        <section id="testimonials" class="py-16 md:py-24 bg-gray-50 rounded-xl shadow-md mx-auto my-12 px-6">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-12">Ce que disent nos clients</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <!-- Carte de témoignage 1 -->
                    <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-indigo-500">
                        <p class="text-lg text-gray-700 italic mb-6">
                            "PowerUp Nutrition a transformé mes performances ! Leurs conseils sont précis et m'ont aidé
                            à atteindre mes objectifs."
                        </p>
                        <div class="flex items-center justify-center">
                            <img src="https://placehold.co/60x60/6366F1/ffffff?text=JD" alt="Avatar du client"
                                class="w-16 h-16 rounded-full mr-4 object-cover">
                            <div>
                                <p class="font-semibold text-gray-800">Jeanne Dupont</p>
                                <p class="text-sm text-gray-500">Athlète d'endurance</p>
                            </div>
                        </div>
                    </div>
                    <!-- Carte de témoignage 2 -->
                    <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-purple-500">
                        <p class="text-lg text-gray-700 italic mb-6">
                            "Un accompagnement exceptionnel pour ma prise de masse. Les résultats sont là et ma santé
                            est au top !"
                        </p>
                        <div class="flex items-center justify-center">
                            <img src="https://placehold.co/60x60/9333EA/ffffff?text=AS" alt="Avatar du client"
                                class="w-16 h-16 rounded-full mr-4 object-cover">
                            <div>
                                <p class="font-semibold text-gray-800">Antoine Dubois</p>
                                <p class="text-sm text-gray-500">Cultuiste</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section d'appel à l'action finale -->
        <section
            class="py-16 md:py-24 bg-gradient-to-r from-indigo-600 to-purple-700 text-white text-center rounded-xl shadow-md mx-auto my-12 px-6">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold mb-6">Prêt à transformer votre performance ?</h2>
                <p class="text-xl mb-10 max-w-2xl mx-auto opacity-90">
                    Contactez-moi pour un programme personnalisé et libérez votre plein potentiel.
                </p>
                <a href="#contact"
                    class="bg-white text-indigo-700 hover:bg-gray-100 px-10 py-5 rounded-full text-xl font-semibold shadow-lg transition-all duration-300 transform hover:scale-105 inline-block">
                    Contactez-moi dès aujourd'hui
                </a>
            </div>
        </section>

        <!-- Section Contact -->
        <section id="contact" class="py-16 md:py-24 bg-white rounded-xl shadow-md mx-auto my-12 px-6">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-12">Prenez contact</h2>
                <div class="max-w-xl mx-auto">
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="sr-only">Nom</label>
                            <input type="text" id="name" name="name" placeholder="Votre Nom"
                                class="w-full p-4 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 shadow-sm">
                        </div>
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" id="email" name="email" placeholder="Votre Email"
                                class="w-full p-4 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 shadow-sm">
                        </div>
                        <div>
                            <label for="message" class="sr-only">Message</label>
                            <textarea id="message" name="message" rows="6" placeholder="Votre Message"
                                class="w-full p-4 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 shadow-sm"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-indigo-600 text-white px-6 py-4 rounded-md text-lg font-semibold hover:bg-indigo-700 transition-colors duration-300 shadow-lg transform hover:scale-105">
                            Envoyer le message
                        </button>
                    </form>
                    <div class="mt-10 text-gray-600 text-lg">
                        <p>Ou contactez-nous directement :</p>
                        <p class="mt-2">Email: <a href="mailto:info@powerupnutrition.com"
                                class="text-indigo-600 hover:underline">info@powerupnutrition.com</a></p>
                        <p>Téléphone: <a href="tel:+1234567890" class="text-indigo-600 hover:underline">+1 (234)
                                567-890</a></p>
                        <p class="mt-2">WhatsApp: <a href="https://wa.me/1234567890" target="_blank"
                                class="text-indigo-600 hover:underline">Envoyer un message WhatsApp</a></p>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection