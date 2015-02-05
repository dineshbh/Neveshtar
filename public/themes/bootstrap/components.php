<?php

\Component::register('admin', function($title) {
    return \Theme::view('admin/angularjs/index', compact('title', 'content'));
});

\Component::register('app', function($title) {
    return \Theme::view('frontend/app', compact('title', 'content'));
});