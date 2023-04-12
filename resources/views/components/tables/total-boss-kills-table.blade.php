<div
    class="row-span-2 h-auto w-full rounded-lg bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 lg:p-8">
    <div class="flex flex-col mb-6 text-xl font-bold text-center">
        Boss Kills for {{ $player->username }}
    </div>
    <table class="w-full">
        <tr>
            <th></th>
            <th class="text-left">Boss</th>
            <th class="text-right">Rank</th>
            <th class="text-right">Score</th>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/abyssal-sire"
                    class="underline hover:underline md:no-underline">
                    Abyssal Sire
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->abyssal_sire_rank > 0 ? number_format($latestBossStatSnapshots->abyssal_sire_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->abyssal_sire_score > 0 ? number_format($latestBossStatSnapshots->abyssal_sire_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/alchemical-hydra"
                    class="underline hover:underline md:no-underline">
                    Alchemical Hydra
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->alchemical_hydra_rank > 0 ? number_format($latestBossStatSnapshots->alchemical_hydra_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->alchemical_hydra_score > 0 ? number_format($latestBossStatSnapshots->alchemical_hydra_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/artio"
                    class="underline hover:underline md:no-underline">
                    Artio
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->artio_rank > 0 ? number_format($latestBossStatSnapshots->artio_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->artio_score > 0 ? number_format($latestBossStatSnapshots->artio_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/barrows-chests"
                    class="underline hover:underline md:no-underline">
                    Barrows Chests
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->barrows_chests_rank > 0 ? number_format($latestBossStatSnapshots->barrows_chests_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->barrows_chests_score > 0 ? number_format($latestBossStatSnapshots->barrows_chests_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/bryophyta"
                    class="underline hover:underline md:no-underline">
                    Bryophyta
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->bryophyta_rank > 0 ? number_format($latestBossStatSnapshots->bryophyta_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->bryophyta_score > 0 ? number_format($latestBossStatSnapshots->bryophyta_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/callisto"
                    class="underline hover:underline md:no-underline">
                    Callisto
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->callisto_rank > 0 ? number_format($latestBossStatSnapshots->callisto_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->callisto_score > 0 ? number_format($latestBossStatSnapshots->callisto_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/calvarion"
                    class="underline hover:underline md:no-underline">
                    Cal'varion
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->calvarion_rank > 0 ? number_format($latestBossStatSnapshots->calvarion_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->calvarion_score > 0 ? number_format($latestBossStatSnapshots->calvarion_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/cerberus"
                    class="underline hover:underline md:no-underline">
                    Cerberus
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->cerberus_rank > 0 ? number_format($latestBossStatSnapshots->cerberus_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->cerberus_score > 0 ? number_format($latestBossStatSnapshots->cerberus_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/chambers-of-xeric"
                    class="underline hover:underline md:no-underline">
                    Chambers of Xeric
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->chambers_of_xeric_rank > 0 ? number_format($latestBossStatSnapshots->chambers_of_xeric_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->chambers_of_xeric_score > 0 ? number_format($latestBossStatSnapshots->chambers_of_xeric_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/chambers-of-xeric-challenge-mode"
                    class="underline hover:underline md:no-underline">
                    Chambers of Xeric: Challenge Mode
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->chambers_of_xeric_challenge_mode_rank > 0 ? number_format($latestBossStatSnapshots->chambers_of_xeric_challenge_mode_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->chambers_of_xeric_challenge_mode_score > 0 ? number_format($latestBossStatSnapshots->chambers_of_xeric_challenge_mode_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/chaos-elemental"
                    class="underline hover:underline md:no-underline">
                    Chaos Elemental
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->chaos_elemental_rank > 0 ? number_format($latestBossStatSnapshots->chaos_elemental_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->chaos_elemental_score > 0 ? number_format($latestBossStatSnapshots->chaos_elemental_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/chaos-fanatic"
                    class="underline hover:underline md:no-underline">
                    Chaos Fanatic
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->chaos_fanatic_rank > 0 ? number_format($latestBossStatSnapshots->chaos_fanatic_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->chaos_fanatic_score > 0 ? number_format($latestBossStatSnapshots->chaos_fanatic_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/commander-zilyana"
                    class="underline hover:underline md:no-underline">
                    Commander Zilyana
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->commander_zilyana_rank > 0 ? number_format($latestBossStatSnapshots->commander_zilyana_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->commander_zilyana_score > 0 ? number_format($latestBossStatSnapshots->commander_zilyana_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/corporeal-beast"
                    class="underline hover:underline md:no-underline">
                    Corporeal Beast
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->corporeal_beast_rank > 0 ? number_format($latestBossStatSnapshots->corporeal_beast_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->corporeal_beast_score > 0 ? number_format($latestBossStatSnapshots->corporeal_beast_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/crazy-archaeologist"
                    class="underline hover:underline md:no-underline">
                    Crazy Archaeologist
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->crazy_archaeologist_rank > 0 ? number_format($latestBossStatSnapshots->crazy_archaeologist_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->crazy_archaeologist_score > 0 ? number_format($latestBossStatSnapshots->crazy_archaeologist_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/dagannoth-prime"
                    class="underline hover:underline md:no-underline">
                    Dagannoth Prime
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->dagannoth_prime_rank > 0 ? number_format($latestBossStatSnapshots->dagannoth_prime_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->dagannoth_prime_score > 0 ? number_format($latestBossStatSnapshots->dagannoth_prime_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/dagannoth-rex"
                    class="underline hover:underline md:no-underline">
                    Dagannoth Rex
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->dagannoth_prime_rank > 0 ? number_format($latestBossStatSnapshots->dagannoth_prime_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->dagannoth_prime_score > 0 ? number_format($latestBossStatSnapshots->dagannoth_prime_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/dagannoth-supreme"
                    class="underline hover:underline md:no-underline">
                    Dagannoth Supreme
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->dagannoth_rex_rank > 0 ? number_format($latestBossStatSnapshots->dagannoth_rex_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->dagannoth_rex_score > 0 ? number_format($latestBossStatSnapshots->dagannoth_rex_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/deranged-archaeologist"
                    class="underline hover:underline md:no-underline">
                    Deranged Archaeologist
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->deranged_archaeologist_rank > 0 ? number_format($latestBossStatSnapshots->deranged_archaeologist_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->deranged_archaeologist_score > 0 ? number_format($latestBossStatSnapshots->deranged_archaeologist_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/general-graardor"
                    class="underline hover:underline md:no-underline">
                    General Graardor
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->general_graador_rank > 0 ? number_format($latestBossStatSnapshots->general_graador_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->general_graador_score > 0 ? number_format($latestBossStatSnapshots->general_graador_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/giant-mole"
                    class="underline hover:underline md:no-underline">
                    Giant Mole
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->giant_mole_rank > 0 ? number_format($latestBossStatSnapshots->giant_mole_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->giant_mole_score > 0 ? number_format($latestBossStatSnapshots->giant_mole_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/grotesque-guardians"
                    class="underline hover:underline md:no-underline">
                    Grotesque Guardians
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->grotesque_guardians_rank > 0 ? number_format($latestBossStatSnapshots->grotesque_guardians_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->grotesque_guardians_score > 0 ? number_format($latestBossStatSnapshots->grotesque_guardians_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/hespori"
                    class="underline hover:underline md:no-underline">
                    Hespori
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->hespori_rank > 0 ? number_format($latestBossStatSnapshots->hespori_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->hespori_score > 0 ? number_format($latestBossStatSnapshots->hespori_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/kalphite-queen"
                    class="underline hover:underline md:no-underline">
                    Kalphite Queen
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->kalphite_queen_rank > 0 ? number_format($latestBossStatSnapshots->kalphite_queen_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->kalphite_queen_score > 0 ? number_format($latestBossStatSnapshots->kalphite_queen_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/king-black-dragon"
                    class="underline hover:underline md:no-underline">
                    King Black Dragon
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->king_black_dragon_rank > 0 ? number_format($latestBossStatSnapshots->king_black_dragon_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->king_black_dragon_score > 0 ? number_format($latestBossStatSnapshots->king_black_dragon_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/kraken"
                    class="underline hover:underline md:no-underline">
                    Kraken
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->kraken_rank > 0 ? number_format($latestBossStatSnapshots->kraken_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->kraken_score > 0 ? number_format($latestBossStatSnapshots->kraken_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/kreearra"
                    class="underline hover:underline md:no-underline">
                    Kree'Arra
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->kreearra_rank > 0 ? number_format($latestBossStatSnapshots->kreearra_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->kreearra_score > 0 ? number_format($latestBossStatSnapshots->kreearra_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/kril-tsutsaroth"
                    class="underline hover:underline md:no-underline">
                    K'ril Tsutsaroth
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->krill_tsutsaroth_rank > 0 ? number_format($latestBossStatSnapshots->krill_tsutsaroth_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->krill_tsutsaroth_score > 0 ? number_format($latestBossStatSnapshots->krill_tsutsaroth_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/mimic"
                    class="underline hover:underline md:no-underline">
                    Mimic
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->mimic_rank > 0 ? number_format($latestBossStatSnapshots->mimic_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->mimic_score > 0 ? number_format($latestBossStatSnapshots->mimic_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/nex"
                    class="underline hover:underline md:no-underline">
                    Nex
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->nex_rank > 0 ? number_format($latestBossStatSnapshots->nex_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->nex_score > 0 ? number_format($latestBossStatSnapshots->nex_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/nightmare"
                    class="underline hover:underline md:no-underline">
                    Nightmare
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->nightmare_rank > 0 ? number_format($latestBossStatSnapshots->nightmare_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->nightmare_score > 0 ? number_format($latestBossStatSnapshots->nightmare_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/phosanis-nightmare"
                    class="underline hover:underline md:no-underline">
                    Phosani's Nightmare
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->phosanis_nightmare_rank > 0 ? number_format($latestBossStatSnapshots->phosanis_nightmare_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->phosanis_nightmare_score > 0 ? number_format($latestBossStatSnapshots->phosanis_nightmare_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/obor"
                    class="underline hover:underline md:no-underline">
                    Obor
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->obor_rank > 0 ? number_format($latestBossStatSnapshots->obor_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->obor_score > 0 ? number_format($latestBossStatSnapshots->obor_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/phantom-muspah"
                    class="underline hover:underline md:no-underline">
                    Phantom Muspah
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->phantom_muspah_rank > 0 ? number_format($latestBossStatSnapshots->phantom_muspah_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->phantom_muspah_score > 0 ? number_format($latestBossStatSnapshots->phantom_muspah_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/sarachnis"
                    class="underline hover:underline md:no-underline">
                    Sarachnis
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->sarachnis_rank > 0 ? number_format($latestBossStatSnapshots->sarachnis_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->sarachnis_score > 0 ? number_format($latestBossStatSnapshots->sarachnis_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/scorpia"
                    class="underline hover:underline md:no-underline">
                    Scorpia
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->scorpia_rank > 0 ? number_format($latestBossStatSnapshots->scorpia_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->scorpia_score > 0 ? number_format($latestBossStatSnapshots->scorpia_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/skotizo"
                    class="underline hover:underline md:no-underline">
                    Skotizo
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->skotizo_rank > 0 ? number_format($latestBossStatSnapshots->skotizo_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->skotizo_score > 0 ? number_format($latestBossStatSnapshots->skotizo_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/spindel"
                    class="underline hover:underline md:no-underline">
                    Spindel
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->spindel_rank > 0 ? number_format($latestBossStatSnapshots->spindel_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->spindel_score > 0 ? number_format($latestBossStatSnapshots->spindel_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/tempoross"
                    class="underline hover:underline md:no-underline">
                    Tempoross
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->tempoross_rank > 0 ? number_format($latestBossStatSnapshots->tempoross_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->tempoross_score > 0 ? number_format($latestBossStatSnapshots->tempoross_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/the-gauntlet"
                    class="underline hover:underline md:no-underline">
                    The Gauntlet
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->the_gauntlet_rank > 0 ? number_format($latestBossStatSnapshots->the_gauntlet_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->the_gauntlet_score > 0 ? number_format($latestBossStatSnapshots->the_gauntlet_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/the-corrupted-gauntlet"
                    class="underline hover:underline md:no-underline">
                    The Corrupted Gauntlet
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->the_corrupted_gauntlet_rank > 0 ? number_format($latestBossStatSnapshots->the_corrupted_gauntlet_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->the_corrupted_gauntlet_score > 0 ? number_format($latestBossStatSnapshots->the_corrupted_gauntlet_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/theatre-of-blood"
                    class="underline hover:underline md:no-underline">
                    Theatre of Blood
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->theatre_of_blood_rank > 0 ? number_format($latestBossStatSnapshots->theatre_of_blood_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->theatre_of_blood_score > 0 ? number_format($latestBossStatSnapshots->theatre_of_blood_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/theatre-of-blood-hard-mode"
                    class="underline hover:underline md:no-underline">
                    Theatre of Blood: Hard Mode
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->theatre_of_blood_hard_mode_rank > 0 ? number_format($latestBossStatSnapshots->theatre_of_blood_hard_mode_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->theatre_of_blood_hard_mode_score > 0 ? number_format($latestBossStatSnapshots->theatre_of_blood_hard_mode_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/thermonuclear-smoke-devil"
                    class="underline hover:underline md:no-underline">
                    Thermonuclear Smoke Devil
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->thermonuclear_smoke_devil_rank > 0 ? number_format($latestBossStatSnapshots->thermonuclear_smoke_devil_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->thermonuclear_smoke_devil_score > 0 ? number_format($latestBossStatSnapshots->thermonuclear_smoke_devil_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/tombs-of-amascut"
                    class="underline hover:underline md:no-underline">
                    Tombs of Amascut
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->tombs_of_amascut_rank > 0 ? number_format($latestBossStatSnapshots->tombs_of_amascut_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->tombs_of_amascut_score > 0 ? number_format($latestBossStatSnapshots->tombs_of_amascut_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/tombs-of-amascut-expert-mode"
                    class="underline hover:underline md:no-underline">
                    Tombs of Amascut: Expert Mode
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->tombs_of_amascut_expert_mode_rank > 0 ? number_format($latestBossStatSnapshots->tombs_of_amascut_expert_mode_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->tombs_of_amascut_expert_mode_score > 0 ? number_format($latestBossStatSnapshots->tombs_of_amascut_expert_mode_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/tzkal-zuk"
                    class="underline hover:underline md:no-underline">
                    TzKal-Zuk
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->tzkal_zuk_rank > 0 ? number_format($latestBossStatSnapshots->tzkal_zuk_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->tzkal_zuk_score > 0 ? number_format($latestBossStatSnapshots->tzkal_zuk_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/tztok-jad"
                    class="underline hover:underline md:no-underline">
                    TzTok-Jad
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->tztok_jad_rank > 0 ? number_format($latestBossStatSnapshots->tztok_jad_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->tztok_jad_score > 0 ? number_format($latestBossStatSnapshots->tztok_jad_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/venenatis"
                    class="underline hover:underline md:no-underline">
                    Venenatis
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->venenatis_rank > 0 ? number_format($latestBossStatSnapshots->venenatis_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->venenatis_score > 0 ? number_format($latestBossStatSnapshots->venenatis_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/vetion"
                    class="underline hover:underline md:no-underline">
                    Vet'ion
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->vetion_rank > 0 ? number_format($latestBossStatSnapshots->vetion_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->vetion_score > 0 ? number_format($latestBossStatSnapshots->vetion_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/vorkath"
                    class="underline hover:underline md:no-underline">
                    Vorkath
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->vorkath_rank > 0 ? number_format($latestBossStatSnapshots->vorkath_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->vorkath_score > 0 ? number_format($latestBossStatSnapshots->vorkath_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/wintertodt"
                    class="underline hover:underline md:no-underline">
                    Wintertodt
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->wintertodt_rank > 0 ? number_format($latestBossStatSnapshots->wintertodt_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->wintertodt_score > 0 ? number_format($latestBossStatSnapshots->wintertodt_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/zolcano"
                    class="underline hover:underline md:no-underline">
                    Zalcano
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->zolcano_rank > 0 ? number_format($latestBossStatSnapshots->zolcano_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->zolcano_score > 0 ? number_format($latestBossStatSnapshots->zolcano_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/bosses/zulrah"
                    class="underline hover:underline md:no-underline">
                    Zulrah
                </a>
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->zulrah_rank > 0 ? number_format($latestBossStatSnapshots->zulrah_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestBossStatSnapshots->zulrah_score > 0 ? number_format($latestBossStatSnapshots->zulrah_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
    </table>
</div>
