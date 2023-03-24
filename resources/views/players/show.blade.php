<x-layouts.layout>
    <div class="w-full">

        <h2 class="mx-auto max-w-2xl text-center text-3xl font-bold tracking-tight text-white sm:text-4xl">
            Dashboard - {{ $player->username }}
        </h2>

        <div class="my-8 flex justify-center">
            <form action="/players/{{ $player->username }}/refresh" method="post">
                @csrf
                <button type="submit"
                    class="rounded-lg bg-white/5 px-3.5 py-2 text-xl font-semibold text-white shadow-sm ring-1 ring-inset ring-white/10 hover:bg-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6">
                    Refresh Stats </button>
            </form>
        </div>

        <div class="my-8 grid gap-4 md:grid-cols-2 md:gap-8 lg:my-16 lg:grid-cols-3 lg:gap-4">

            <div
                class="rounded-lg bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 lg:p-8">
                <p class="mb-2 text-2xl">Total Level:</p>
                <p class="w-full text-3xl font-bold">
                    {{ $latestStatSnapshot->overall_level }}/<span>2277</span>
                </p>
            </div>

            <div
                class="rounded-lg bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 lg:p-8">
                <p class="mb-2 text-2xl">Overall XP:</p>
                <p class="w-full text-3xl font-bold">
                    {{ $latestStatSnapshot->overall_xp > 0 ? number_format($latestStatSnapshot->overall_xp, 0, '.', ',') : 'N/A' }}
                </p>
            </div>

            <div
                class="rounded-lg bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 lg:p-8">
                <p class="mb-2 text-2xl">Total Rank:</p>
                <p class="w-full text-3xl font-bold">
                    {{ $latestStatSnapshot->overall_rank > 0 ? number_format($latestStatSnapshot->overall_rank, 0, '.', ',') : 'N/A' }}
                </p>
            </div>

        </div>

        <div class="grid grid-cols-1 items-start gap-4 md:gap-8 lg:grid-cols-2 lg:gap-12">

            <x-graphs.total-xp-graph :totalXPGraphData="$totalXPGraphData"></x-graphs.total-xp-graph>

            <x-graphs.total-rank-graph :totalRankGraphData="$totalRankGraphData"></x-graphs.total-rank-graph>

            <div class="space-y-4 md:space-y-8 lg:space-y-12">
                <x-tables.total-stats-table :statSnapshot="$latestStatSnapshot" :player="$player"></x-tables.total-stats-table>

                <x-tables.total-activities-table :latestActivityStatSnapshots="$latestStatSnapshot" :activitySnapshotLast7Days="$statSnapshotLast7Days" :player="$player">
                </x-tables.total-activities-table>
            </div>

            <x-tables.total-boss-kills-table :latestBossStatSnapshots="$latestStatSnapshot" :player="$player">
            </x-tables.total-boss-kills-table>
        </div>
    </div>
</x-layouts.layout>
