<?php

pest()->extend(Tests\TestCase::class)->in('Feature');

// Native testing suite sugar: expect($screen)->toSee(...)->toBeAccessible() etc.
Native\Mobile\Testing\PestExpectations::register();
