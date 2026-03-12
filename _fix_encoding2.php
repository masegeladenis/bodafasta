<?php
$dir = 'c:/xampp/htdocs/bodafasta/';
$files = array_merge(glob($dir . '*.php'), glob($dir . 'includes/*.php'));

// Double-encoded UTF-8 via Windows-1252: Original bytes E2 80 XX
// were interpreted as Win-1252 chars and re-encoded to UTF-8
// Prefix is always: C3 A2 (=E2 as Win1252 a-circumflex) + E2 82 AC (=80 as Win1252 euro)
$prefix = "\xC3\xA2\xE2\x82\xAC";

// Map from double-encoded suffix bytes to HTML entity replacements
$double_encoded = array(
    // Em dash: original E2 80 94, suffix byte 94 = Win1252 U+201D = E2 80 9D
    "\xE2\x80\x9D" => "&mdash;",
    // En dash: original E2 80 93, suffix byte 93 = Win1252 U+201C = E2 80 9C
    "\xE2\x80\x9C" => "&ndash;",
    // Right single quote: suffix 99 = Win1252 U+2122 (TM) = E2 84 A2
    "\xE2\x84\xA2" => "'",
    // Left single quote: suffix 98 = Win1252 U+02DC (tilde) = CB 9C
    "\xCB\x9C" => "'",
    // Left double quote: suffix 9C = Win1252 U+0153 (oe) = C5 93
    "\xC5\x93" => "&ldquo;",
    // Right double quote: suffix 9D = U+009D control = C2 9D
    "\xC2\x9D" => "&rdquo;",
    // Ellipsis: suffix A6 = U+00A6 = C2 A6
    "\xC2\xA6" => "&hellip;",
    // Bullet: suffix 95 = Win1252 U+2022 = E2 80 A2
    "\xE2\x80\xA2" => "&bull;",
);

// Also handle partially-fixed double-encoded (where our first script
// replaced the suffix but left the prefix)
$partial_fixed = array(
    "&rdquo;" => "&mdash;",   // was em dash
    "&ldquo;" => "&ndash;",   // was en dash
    "'" => "'",                // was right single quote (apostrophe replaced)
);

$totalFixed = 0;

foreach ($files as $file) {
    $bn = basename($file);
    if ($bn === '_fix_encoding2.php') continue; // skip self
    
    $content = file_get_contents($file);
    $fileCount = 0;

    // Fix partially-fixed double-encoded sequences (prefix + entity)
    foreach ($partial_fixed as $suffix => $replacement) {
        $pattern = $prefix . $suffix;
        $count = substr_count($content, $pattern);
        if ($count > 0) {
            $content = str_replace($pattern, $replacement, $content);
            $fileCount += $count;
            echo "  $bn: $count partial double-encoded -> $replacement\n";
        }
    }

    // Fix remaining full double-encoded sequences (prefix + raw bytes)
    foreach ($double_encoded as $suffix => $replacement) {
        $pattern = $prefix . $suffix;
        $count = substr_count($content, $pattern);
        if ($count > 0) {
            $content = str_replace($pattern, $replacement, $content);
            $fileCount += $count;
            echo "  $bn: $count full double-encoded -> $replacement\n";
        }
    }

    // Fix any remaining single-encoded smart chars
    $single = array(
        "\xE2\x80\x99" => "'",
        "\xE2\x80\x98" => "'",
        "\xE2\x80\x9C" => "&ldquo;",
        "\xE2\x80\x9D" => "&rdquo;",
        "\xE2\x80\x94" => "&mdash;",
        "\xE2\x80\x93" => "&ndash;",
        "\xE2\x80\xA6" => "&hellip;",
        "\xE2\x84\xA2" => "&trade;",
    );
    foreach ($single as $bad => $good) {
        $count = substr_count($content, $bad);
        if ($count > 0) {
            $content = str_replace($bad, $good, $content);
            $fileCount += $count;
            echo "  $bn: $count single-encoded -> $good\n";
        }
    }

    // Fix orphaned prefix bytes (C3 A2 E2 82 AC) left alone
    $count = substr_count($content, $prefix);
    if ($count > 0) {
        $content = str_replace($prefix, "", $content);
        $fileCount += $count;
        echo "  $bn: $count orphaned prefix removed\n";
    }

    if ($fileCount > 0) {
        file_put_contents($file, $content);
        echo "$bn: TOTAL $fileCount fixes\n\n";
        $totalFixed += $fileCount;
    }
}

echo "=== Grand total: $totalFixed fixes across all files ===\n";
