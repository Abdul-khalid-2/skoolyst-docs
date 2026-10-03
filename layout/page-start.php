<?php
// Shared page chrome: header, documentation sidebar and search modal.
// Set $layoutNoSidebar = true before requiring this to hide the sidebar.
require __DIR__ . '/header.php';
if (empty($layoutNoSidebar)) {
    require __DIR__ . '/sidebar.php';
}
require __DIR__ . '/search.php';
