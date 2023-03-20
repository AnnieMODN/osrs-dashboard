<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')


    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</head>

<body class="antialiased">
    <div class="relative min-h-screen bg-blue-200 bg-center sm:flex sm:items-center sm:justify-center">
        <div class="mx-auto p-4 md:w-3/4 lg:p-8">
            <h1 class="mb-6 flex justify-center text-2xl font-semibold">OSRS Dashboard</h1>

            <div class="my-8 grid gap-4 md:grid-cols-2 md:gap-8 lg:my-16 lg:grid-cols-3 lg:gap-4">
                <div class="rounded-md bg-white p-8 shadow-sm">
                    <p class="mb-2 text-2xl">{{ $player->username }}</p>
                    <p class="w-full text-3xl font-bold">Total Level:
                        {{ $latestStatSnapshot->overall_level }}/<span>2277</span></p>
                </div>
                <div class="flex items-center justify-center rounded-md bg-white p-8 shadow-sm">
                    <form action="/players/{{ $player->username }}/refresh" method="post">
                        @csrf
                        <button type="submit" class="rounded-md bg-green-100 px-4 py-2 text-xl font-semibold">
                            Refresh Stats
                        </button>
                    </form>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 md:gap-8 lg:grid-cols-2 lg:gap-12">

                <x-graphs.total-xp-graph :totalXPGraphData="$totalXPGraphData"></x-graphs.total-xp-graph>

                <x-tables.total-stats-table :groupedStats="$latestStatSnapshot" :player="$player"></x-tables.total-stats-table>

                <x-graphs.total-stat-levels :statLevels="$statLevels"></x-graphs.total-stat-levels>

                <x-tables.total-boss-kills-table :latestMinigameStatSnapshots="$latestMinigameStatSnapshots" :player="$player">
                </x-tables.total-boss-kills-table>

            </div>
        </div>
    </div>
</body>

</html>
