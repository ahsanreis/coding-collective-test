@extends('layout.admin')

@section('content')
@include('components.header')

<div class="p-4">
    <table class="min-w-full border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="text-left px-4 py-2"><input type="checkbox" id="select-all"></th>
                <th class="text-left px-4 py-2 border-b border-gray-300">Name</th>
                <th class="text-left px-4 py-2 border-b border-gray-300">Email</th>
                <th class="text-left px-4 py-2 border-b border-gray-300">Message</th>
                <th class="text-left px-4 py-2 border-b border-gray-300">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
            <tr>
                <td class="px-4 py-2 border-b border-gray-200"><input type="checkbox" name="select[]" id="{{ $contact->id }}"></td>
                <td class="px-4 py-2 border-b border-gray-200">{{ $contact->name }}</td>
                <td class="px-4 py-2 border-b border-gray-200">{{ $contact->email }}</td>
                <td class="px-4 py-2 border-b border-gray-200"><button class="px-4 py-2 bg-black text-white rounded hover:bg-gray-800" onclick="showModal('{{ $contact->email }}')">Show</button></td>
                <td class="px-4 py-2 border-b border-gray-200">{{ $contact->status }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-4 py-6 text-center text-gray-500">No results</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div id="modal" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden">
    <div class="bg-white rounded shadow p-6 relative max-w-lg w-11/12">
        <button type="button" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 mb-10" onclick="hideModal()">&times;</button>
        <div id="modal-content" class="mt-6 whitespace-pre-wrap break-words">Loading...</div>
    </div>
    
    
</div>

@endsection

@pushOnce('scripts')
<script>
    async function showModal(email) {
        console.log(email);
        
        const modal = document.getElementById('modal');
        const content = document.getElementById('modal-content');
        content.textContent = 'Loading...';
        modal.classList.remove('hidden');

        try {
            const url = `{{ route('admin.panel.message') }}` + `?email=` + email;
            const response = await fetch(url, { headers: { 'Accept': 'application/json' } });
            if (!response.ok) throw new Error('Failed to fetch');
            const data = await response.json();
            content.textContent = data?.message ?? 'No message';
        } catch (e) {
            content.textContent = 'Error loading message';
        }
    }
    function hideModal() {
        document.getElementById('modal').classList.add('hidden');
    }
</script>
@endpushOnce