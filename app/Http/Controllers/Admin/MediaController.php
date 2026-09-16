<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::latest()->get();

        return view('admin.media.index', compact('media'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => [
                'required',
                'file',
                'mimes:json',
                'max:10240',
            ],
            'name' => [
                'nullable',
                'string',
                'max:255',
            ],
        ]);

        $file = $request->file('file');

        $fileName = $file->getClientOriginalName();

        $path = $file->storeAs(
            'media/lottie',
            $fileName,
            'public'
        );

        Media::create([
            'name' => $request->input(
                'name',
                pathinfo($fileName, PATHINFO_FILENAME)
            ),
            'file_name' => $fileName,
            'file_path' => $path,
            'type' => 'lottie',
            'mime_type' => $file->getMimeType(),
            'file_size' => $file->getSize(),
            'is_active' => true,
        ]);

        return back()->with(
            'success',
            'Lottie animation uploaded successfully.'
        );
    }

    public function destroy(Media $media)
    {
        if ($media->file_path) {
            Storage::disk('public')->delete($media->file_path);
        }

        $media->delete();

        return back()->with(
            'success',
            'Media deleted successfully.'
        );
    }
}
