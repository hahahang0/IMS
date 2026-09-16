<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function edit(string $section)
    {
        $sections = config('home_sections');

        abort_unless(isset($sections[$section]), 404);

        $sectionData = $sections[$section];

        $sectionModel = Section::where('page', 'home')
            ->where('type', $section)
            ->first();

        $content = $sectionModel?->content
            ?? $sectionData['default_content'];

        /*
        |--------------------------------------------------------------------------
        | Media available to the section editor
        |--------------------------------------------------------------------------
        */

        $media = collect();

        if ($section === 'features') {
            $media = Media::where('type', 'lottie')
                ->where('is_active', true)
                ->latest()
                ->get();
        }

        return view($sectionData['view'], [
            'section' => $section,
            'sectionData' => $sectionData,
            'sectionModel' => $sectionModel,
            'content' => $content,
            'media' => $media,
        ]);
    }

    public function update(Request $request, string $section)
    {
        $sections = config('home_sections');

        abort_unless(isset($sections[$section]), 404);

        $content = $request->input('content', []);

        Section::updateOrCreate(
            [
                'page' => 'home',
                'type' => $section,
            ],
            [
                'name' => $sections[$section]['title'],
                'content' => $content,
                'is_active' => true,
            ]
        );

        return redirect()
            ->route('admin.home.section.edit', $section)
            ->with(
                'success',
                "{$sections[$section]['title']} section updated successfully."
            );
    }
}
