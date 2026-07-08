<?php
    /**
     * SEO meta helper — set $seo array per page before including this file.
     * Falls back to global defaults if a key isn't set.
     */
    function e(string $value): string {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    } 
    $defaults = [
        'title' => 'Divaine Tech | IT Services & Technology Solutions', 
        'description' => 'Divaine Tech offers innovative IT solutions, web development, software development and digital transformation services.', 
        'keywords' => 'Divaine Tech, IT services, web development, software solutions', 
        'author' => 'Divaine Tech'
    ]; 
    // Merge page-specific overrides ($seo) with defaults — one line, no repeated ?? chains
    $seo = array_merge($defaults, $seo ?? []);
    ?> 
    <meta name="description" content="<?php echo e($seo['description']); ?>">
    <meta name="keywords" content="<?php echo e($seo['keywords']); ?>">
    <meta name="author" content="<?php echo e($seo['author']); ?>">
    <!-- Page Title -->
    <title><?php echo e($seo['title']); ?></title>