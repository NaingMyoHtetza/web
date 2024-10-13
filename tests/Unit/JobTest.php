<?php

use App\Models\Job;
use App\Models\Employer;

test('example', function() {
    expect(true)->toBeTrue();
});

it('belongs to an employer', function() {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have many tags', function() {
    $job = Job::factory()->create();
    $job->tag('Fronted');
    expect($job->tags)->toHaveCount(1);
});