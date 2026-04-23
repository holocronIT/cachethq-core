<?php

namespace Cachet\Events\Schedules;

use Cachet\Concerns\SendsWebhook;
use Cachet\Enums\WebhookEventEnum;
use Cachet\Models\Schedule;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ScheduleCreated
{
    use Dispatchable, InteractsWithSockets, SendsWebhook, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Schedule $schedule)
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }

    public function getWebhookPayload(): array
    {
        return $this->schedule->toArray();
    }

    public function getWebhookEventName(): WebhookEventEnum
    {
        return WebhookEventEnum::schedule_created;
    }
}
