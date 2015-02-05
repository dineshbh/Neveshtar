<?php

// Admin Components

\Component::register('admin', function($title) {
    return \Theme::view('admin.app', compact('title'));
});

\Component::register('adminHeader', function($title) {
    return \Theme::view('admin.partials.header', compact('title'));
});

\Component::register('adminFooter', function($data) {
    return \Theme::view('admin.partials.footer', compact('data'));
});

\Component::register('adminTopbar', function($data) {
    return \Theme::view('admin.partials.topbar', compact('data'));
});

\Component::register('adminSidebar', function($data) {
    return \Theme::view('admin.partials.sidebar', compact('data'));
});

\Component::register('adminQuickbar', function($data) {
    return \Theme::view('admin.partials.quickbar', compact('data'));
});


// Frontend Components

\Component::register('app', function($title) {
    return \Theme::view('frontend.app', compact('title'));
});