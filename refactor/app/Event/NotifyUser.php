<?php

namespace DTApi\Events;

/**
 * Class InviteContactRemoved
 * @package FileInvite\Invite\Events
 */
class InviteContactRemoved extends BaseEvent
{
    /**
     * InviteContactRemoved constructor.
     * @param Invite $invite
     * @param Person $person
     * @param string $method
     */
    public function __construct($users, $job_id, $data, $msg_text, $is_need_delay)
    {
        $this->modelOverride = \FileInvite\Contact\Models\Person::class;
        $this->eventName = "contact removed";
        $this->eventCategory = "invite";
        $this->invite_id = $invite->id;
        $this->method = $method;
        $this->model = $person;
        parent::__construct();
    }
}