<?php
function extractAndCleanStyles($inputHtml, $outputCss, $cleanedHtml)
{
    // 1. HTML faylni o‘qish
    $html = file_get_contents($inputHtml);
    if ($html === false) {
        die("❌ HTML faylni o‘qib bo‘lmadi: $inputHtml");
    }

    // 2. Regex bilan barcha <style ...>...</style> qismlarini topish
    $pattern = '/<style\b[^>]*>(.*?)<\/style>/is';
    preg_match_all($pattern, $html, $matches);

    // 3. CSS’larni ajratib olish
    $allCss = "";
    if (!empty($matches[1])) {
        $allCss = implode("\n\n", array_map('trim', $matches[1]));
    }

    // 4. CSS faylga yozish
    if (!empty($allCss)) {
        $writeCss = file_put_contents($outputCss, $allCss);
        if ($writeCss === false) {
            die("❌ CSS faylga yozib bo‘lmadi: $outputCss");
        }
    } else {
        echo "⚠️ Hech qanday CSS topilmadi!\n";
    }

    // 5. HTML dan barcha <style> ... </style> qismlarni olib tashlash
    $cleanedHtmlContent = preg_replace($pattern, '', $html);

    // 6. Tozalangan HTML’ni yangi faylga yozish
    $writeHtml = file_put_contents($cleanedHtml, $cleanedHtmlContent);
    if ($writeHtml === false) {
        die("❌ HTML faylni yozib bo‘lmadi: $cleanedHtml");
    }

    // 7. Natija
    echo "✅ CSS faylga yozildi: $outputCss\n";
    echo "✅ Tozalangan HTML saqlandi: $cleanedHtml\n";
}

// Foydalanish:
extractAndCleanStyles("index.html", "styles.css", "complete.html");