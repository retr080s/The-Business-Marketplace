@include('components.header')

<div class="m-14">
    <livewire:user-table/>

    <a href="/add-listing">
        <button class="mt-2 p-2 bg-gray-700 hover:bg-gray-600 text-white rounded-md">Add a new listing</button>
    </a>

</div>



@include('components.footer')
