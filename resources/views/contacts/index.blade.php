<x-layouts.app title="All Contacts">
    <div class="py-8 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-10">
            <form method="GET" action="{{ route('contacts.index') }}">
                <x-input type="text" name="search" placeholder="Search by name or email" value="{{ request('search') }}"/>
            </form>
        </div>
        <div class="col-span-12 lg:col-span-2">
            <x-button href="{{ route('contacts.create') }}">Create New Contacts</x-button>
        </div>
    </div>
    <x-contacts.table :contacts="$contacts"/>
</x-layouts.app>
