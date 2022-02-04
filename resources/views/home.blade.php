<x-app>
    <div id="app" class="bg-white py-3 mt-3">
        <div class="flex justify-around">

            <div class="font-bold text-xl">
                Chess Common Mistakes
            </div>

            <div>
                <a class="text-xl font-bold hover:underline" href="https://github.com/DiegoAndriano/ChessCommonMistakes/">
                    Repository
                </a>
            </div>

        </div>
    </div>



    <div class="max-w-4xl mx-auto">
        <div style="padding:10px; border-radius:10px; color:#fff; background-color:#333; text-align:center;">
            <a href="mailto:andrianodna@gmail.com">Made by the Filocode team! | andrianodna@gmail.com</a>
        </div>
        <h2 class="font-bold text-3xl mt-6">Select your account</h2>
        <p class="mb-4">Get your most common errors in the openings given a number of games.</p>

        <chess-component></chess-component>

    </div>

</x-app>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-49888108-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-49888108-13');
</script>
