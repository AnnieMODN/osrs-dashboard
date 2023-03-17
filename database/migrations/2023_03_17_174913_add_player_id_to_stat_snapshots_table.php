<?php

use App\Models\Player;
use App\Models\StatSnapshot;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('stat_snapshots', function (Blueprint $table) {
            $table->foreignId('player_id')->after('id')->nullable()->constrained();
        });

        $player = Player::create([
            'username' => 'lunaarsky'
        ]);

        StatSnapshot::query()->update(['player_id' => $player->id]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stat_snapshots', function (Blueprint $table) {
            $table->dropColumn([
                'player_id'
            ]);
        });
    }
};
