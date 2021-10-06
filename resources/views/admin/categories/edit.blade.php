<x-layout>
    @section('content')
        <x-setting heading="Edit category">
            <form method="POST" action="/admin/categories/{{$category->id}}">
                @csrf
                @method('PATCH')

                <x-form.input name="name" required :value="old('name', $category->name)"/>

                <x-form.button>Save</x-form.button>
            </form>
        </x-setting>
    @endsection
</x-layout>
