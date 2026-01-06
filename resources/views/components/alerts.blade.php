@if (session()->has('success'))
    <div class="w-full mb-4">
        <div class="flex items-start space-x-3 p-4 rounded-md shadow-sm bg-green-600 text-white" role="alert" style="background-color:#16a34a;">
            <svg class="w-5 h-5 flex-shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <div class="text-sm font-medium">{{ session('success') }}</div>
        </div>
    </div>
@endif

@if (session()->has('message'))
    <div class="w-full mb-4">
        <div class="flex items-start space-x-3 p-4 rounded-md shadow-sm bg-blue-600 text-white" role="alert" style="background-color:#2563eb;">
            <svg class="w-5 h-5 flex-shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z" />
            </svg>
            <div class="text-sm font-medium">{{ session('message') }}</div>
        </div>
    </div>
@endif

@if (session()->has('error'))
    <div class="w-full mb-4">
        <div class="flex items-start space-x-3 p-4 rounded-md shadow-sm bg-red-600 text-white" role="alert" style="background-color:#dc2626;">
            <svg class="w-5 h-5 flex-shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <div class="text-sm font-medium">{{ session('error') }}</div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="w-full mb-4">
        <div class="p-4 rounded-md shadow-sm bg-red-600 text-white" role="alert" style="background-color:#dc2626;">
            <div class="text-sm font-medium mb-2">Ocorreram erros:</div>
            <ul class="list-disc pl-5 text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif