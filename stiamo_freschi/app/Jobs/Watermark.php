<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class Watermark implements ShouldQueue
{
    private $announcement_image_id;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);
        if (!$i) {
            return;
        }
        $srcPath = storage_path('app/public/' . $i->path);
        $imageToWatermark = SpatieImage::load($srcPath);

        // Apply watermark to the entire image
        $imageToWatermark->watermark(base_path('resources/img/logo.presto.scontornato.2.png'))
            ->watermarkPosition('top-left')
            ->watermarkFit(Manipulations::FIT_STRETCH)
            ->save($srcPath);

        // Initialize Google Cloud Vision client
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));
        $imageAnnotator = new ImageAnnotatorClient();

        // Perform face detection on the original image
        $image = file_get_contents($srcPath);
        $response = $imageAnnotator->faceDetection($image);
        $faces = $response->getFaceAnnotations();

        // Close the Google Cloud Vision client
        $imageAnnotator->close();
    }



}