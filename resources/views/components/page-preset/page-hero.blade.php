@include('sections.section-hero', [
    'image' => $content["attributes"]["image"],
    'slot' => $content["attributes"]["text"]
])