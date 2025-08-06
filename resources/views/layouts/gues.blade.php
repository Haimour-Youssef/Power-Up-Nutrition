<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerUp Nutrition - Libérez votre potentiel</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            /* Light gray background */
            color: #334155;
            /* Dark text color */
        }

        /* Custom scrollbar for a cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Custom animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out forwards;
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }
    </style>
            @livewireStyles
</head>

<body class="antialiased">
    <!-- Section d'en-tête -->
    <header class="bg-white shadow-md py-3 px-3 sm:py-4 sm:px-6 md:px-12 fixed w-full z-10 rounded-b-lg">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo/Titre du site -->
            <a href="{{ url('/') }}"
                class="">
                <img src="{{ asset('logo.png') }}" width="120" style="max-width: 120px!important;" alt="PowerUp Nutrition Logo"
                    class="inline-block mr-2 align-middle">
            </a>
            <!-- Navigation Desktop -->
            <nav class="hidden md:block">
                <ul class="flex space-x-2 md:space-x-4 text-xs md:text-sm">
                    <li><a href="{{ url('/#home') }}"
                            class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-300 p-1.5 rounded-md hover:bg-indigo-50">Accueil</a>
                    </li>
                    <li><a href="{{ url('/#importance') }}"
                            class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-300 p-1.5 rounded-md hover:bg-indigo-50">Importance</a>
                    </li>
                    <li><a href="{{ url('/#endurance') }}"
                            class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-300 p-1.5 rounded-md hover:bg-indigo-50">Endurance</a>
                    </li>
                    <li><a href="{{ url('/#poids-cible') }}"
                            class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-300 p-1.5 rounded-md hover:bg-indigo-50">Poids
                            Cible</a></li>
                    <li><a href="{{ url('/#musculation') }}"
                            class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-300 p-1.5 rounded-md hover:bg-indigo-50">Musculation</a>
                    </li>
                    <li><a href="{{ url('/#recettes') }}"
                            class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-300 p-1.5 rounded-md hover:bg-indigo-50">Recettes</a>
                    </li>
                    <li><a href="{{ url('/#supplementation') }}"
                            class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-300 p-1.5 rounded-md hover:bg-indigo-50">Suppléments</a>
                    </li>
                    <li><a href="{{ url('/#guide') }}"
                            class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-300 p-1.5 rounded-md hover:bg-indigo-50">Guide</a>
                    </li>
                    <li><a href="{{ url('/#contact') }}"
                            class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-300 p-1.5 rounded-md hover:bg-indigo-50">Contact</a>
                    </li>
                </ul>
            </nav>
            <!-- Mobile menu button -->
            <button id="mobile-menu-btn"
                class="md:hidden p-2 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
                aria-label="Ouvrir le menu">
                <i class="fa fa-bars text-2xl text-indigo-700"></i>
            </button>
        </div>
        <!-- Mobile Navigation -->
        <nav id="mobile-menu"
            class="md:hidden fixed top-0 left-0 w-full h-full bg-white bg-opacity-95 z-50 hidden transition-all duration-300">
            <div class="flex flex-col items-end p-6">
                <button id="close-mobile-menu"
                    class="mb-8 p-2 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    aria-label="Fermer le menu">
                    <i class="fa fa-times text-2xl text-indigo-700"></i>
                </button>
                <ul class="flex flex-col space-y-6 w-full text-lg font-semibold">
                    <li><a href="{{ url('/#home') }}"
                            class="block text-gray-700 hover:text-indigo-600 py-2 px-4 rounded-md hover:bg-indigo-50">Accueil</a>
                    </li>
                    <li><a href="{{ url('/#importance') }}"
                            class="block text-gray-700 hover:text-indigo-600 py-2 px-4 rounded-md hover:bg-indigo-50">Importance</a>
                    </li>
                    <li><a href="{{ url('/#endurance') }}"
                            class="block text-gray-700 hover:text-indigo-600 py-2 px-4 rounded-md hover:bg-indigo-50">Endurance</a>
                    </li>
                    <li><a href="{{ url('/#poids-cible') }}"
                            class="block text-gray-700 hover:text-indigo-600 py-2 px-4 rounded-md hover:bg-indigo-50">Poids
                            Cible</a></li>
                    <li><a href="{{ url('/#musculation') }}"
                            class="block text-gray-700 hover:text-indigo-600 py-2 px-4 rounded-md hover:bg-indigo-50">Musculation</a>
                    </li>
                    <li><a href="{{ url('/#recettes') }}"
                            class="block text-gray-700 hover:text-indigo-600 py-2 px-4 rounded-md hover:bg-indigo-50">Recettes</a>
                    </li>
                    <li><a href="{{ url('/#supplementation') }}"
                            class="block text-gray-700 hover:text-indigo-600 py-2 px-4 rounded-md hover:bg-indigo-50">Suppléments</a>
                    </li>
                    <li><a href="{{ url('/#guide') }}"
                            class="block text-gray-700 hover:text-indigo-600 py-2 px-4 rounded-md hover:bg-indigo-50">Guide</a>
                    </li>
                    <li><a href="{{ url('/#contact') }}"
                            class="block text-gray-700 hover:text-indigo-600 py-2 px-4 rounded-md hover:bg-indigo-50">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var mobileMenuBtn = document.getElementById('mobile-menu-btn');
                var mobileMenu = document.getElementById('mobile-menu');
                var closeMobileMenu = document.getElementById('close-mobile-menu');
                if (mobileMenuBtn && mobileMenu && closeMobileMenu) {
                    mobileMenuBtn.onclick = function () {
                        mobileMenu.classList.remove('hidden');
                    };
                    closeMobileMenu.onclick = function () {
                        mobileMenu.classList.add('hidden');
                    };
                    // Close menu when a link is clicked
                    mobileMenu.querySelectorAll('a').forEach(function (link) {
                        link.onclick = function () {
                            mobileMenu.classList.add('hidden');
                        };
                    });
                }
            });
        </script>
    </header>

    @yield('content')

    <!-- Section Pied de page -->
    <footer class="bg-gray-800 text-white py-8 px-6 md:px-12 rounded-t-lg shadow-inner">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 PowerUp Nutrition. Tous droits réservés.</p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Facebook</a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Twitter</a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">LinkedIn</a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Instagram</a>
            </div>
        </div>
    </footer>

    <script>
        // Simple JS Carousel
        const slides = document.querySelector('#hero-carousel .carousel-slide');
        const indicators = document.querySelectorAll('.carousel-indicator');
        const total = 3;
        let current = 0;

        function updateCarousel(index) {
            slides.style.transform = `translateX(-${index * 100}%)`;
            indicators.forEach((btn, i) => {
                btn.classList.toggle('bg-indigo-300', i === index);
                btn.classList.toggle('bg-indigo-100', i !== index);
            });
        }

        document.getElementById('carousel-prev').onclick = () => {
            current = (current - 1 + total) % total;
            updateCarousel(current);
        };
        document.getElementById('carousel-next').onclick = () => {
            current = (current + 1) % total;
            updateCarousel(current);
        };
        indicators.forEach(btn => {
            btn.onclick = () => {
                current = Number(btn.dataset.index);
                updateCarousel(current);
            };
        });

        // Optional: Auto-slide every 6s
        setInterval(() => {
            current = (current + 1) % total;
            updateCarousel(current);
        }, 6000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    @livewireScripts
</body>

</html>