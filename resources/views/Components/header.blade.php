
<div class="w-full flex items-center justify-end py-4 px-4 border-b">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-black text-white rounded hover:bg-gray-800 transition-colors">Logout</button>
    </form>
</div>
