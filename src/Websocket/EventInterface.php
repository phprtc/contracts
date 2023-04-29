<?php

namespace RTC\Contracts\Websocket;

interface EventInterface
{
    public function __construct(FrameInterface $frame);

    /**
     * Gets message sent from client
     *
     * @return mixed
     */
    public function getMessage(): mixed;

    /**
     * Returns event name sent by client
     *
     * @return string
     */
    public function getEvent(): string;

    /**
     * Returns room name attached to this message
     *
     * @return string|null
     */
    public function getRoom(): ?string;

    /**
     * Get intended receiver
     *
     * @return string
     */
    public function getIntendedReceiver(): string;

    /**
     * Check whether intended receiver is equal to given value
     *
     * @param string $value
     * @return bool
     */
    public function intendedReceiverIs(string $value): bool;

    /**
     * Check whether event is equal to given value
     *
     * @param string $value
     * @return bool
     */
    public function eventIs(string $value): bool;

    /**
     * Returns payload-sent time
     *
     * @return string
     */
    public function getTime(): string;

    /**
     * Returns json-decoded message array
     *
     * @return FrameInterface
     */
    public function getFrame(): FrameInterface;
}