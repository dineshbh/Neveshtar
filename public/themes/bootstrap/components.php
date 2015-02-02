<?php

\Component::register('app', function($title) {
    return \Theme::view('app', compact('title', 'content'));
});