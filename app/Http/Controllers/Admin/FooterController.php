<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function edit()
    {
        $footer = config('footer_sections');

        $footerModel = Section::where('page', 'global')
            ->where('type', 'footer')
            ->first();

        $content = $footerModel?->content
            ?? $footer['default_content'];

        return view($footer['view'], [
            'footerModel' => $footerModel,
            'content' => $content,
            'footer' => $footer,
        ]);
    }

    public function update(Request $request)
    {
        $footer = config('footer_sections');

        $content = $request->input('content', []);

        Section::updateOrCreate(
            [
                'page' => 'global',
                'type' => 'footer',
            ],
            [
                'name' => $footer['title'],
                'content' => $content,
                'is_active' => true,
            ]
        );

        return redirect()
            ->route('admin.footer.edit')
            ->with(
                'success',
                'Footer updated successfully.'
            );
    }
}
