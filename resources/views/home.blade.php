<x-app>
    <div id="app" class="bg-white py-3">
        <div class="flex justify-around">

            <div class="font-bold text-xl">
                Chess Common Mistakes
            </div>

            <li class="flex">
                <ul class="text-lg px-10 py-4 text-green-500 font-semibold cursor-pointer">
                    Inicio
                </ul>
                <ul class="text-lg px-10 py-4 text-black font-semibold cursor-pointer">
                    Uno
                </ul>
                <ul class="text-lg px-10 py-4 text-black font-semibold cursor-pointer">
                    Otro
                </ul>
                <ul class="text-lg px-10 py-4 text-black font-semibold cursor-pointer">
                    Ese
                </ul>
                <ul class="text-lg px-10 py-4 text-black font-semibold cursor-pointer">
                    Aquél
                </ul>
            </li>

            <p class="text-lg px-8 py-4 text-black-500 border-2 border-green-500 font-semibold cursor-pointer">Contacto</p>

        </div>
    </div>

    <div class="max-w-4xl mx-auto">
        <h2 class="font-bold text-3xl mt-6">Select your account</h2>
        <p class="mb-4">Get your most common errors in the openings given a number of games.</p>

        <chess-component></chess-component>

    </div>

</x-app>
