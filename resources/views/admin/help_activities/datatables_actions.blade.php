<div class='btn-group'>
    @can('HelpActivity-view')
    <a href="{{ route('admin.helpActivities.show', $id) }}" class='btn btn-sm btn-primary'>
        {{ __('View') }}
    </a>
    @endcan
    @can('HelpActivity-update')
    <a href="{{ route('admin.helpActivities.edit', $id) }}" class='btn btn-sm btn-info'>
       {{ __('Edit') }}
    </a>
    @endcan
    @can('HelpActivity-delete')
     <a href="javascript:void(0)" data-toggle="tooltip" data-id="{{$id}}" data-original-title="Delete" class="btn btn-sm btn-danger delete">{{ __('Delete') }}</a>
     @endcan
</div>
