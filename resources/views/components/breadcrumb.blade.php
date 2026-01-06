<nav class="flex mb-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 2a1 1 0 00-.707.293l-7 7a1 1 0 001.414 1.414L4 9.414V17a1 1 0 001 1h10a1 1 0 001-1V9.414l1.293 1.293a1 1 0 001.414-1.414l-7-7A1 1 0 0010 2z"></path>
                </svg>
                Dashboard
            </a>
        </li>
        @if(isset($breadcrumbs) && is_array($breadcrumbs))
            @foreach ($breadcrumbs as $breadcrumb)
                @if(isset($breadcrumb['url']) && isset($breadcrumb['label']))
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H8a1 1 0 01-1-1v-4z"></path>
                                <path d="M4 3a1 1 0 011-1h10a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V3z"></path>
                            </svg>
                            <a href="{{ $breadcrumb['url'] }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">{{ $breadcrumb['label'] }}</a>
                        </div>
                    </li>
                @endif
            @endforeach
        @endif
    </ol>
</nav>