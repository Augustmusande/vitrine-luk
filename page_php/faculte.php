<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style_tailwind.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Programmes</title>
</head>
<body>   




<!-- Contenu spécifique à la page des facultés -->
<main class="container mx-auto my-8">

<style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
}



.slider-cont{
    height: 300px;
    overflow: hidden;
    margin-right: 2%;
    margin-left: 2%;
    margin-top: -15px;
    /* display:flex; */
    align-items:center;
    justify-content:center;
    /* border: 2px solid black; */
}
.banner{
  /* border: 2px solid red; */
  /* display: flex; */
  width: 100%;
  height: 500px;
  transition: transform 0.8s ease-in-out;
}
.banner img{
  width: 100%;
  height: 700px;
}
</style>
    <!-- img baniere -->
   <div class="slider-cont rounded-lg shadow-md bg-white p-3 rounded-lg relative overflow-hidden h-40">  
            <div id="banner" class="banner mb-4 h-40 object-cover p-">
              <img  src="../asset/1689333041133.jpg" alt="Image 1 class="w-full h-40 object-cover mb-4 rounded-lg">
              <img  src="../asset/1689333083549.jpg" alt="Image 2 class="w-full h-40 mb-4 rounded-lg">
            </div>
        
    </div>


    <!-- Divisions pour chaque faculté -->
    <h2 class="text-3xl font-bold mb-8 text-primary mt-4  text-blue-500"style="text-align:center;">Nos Programmes A L'uniluk</h2>
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        
        <!-- Faculté 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative overflow-hidden">
            <img src="../asset/1689333041133.jpg" alt="Faculté des Sciences" class="w-full h-40 object-cover mb-4 rounded-lg">
            <h3 class="text-xl font-bold mb-2  text-blue-500">Faculté des Sciences</h3>
            <p class="text-gray-700">Description brève de la faculté...</p>
            <div x-data="{ open: false }">
                <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-full focus:outline-none ">
                    Lire plus
                </button>
                
            </div>
        </div>
        <!-- Faculté 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative overflow-hidden">
            <img src="../asset/mission adv.jpg" alt="Faculté des Sciences" class="w-full h-40 object-cover mb-4 rounded-lg">
            <h3 class="text-xl font-bold mb-2  text-blue-500">Faculté des Sciences</h3>
            <p class="text-gray-700">Description brève de la faculté...</p>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-full focus:outline-none">
                    Lire plus
                </button>
                <div x-show="open" @click.away="open = false" class="mt-2">
                    <!-- Contenu complet de la faculté -->
                    <p>Description complète de la faculté des Sciences...</p>
                </div>
            </div>
        </div>
        <!-- Faculté 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative overflow-hidden">
            <img src="../asset/1689333041133.jpg" alt="Faculté des Sciences" class="w-full h-40 object-cover mb-4 rounded-lg">
            <h3 class="text-xl font-bold mb-2 text-blue-500" >Faculté des Sciences</h3>
            <p class="text-gray-700">Description brève de la faculté...</p>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-full focus:outline-none">
                    Lire plus
                </button>
                <div x-show="open" @click.away="open = false" class="mt-2">
                    <!-- Contenu complet de la faculté -->
                    <p>Description complète de la faculté des Sciences...</p>
                </div>
            </div>
        </div>

        <!-- Ajoutez autant de divisions pour chaque faculté que nécessaire -->

    </section>
    <h2 class="text-3xl font-bold mb-10 text-primary  text-blue-500 " style="text-align:center;margin:30px; ">Nos Programmes A L'ISTM</h2>
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        
        <!-- Faculté 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative overflow-hidden">
            <img src="../asset/1689333041133.jpg" alt="Faculté des Sciences" class="w-full h-40 object-cover mb-4 rounded-lg">
            <h3 class="text-xl   text-blue-500 font-bold mb-2">Faculté des Sciences</h3>
            <p class="text-gray-700">Description brève de la faculté...</p>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-full focus:outline-none">
                    Lire plus
                </button>
                <div x-show="open" @click.away="open = false" class="mt-2">
                    <!-- Contenu complet de la faculté -->
                    <p>Description complète de la faculté des Sciences...</p>
                </div>
            </div>
        </div>
        <!-- Faculté 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative overflow-hidden">
            <img src="../asset/1689333041133.jpg" alt="Faculté des Sciences" class="w-full h-40 object-cover mb-4 rounded-lg">
            <h3 class="text-xl  text-blue-500  font-bold mb-2">Faculté des Sciences</h3>
            <p class="text-gray-700">Description brève de la faculté...</p>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-full focus:outline-none">
                    Lire plus
                </button>
                <div x-show="open" @click.away="open = false" class="mt-2">
                    <!-- Contenu complet de la faculté -->
                    <p>Description complète de la faculté des Sciences...</p>
                </div>
            </div>
        </div>
        <!-- Faculté 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative overflow-hidden">
            <img src="../asset/1689333041133.jpg" alt="Faculté des Sciences" class="w-full h-40 object-cover mb-4 rounded-lg">
            <h3 class="text-xl font-bold mb-2  text-blue-500">Faculté des Sciences</h3>
            <p class="text-gray-700">Description brève de la faculté...</p>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-full focus:outline-none">
                    Lire plus
                </button>
                <div x-show="open" @click.away="open = false" class="mt-2">
                    <!-- Contenu complet de la faculté -->
                    <p>Description complète de la faculté des Sciences...</p>
                </div>
            </div>
        </div>

        <!-- Ajoutez autant de divisions pour chaque faculté que nécessaire -->

    </section>
    <h2 class="text-3xl font-bold mb-8 text-primary  text-blue-500"style="text-align:center;margin:30px;">Nos Programmes A L'ISTA</h2>
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        
        <!-- Faculté 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative overflow-hidden">
            <img src="../asset/1689333041133.jpg" alt="Faculté des Sciences" class="w-full h-40 object-cover mb-4 rounded-lg">
            <h3 class="text-xl font-bold mb-2  text-blue-500">Faculté des Sciences</h3>
            <p class="text-gray-700">Description brève de la faculté...</p>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-full focus:outline-none">
                    Lire plus
                </button>
                <div x-show="open" @click.away="open = false" class="mt-2">
                    <!-- Contenu complet de la faculté -->
                    <p>Description complète de la faculté des Sciences...</p>
                </div>
            </div>
        </div>
        <!-- Faculté 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative overflow-hidden">
            <img src="../asset/1689333041133.jpg" alt="Faculté des Sciences" class="w-full h-40 object-cover mb-4 rounded-lg">
            <h3 class="text-xl font-bold mb-2  text-blue-500">Faculté des Sciences</h3>
            <p class="text-gray-700">Description brève de la faculté...</p>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-full focus:outline-none">
                    Lire plus
                </button>
                <div x-show="open" @click.away="open = false" class="mt-2">
                    <!-- Contenu complet de la faculté -->
                    <p>Description complète de la faculté des Sciences...</p>
                </div>
            </div>
        </div>
        <!-- Faculté 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative overflow-hidden">
            <img src="../asset/1689333041133.jpg" alt="Faculté des Sciences" class="w-full h-40 object-cover mb-4 rounded-lg">
            <h3 class="text-xl font-bold mb-2  text-blue-500">Faculté des Sciences</h3>
            <p class="text-gray-700">Description brève de la faculté...</p>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-full focus:outline-none">
                    Lire plus
                </button>
                <div x-show="open" @click.away="open = false" class="mt-2">
                    <!-- Contenu complet de la faculté -->
                    <p>Description complète de la faculté des Sciences...</p>
                </div>
            </div>
        </div>

   

    </section>


</main>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const slider = document.querySelector('.banner');
        let slideIndex = 0;
        function showSlide(index) {
            slider.style.transform = `translateX(-${index * 100}%)`;
        }
        function slideNext() {
            slideIndex++;
            if (slideIndex > slider.children.length - 1) {
                slideIndex = 0;
            }
            showSlide(slideIndex);
        }
        setInterval(slideNext, 10000);
   
  
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>  
</body>
</html>