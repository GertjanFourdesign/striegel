@include('sections.section-quote', [
    'quote' => nl2br($content["attributes"]["quote"]) ?? null,
])