@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.10.0/ui/trumbowyg.min.css" />
@endpush


@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.10.0/trumbowyg.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.10.0/plugins/upload/trumbowyg.upload.min.js"></script>



    <script>
    $.trumbowyg.svgPath = '/svg/icons.svg';
    $('.wysiwyg').trumbowyg({
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'em'],
            ['link'],
            ['insertImage'],
            ['unorderedList', 'orderedList'],
            ['removeformat'],
            ['fullscreen']
        ],
        minimalLinks: true
    })


    </script>

@endpush
