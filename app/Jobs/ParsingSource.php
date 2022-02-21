<?php

namespace App\Jobs;

use App\Models\News;
use App\Models\Source;
use Illuminate\Bus\Queueable;
use App\Services\YandexNewsRss;
use App\Services\PrepareParsedNews;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ParsingSource implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The source instance.
     *
     * @var \App\Models\Source
     */
    protected $source; 

    /**
     * Create a new job instance.
     *
     * @param \App\Models\Source $source
     * @return void
     */
    public function __construct(Source $source)
    {
        $this->source = $source;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(YandexNewsRss $rss, PrepareParsedNews $prepare)
    {
        $data = $rss->parse($this->source->url);

        $validated = $prepare->prepare($data['items'])->validated()->toArray();

        News::upsert($validated, [
            'slug',
            'description',
        ]);
    }
}
