<x-layouts.app title="Contact Details">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md bg-gray-100 dark:bg-slate-700 rounded-lg my-10">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Details</h2>
        <div class="my-8">
            <span class="flex">
                <strong class="dark:text-white text-lg mr-3">Name:</strong>
                <p class="dark:text-white text-md">{{ $contact->name }}</p>
            </span>
            <span class="flex">
                <strong class="dark:text-white text-lg mr-3">Email Address:</strong>
                <p class="dark:text-white text-md">{{ $contact->email }}</p>
            </span>
            <span class="flex">
                <strong class="dark:text-white text-lg mr-3">Phone Number:</strong>
                <p class="dark:text-white text-md">{{ $contact->phone }}</p>
            </span>
            <span class="flex">
                <strong class="dark:text-white text-lg mr-3">Address:</strong>
                <p class="dark:text-white text-md">{{ $contact->address }}</p>
            </span>
            <span class="flex">
                <strong class="dark:text-white text-lg mr-3">Created at:</strong>
                <p class="dark:text-white text-md">{{ $contact->created_at->format('Y-m-d H:i') }}</p>
            </span>
        </div>
        <x-button href="{{ route('contacts.index') }}">Back to Contacts</x-button>
    </div>
</x-layouts.app>