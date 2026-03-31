<?php

declare(strict_types=1);

namespace Tests\Feature;

use Filament\Facades\Filament;

describe('LandingPage', function () {
    it('redirects to the employee filament panel', function () {
        $response = $this->get('/');

        $response->assertRedirect(Filament::getPanel('employee')->getUrl());
    });
});
