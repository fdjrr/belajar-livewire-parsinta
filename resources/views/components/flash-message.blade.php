@if (flash()->message)
<div class="alert alert-{{ flash()->class ?? 'success' }} d-flex align-items-center" role="alert">
    @switch(flash()->type)
    @case('success')
    <i class="bi flex-shrink-0 me-2 bi-check-circle-fill"></i>
    @break
    @case('danger')
    <i class="bi flex-shrink-0 me-2 bi-exclamation-circle-fill"></i>
    @break
    @case('warning')
    <i class="bi flex-shrink-0 me-2 bi-exclamation-triangle-fill"></i>
    @break
    @default
    <i class="bi flex-shrink-0 me-2 bi-info-circle-fill"></i>
    @endswitch
    <div>
        {{ flash()->message }}
    </div>
</div>
@endif
