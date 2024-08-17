@if ($href !== '')
    <a href="{{ $href }}" @if($type !== '') type="{{ $type }}" @endif class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-teal-700 sm:w-fit hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ $slot }}</a>
@else
    <button @if($type !== '') type="{{ $type }}" @endif class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-teal-700 sm:w-fit hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ $slot }}</button>
@endif