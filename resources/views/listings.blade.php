@include('components.header')

<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-12 mb-12">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="p-4">
                <div class="flex items-center">
                    <p>Delete</p>
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                Id
            </th>
            <th scope="col" class="px-6 py-3">
                Product
            </th>
            <th scope="col" class="px-6 py-3">
                Category
            </th>
            <th scope="col" class="px-6 py-3">
                Price
            </th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($companyListings as $listing)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="w-4 p-4">
                <form action="{{ route('delete-listings', [$listing->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-300 hover:bg-red-400 text-black p-2 rounded-lg font-semibold">Delete</button>
                </form>
            </td>
            <td class="px-6 py-4">
                {{ $listing->id }}
            </td>
            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                {{ $listing->product }}
            </th>
            <td class="px-6 py-4">
                {{ $listing->category }}
            </td>
            <td class="px-6 py-4">
                {{ $listing->price }}
            </td>
        </tr>  
        @endforeach
    </tbody>
</table>
</div>

@include('components.footer')
