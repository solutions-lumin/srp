<div class="{{ $col ?? 'col-lg-4' }} d-flex">
    <div class="card flex-fill">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-2">
            <h5 class="mb-0 fs-16 fw-bold">{{ $title ?? 'Transactions' }}</h5>
            @if($actionUrl ?? false)
                <a href="{{ $actionUrl }}" class="btn btn-primary btn-xs">
                    {{ $actionLabel ?? 'View All' }}
                </a>
            @endif
        </div>

        <div class="card-body pb-2">
            @php
                $items = [
                    [
                        'icon' => asset('images/icons/paypal.png'),
                        'title' => 'Payment from John Doe',
                        'subtitle' => 'Today, 10:00 AM',
                        'rightTitle' => '$250',
                        'rightSubtitle' => 'Completed',
                        'link' => '#',
                    ],
                    [
                        'icon' => asset('images/icons/bank.png'),
                        'title' => 'Refund to Alice',
                        'subtitle' => 'Yesterday, 3:15 PM',
                        'rightTitle' => '-$75',
                        'rightSubtitle' => 'Refunded',
                        'link' => '#',
                    ],
                    [
                        'icon' => asset('images/icons/card.png'),
                        'title' => 'Stripe Payment',
                        'subtitle' => 'Aug 20, 2025',
                        'rightTitle' => '$1,200',
                        'rightSubtitle' => 'Processing',
                        'link' => '#',
                    ],
                ];
            @endphp

            @forelse($items as $item)
                <div class="d-sm-flex justify-content-between flex-wrap {{ !$loop->last ? 'mb-4' : 'mb-0' }}">
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0);" 
                           class="avatar avatar-md border rounded-circle flex-shrink-0">
                            <img src="{{ $item['icon'] }}" class="img-fluid w-auto h-auto" alt="img">
                        </a>
                        <div class="ms-2 flex-fill">
                            <h6 class="fw-medium text-truncate mb-1 fs-14">
                                <a href="{{ $item['link'] ?? 'javascript:void(0);' }}">{{ $item['title'] }}</a>
                            </h6>
                            <p class="fs-13 mb-0">{{ $item['subtitle'] ?? '' }}</p>
                        </div>
                    </div>
                    <div class="text-sm-end mb-0">
                        @isset($item['rightTitle'])
                            <h6 class="fw-medium text-truncate mb-1 fs-14">{!! $item['rightTitle'] !!}</h6>
                        @endisset
                        @isset($item['rightSubtitle'])
                            <p class="fs-13 mb-0">{{ $item['rightSubtitle'] }}</p>
                        @endisset
                    </div>
                </div>
            @empty
                <p class="text-center text-muted mb-0">No records found.</p>
            @endforelse
        </div>
    </div>
</div>
