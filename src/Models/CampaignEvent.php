<?php

declare(strict_types=1);

namespace Liberu\CRM\Campaigns\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $campaign_id @property string $type @property float $value */
final class CampaignEvent extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_campaign_events';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['value' => 'float', 'payload' => 'array'];
    }
}
