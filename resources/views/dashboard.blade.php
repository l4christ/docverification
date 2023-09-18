<x-layout>
    <div class="container">
        <p>Welcome {{ auth()->user()->name }}</p>
        <form action="/logout" method="POST">
        @csrf
        <button class="btn btn-sm btn-secondary">Logout</button>
        </form>
        <div>
            Upload your Docs
        </div>
    </div>
    
</x-layout>
    

