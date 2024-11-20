<?php

use App\Models\{Question, User};

use function Pest\Laravel\{actingAs, put};

it('shoud be able to publish a questions', function () {

    $user     = User::factory()->create();
    $question = Question::factory()->create(['draft' => true]);

    actingAs($user);

    put(route('question.publish', $question))
    ->assertRedirect();

    $question->refresh();

    expect($question)->draft->toBeFalse();
});
