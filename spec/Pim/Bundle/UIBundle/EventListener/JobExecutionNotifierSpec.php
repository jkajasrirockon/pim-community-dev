<?php

namespace spec\Pim\Bundle\UIBundle\EventListener;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Pim\Bundle\UIBundle\Manager\NotificationManager;
use Pim\Bundle\UserBundle\Context\UserContext;

class JobExecutionNotifierSpec extends ObjectBehavior
{
    function let(NotificationManager $manager, UserContext $context)
    {
        $this->beConstructedWith($manager, $context);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Pim\Bundle\UIBundle\EventListener\JobExecutionNotifier');
    }

    function it_gives_the_subscribed_events()
    {
        $this->getSubscribedEvents()->shouldReturn(
            [
                'akeneo_batch.after_job_execution' => 'afterJobExecution'
            ]
        );
    }


}
