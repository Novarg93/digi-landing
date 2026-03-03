<?php

namespace App\Http\Controllers;

use App\Models\LegalPage;
use Inertia\Inertia;

class LegalPageController extends Controller
{
    public function show(string $code)
    {
        $page = LegalPage::query()
            ->where('code', $code)
            ->where('is_active', true)
            ->firstOrFail();

        return Inertia::render('Legal/Show', [
            'page' => [
                'title' => $page->title,
                'code' => $page->code,
                'content' => $page->content,
                'updated_at' => $page->updated_at?->toISOString(),
            ],
        ]);
    }
}