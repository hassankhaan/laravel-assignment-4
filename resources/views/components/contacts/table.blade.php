<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-md overflow-hidden">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr class="bg-white border-b  dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $contact->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $contact->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $contact->phone }} PC
                    </td>
                    <td class="px-6 py-4">
                        {{ $contact->address }}
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="{{ route('contacts.show', $contact->id) }}" class="bg-blue-600 p-2 rounded-md text-white">
                            <x-icons.show/>
                        </a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="bg-green-600 p-2 rounded-md text-white">
                            <x-icons.edit/>
                        </a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-600 p-2 rounded-md text-white"><x-icons.delete/></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>