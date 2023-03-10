<?php

namespace App\Http\Controllers\Agent;

use Croppa;
use FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\StudentEducationPicture;
use App\Models\StudentPassportAndTravelHistoryPicture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PassportAndTravelHistoryDocumentsController extends Controller
{
    public $folder = '/uploads/';

    public function index(Request $request)
    {
        // get all pictures
        $pictures = StudentPassportAndTravelHistoryPicture::where('student_id', Auth::user()->id)->get();
        $pictures->map(function ($picture) {
            // $picture['size'] = Storage::disk('local')->get(public_path($picture['url']));;
            $picture['thumbnailUrl'] = Croppa::url($picture['url'], 80, 80, ['resize']);
            $picture['deleteType'] = 'DELETE';
            $picture['deleteUrl'] = route('passportAndTravelHistoryDocuments.destroy', $picture->id);
            return $picture;
        });

        // show all pictures
        return response()->json(['files' => $pictures]);
    }

    public function store(Request $request)
    {
        $path = public_path($this->folder);
        if (!File::exists($path)) {
            File::makeDirectory($path);
        };

        $validator = new FileUpload\Validator\Simple('2M', ['image/png', 'image/jpg', 'image/jpeg']);

        $pathresolver = new FileUpload\PathResolver\Simple($path);

        // The machine's filesystem
        $filesystem = new FileUpload\FileSystem\Simple();

        // FileUploader itself
        $fileupload = new FileUpload\FileUpload($_FILES['files'], $_SERVER);
        $slugGenerator = new FileUpload\FileNameGenerator\Slug();

        // Adding it all together. Note that you can use multiple validators or none at all
        $fileupload->setPathResolver($pathresolver);
        $fileupload->setFileSystem($filesystem);
        $fileupload->addValidator($validator);
        $fileupload->setFileNameGenerator($slugGenerator);

        // Doing the deed
        list($files, $headers) = $fileupload->processAll();

        // Outputting it, for example like this
        foreach ($headers as $header => $value) {
            header($header . ': ' . $value);
        }

        foreach ($files as $file) {
            //Remember to check if the upload was completed
            if ($file->completed) {

                // set some data
                $filename = $file->getFilename();
                $url = $this->folder . $filename;

                // save data
                $picture = StudentPassportAndTravelHistoryPicture::create([
                    'student_id' => Auth::user()->id,
                    'name' => $filename,
                    'url' => $this->folder . $filename,
                ]);

                // prepare response
                $data[] = [
                    'size' => $file->size,
                    'name' => $filename,
                    'url' => $url,
                    'thumbnailUrl' => Croppa::url($url, 80, 80, ['resize']),
                    'deleteType' => 'DELETE',
                    'deleteUrl' => route('passportAndTravelHistoryDocuments.destroy', $picture->id),
                ];

                // output uploaded file response
                return response()->json(['files' => $data]);
            }
        }
        // errors, no uploaded file
        return response()->json(['files' => $files]);
    }

    public function destroy(Request $picture)
    {
        $id =  explode('/', \Request::url());
        DB::table('student_passport_and_travel_history_pictures')->where('id', $id[4])->delete();
        return response()->json([$picture->url]);
    }
}
