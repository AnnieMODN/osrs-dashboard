<x-layouts.layout>
    <div class="w-full">

        <h2 class="mx-auto max-w-2xl text-center text-3xl font-bold tracking-tight text-white sm:text-4xl">
            {{ Str::headline(ucfirst($boss)) }}
        </h2>

        <div class="mt-8 flex justify-center">
            <a class="text-white underline" href="/players/{{ $player->username }}">Back to Profile</a>
        </div>

        <div class="my-8 grid grid-cols-1 items-start gap-4 md:gap-8 lg:my-16 lg:grid-cols-2 lg:gap-12">
            <div
                class="rounded-lg bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 lg:p-8">
                <p class="mb-2 text-2xl">{{ Str::headline(ucfirst($boss)) }} Score</p>
                <div class="flex items-center">
                    <p class="mr-4 text-3xl font-bold">
                        {{ $bossData->getAttribute("{$boss}_score") > 0 ? number_format($bossData->getAttribute("{$boss}_score"), 0, '.', ',') : 'N/A' }}
                    </p>
                </div>
            </div>
            <div
                class="rounded-lg bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 lg:p-8">
                <p class="mb-2 text-2xl">{{ Str::headline(ucfirst($boss)) }} Rank</p>
                <p class="w-full text-3xl font-bold">
                    {{ $bossData->getAttribute("{$boss}_rank") > 0 ? number_format($bossData->getAttribute("{$boss}_rank"), 0, '.', ',') : 'N/A' }}
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 items-start gap-4 md:gap-8 lg:grid-cols-2 lg:gap-12">

            <x-graphs.total-boss-score-graph :boss="$boss" :bossScoreGraphData="$bossScoreGraphData" />

            <x-graphs.total-boss-rank-graph :boss="$boss" :bossRankGraphData="$bossRankGraphData" />

        </div>

    </div>
</x-layouts.layout>
