<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\EventDispatcher\Event;

use Behat\Behat\Tester\Context\ScenarioContext;
use Behat\Gherkin\Node\FeatureNode;
use Behat\Gherkin\Node\ScenarioLikeInterface as Scenario;
use Behat\Gherkin\Node\ScenarioNode;
use Behat\Testwork\EventDispatcher\Event\BeforeTested;

/**
 * Represents an event before scenario is tested.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
final class BeforeScenarioTested extends ScenarioTested implements BeforeTested
{
    /**
     * @var FeatureNode
     */
    private $feature;
    /**
     * @var Scenario
     */
    private $scenario;

    /**
     * Initializes event
     *
     * @param ScenarioContext $context
     */
    public function __construct(ScenarioContext $context)
    {
        parent::__construct($context->getEnvironment());

        $this->feature = $context->getFeature();
        $this->scenario = $context->getScenario();
    }

    /**
     * Returns feature.
     *
     * @return FeatureNode
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Returns scenario node.
     *
     * @return ScenarioNode
     */
    public function getScenario()
    {
        return $this->scenario;
    }
}
