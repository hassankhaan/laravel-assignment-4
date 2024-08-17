<x-layouts.app title="Create Contact">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Edit Contact</h2>
        <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
            @csrf
            @method('PUT')
            <div>
                <div class="my-5">
                    <x-label for="name">Your Name</x-label>
                    <x-input type="text" name="name" placeholder="enter your name here" value="{{ $contact->name }}" required></x-input>
                </div>
                <div class="my-5">
                    <x-label for="email">Your Email</x-label>
                    <x-input type="email" name="email" placeholder="enter your email here"  value="{{ $contact->email }}" required></x-input>
                </div>
                <div class="my-5">
                    <x-label for="phone">Your Phone</x-label>
                    <x-input type="phone" name="phone" placeholder="enter your email phone"  value="{{ $contact->phone }}"></x-input>
                </div>
                <div class="my-5">
                    <x-label for="address">Your Address</x-label>
                    <x-textarea name="address" placeholder="enter your address here">{{ $contact->address }}</x-textarea>
                </div>
            </div>
            <x-button>Submit</x-button>
        </form>
    </div>
</x-layouts.app> 