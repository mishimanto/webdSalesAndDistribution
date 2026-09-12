<?php

test('the public home route is available', function () {
    $this->get(route('home'))->assertOk();
});
