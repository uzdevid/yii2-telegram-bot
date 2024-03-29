<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatAdministratorRights
 *
 * @link https://core.telegram.org/bots/api#chatadministratorrights
 *
 * Represents the rights of an administrator in a chat.
 */
class ChatAdministratorRights extends Type {
    public bool $isAnonymous;
    public bool $canManageChat;
    public bool $canDeleteMessages;
    public bool $canManageVideoChats;
    public bool $canRestrictMembers;
    public bool $canPromoteMembers;
    public bool $canChangeInfo;
    public bool $canInviteUsers;
    public bool $canPostMessages;
    public bool $canEditMessages;
    public bool $canPinMessages;
    public bool $canPostStories;
    public bool $canEditStories;
    public bool $canDeleteStories;
    public bool $canManageTopics;
}