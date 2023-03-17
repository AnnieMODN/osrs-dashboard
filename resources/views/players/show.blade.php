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
        <div class="//max-w-7xl mx-auto w-3/4 p-6 lg:p-8">
            <div class="flex justify-center">
                <p>OSRS Dashboard</p>
            </div>

            <div class="mt-16 grid grid-cols-3">
                <div class="rounded-md bg-white p-8 shadow-sm">
                    <p class="text-2xl">{{ $player->username }}</p>
                    <p class="w-full text-3xl font-bold">Total Level:
                        {{ $latestStatSnapshot->overall_level }}/<span>2277</span></p>
                </div>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-12 md:grid-cols-2">

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
