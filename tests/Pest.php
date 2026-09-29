<?php

use Native\Mobile\Testing\PestExpectations;
use Tests\TestCase;

pest()->extend(TestCase::class)->in('Feature');

// Native testing suite sugar: expect($screen)->toSee(...)->toBeAccessible() etc.
PestExpectations::register();
