@extends('app')

@section('content')

    @include('groups.tabs')

    <div class="tab_content">

        <h1>{{trans('membership.your_preferences_for')}} "{{$group->name}}"</h1>

        <div class="help">
            <h4>{{trans('membership.settings_how_does_it_works')}}</h4>
            <p>
                {{trans('membership.settings_intro')}}
            </p>
        </div>


        {!! Form::open(array('action' => ['MembershipController@update', $group])) !!}


        @include('membership.form')

        <div class="form-group">
            {!! Form::submit(trans('messages.save'), ['class' => 'btn btn-primary form-control']) !!}
        </div>


        {!! Form::close() !!}




        <p>{{trans('membership.if_you_want_to_leave_this_group')}}, <a href="{{action('MembershipController@destroyConfirm', $group)}}">{{trans('membership.click_here')}}</a></p>


    </div>

@endsection
