<?php

namespace App\Jobs;

use App\Models\Image;
use App\Models\Announcement;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_ids;

    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_ids)
    {
        $this->announcement_image_ids = $announcement_image_ids;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $total_adult = 0;
        $total_medical = 0;
        $total_spoof = 0;
        $total_violence = 0;
        $total_racy = 0;
        $num_images = count($this->announcement_image_ids);

        foreach ($this->announcement_image_ids as $image_id) {
            $image = Image::find($image_id);

            if ($image) {
                $image_path = storage_path('app/public/' . $image->path);
                $image_contents = file_get_contents($image_path);

                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));
                $imageAnnotator = new ImageAnnotatorClient();
                $response = $imageAnnotator->safeSearchDetection($image_contents);
                $imageAnnotator->close();
                $safe = $response->getSafeSearchAnnotation();

                $total_adult += $safe->getAdult();
                $total_medical += $safe->getMedical();
                $total_spoof += $safe->getSpoof();
                $total_violence += $safe->getViolence();
                $total_racy += $safe->getRacy();
            }
        }

        // Calcola la media delle valutazioni di sicurezza
        $avg_adult = $num_images > 0 ? round($total_adult / $num_images) : 0;
        $avg_medical = $num_images > 0 ? round($total_medical / $num_images) : 0;
        $avg_spoof = $num_images > 0 ? round($total_spoof / $num_images) : 0;
        $avg_violence = $num_images > 0 ? round($total_violence / $num_images) : 0;
        $avg_racy = $num_images > 0 ? round($total_racy / $num_images) : 0;

        // Map media likelihood values to CSS classes
        $avg_likelihoodName = ['text-secondary fas fa-circle', 'text-success fas fa-circle', 'text-success fas fa-circle', 'text-warning fas fa-circle', 'text-warning fas fa-circle', 'text-danger fas fa-circle'];

        // Set the average safety attributes based on the average likelihood values
        $avg_adult_class = $avg_likelihoodName[$avg_adult];
        $avg_medical_class = $avg_likelihoodName[$avg_medical];
        $avg_spoof_class = $avg_likelihoodName[$avg_spoof];
        $avg_violence_class = $avg_likelihoodName[$avg_violence];
        $avg_racy_class = $avg_likelihoodName[$avg_racy];

        // Salva le medie delle valutazioni di sicurezza nel modello Announcement
        $announcement = Announcement::create([
            'avg_adult' => $avg_adult_class,
            'avg_medical' => $avg_medical_class,
            'avg_spoof' => $avg_spoof_class,
            'avg_violence' => $avg_violence_class,
            'avg_racy' => $avg_racy_class,
        ]);
    }
}