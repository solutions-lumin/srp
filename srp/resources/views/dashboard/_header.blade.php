<div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
    <div>
        <h4 class="mb-1">{{ $title ?? 'Dashboard' }}</h4>
    </div>
    <div class="gap-2 d-flex align-items-center flex-wrap">
        {{-- Date Range Picker --}}
        <div id="reportrange" class="reportrange-picker d-flex align-items-center shadow">
            <i class="ti ti-calendar-due text-dark fs-14 me-1"></i>
            <span class="reportrange-picker-field">
                {{ $dateRange ?? now()->format('d M y') . ' - ' . now()->format('d M y') }}
            </span>
        </div>

        {{-- Refresh Button --}}
        <a href="javascript:void(0);" 
           class="btn btn-icon btn-outline-light shadow" 
           data-bs-toggle="tooltip" data-bs-placement="top" 
           aria-label="Refresh" data-bs-original-title="Refresh">
            <i class="ti ti-refresh"></i>
        </a>

        {{-- Collapse Button --}}
        <a href="javascript:void(0);" 
           class="btn btn-icon btn-outline-light shadow" 
           data-bs-toggle="tooltip" data-bs-placement="top" 
           aria-label="Collapse" data-bs-original-title="Collapse" 
           id="collapse-header">
            <i class="ti ti-transition-top"></i>
        </a>
    </div>
</div>
