 <div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                @hasSection ('page-title')
                <h3 class="mb-0">@yield('page-title')</h3>
                @endif

                @isset($breadcrumbs)
                <ol class="breadcrumb">
                    @foreach ($breadcrumbs as $breadcrumb)
                    <li class="breadcrumb-item">
                        @if (array_key_exists('route', $breadcrumb))
                        <a href="{{ $breadcrumb['route'] }}">
                            {{ $breadcrumb['label'] }}
                        </a>
                        @else
                        {{ $breadcrumb['label'] }}
                        @endif
                    </li>
                    @endforeach
                </ol>
                @endisset
            </div>

            <div class="col-sm-6 text-end">
                @yield('page-actions')
            </div>
        </div>
    </div>
</div>