@php
    $images = App\Models\Media::where('collection_name', 'images_'. $content["key"])->get();
    foreach($images as $image) :
        $image->url = Storage::url($image->id . '/' . $image->file_name);
    endforeach;
@endphp

@component('sections.section-carousel', [
    'images' => $images,
])
    {!! $content["attributes"]["text"] !!}
@endcomponent