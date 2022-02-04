<x-app>
    <div id="app" class="bg-white py-3 mt-3">
        <div class="flex justify-around">

            <div class="font-bold text-xl">
                Chess Common Mistakes
            </div>

            <div>
                <a class="text-xl font-bold hover:underline"
                   href="https://github.com/DiegoAndriano/ChessCommonMistakes/">
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

        <h2 class="font-bold text-xl">What am I looking at?</h2>
        <p class="my-2 ">A working analyzing tool, to check which mistakes any given lichess user repeats mutiple times. The goal is
            to be aware of the positions you may repeat in any game, and then know that you repeated the same mistakes
            in the same position a determined amount of times and how to get better on those positions going to the
            lichess board and studying the game.</p>

        <h2 class="font-bold text-xl">Recommended use:</h2>

        <ul class="mt-4 mb-12">
            <li>It uses <span class="font-bold">only analyzed</span> games</li>
            <li>Use >50 numbers of games</li>
            <li>Ignore first 4 moves (meaning 2 for white and 2 for black)</li>
            <li>Score lost to consider an error means the score lost from the previous move to the actual move made. If the
                score is +3 after white moves, and black then moves and the score now is +6, then the score lost is 3.</li>
            <li>Minimum times the error is repeated: set this in at least two to get a nice feedback</li>
        </ul>

    </div>

</x-app>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-49888108-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-49888108-13');
</script>
