<x-layout>
    @section('content')
        <x-setting heading="Add new category">
            <form method="POST" action="/admin/categories" enctype="multipart/form-data">
                @csrf

                <x-form.input name="name" required />

                <x-form.button>Save</x-form.button>
            </form>
        </x-setting>
    @endsection
</x-layout>
