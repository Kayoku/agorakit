@extends('app')

@section('content')

    @include('groups.tabs')

    <h3>
        {{$file->name}}
    </h3>


    <div>
        <a href="{{ route('groups.files.download', [$group, $file]) }}">
            <img src="{{ route('groups.files.preview', [$group, $file]) }}"/>
        </a>
    </div>

    <div class="mt-4 mb-4">

        {{trans('messages.author')}} : {{$file->user->name}}<br/>
        {{trans('messages.created')}} : {{$file->created_at}}<br/>


        @if ($file->tags->count() > 0)
            {{trans('messages.tags')}} :
            @foreach ($file->tags as $tag)
                <span class="badge tag">{{$tag->name}}</span>
            @endforeach
            <br/>
        @endif

    </div>

    <div>
        @if ($file->isLink())
            <a class="btn btn-primary" href="{{ route('groups.files.download', [$group, $file]) }}" target="_blank">
                {{trans('messages.visit')}})
            </a>
        @else
            <a class="btn btn-primary" href="{{ route('groups.files.download', [$group, $file]) }}">
                {{trans('messages.download')}}
            </a>
        @endif


        @can('update', $file)
            <a class="btn btn-secondary" href="{{ route('groups.files.edit', [$group, $file]) }}">
                <i class="fa fa-pencil-alt"></i>
                {{trans('messages.edit')}}
            </a>
        @endcan

        @can('delete', $file)
            <a class="btn btn-secondary" href="{{ route('groups.files.deleteconfirm', [$group, $file]) }}">
                <i class="fa fa-trash"></i>
                {{trans('messages.delete')}}
            </a>
        @endcan

    </div>


</div>

@endsection
