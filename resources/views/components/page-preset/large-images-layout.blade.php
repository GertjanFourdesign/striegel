@if (isset($content['attributes']['video']))
    @include('sections.section-video', [
        'video' => $content['attributes']['video'],
    ])
@else

    @php
        $images = App\Models\Media::where('collection_name', 'images_'. $content["key"])->get();
        
        foreach($images as $image) :
            $image->url = Storage::url($image->id . '/' . $image->file_name);
        endforeach;
    @endphp

    @include('sections.section-image', [
        'image' => $images,
    ])
@endif