<?php

namespace Finite\Event;

use Finite\State\StateInterface;
use Finite\StateMachine\StateMachine;
use Finite\Transition\TransitionInterface;

/**
 * The event object which is thrown on transitions actions
 *
 * @author Yohan Giarelli <yohan@frequence-web.fr>
 */
class TransitionEvent extends StateMachineEvent
{
    /**
     * @var TransitionInterface
     */
    protected $transition;

    /**
     * @var StateInterface
     */
    protected $initialState;

    /**
     * @param StateInterface      $initialState
     * @param TransitionInterface $transition
     * @param StateMachine        $stateMachine
     */
    public function __construct(StateInterface $initialState, TransitionInterface $transition, StateMachine $stateMachine)
    {
        $this->transition   = $transition;
        $this->initialState = $initialState;

        parent::__construct($stateMachine);
    }

    /**
     * @return TransitionInterface
     */
    public function getTransition()
    {
        return $this->transition;
    }

    /**
     * @return StateInterface
     */
    public function getInitialState()
    {
        return $this->initialState;
    }
}
