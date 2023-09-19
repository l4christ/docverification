<x-layout>
    <div class="container">
        <p>Welcome {{ auth()->user()->name }}</p>
        <form action="/logout" method="POST">
        @csrf
        <button class="btn btn-sm btn-secondary">Logout</button>
        </form>
        <div>
            Upload your Docs
            <hr>
            @if (session()->has('success'))

            <p class="alert alert-success text-center">
                {{ session('success') }}
            </p>
            
        @endif
            <Form action="/manage-avatar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="file" name="receipt" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    
                  </div>
                  @error('receipt')
                        <p class="alert small alert-danger shadow-sm">{{ $message }}</p> 
                    @enderror
                  <button class="bth btn-primary">Save</button>
            </Form>

            
        </div>
        <div>
            @php
                $serialNumber = 1; // Initialize the serial number to 1
            @endphp
            <p>Uploaded Docs</p>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($docs as $doc)
                        
                  <tr>
                    <th scope="row">{{ $serialNumber }}</th>
                    <td><img src="{{ asset('storage/' . $doc->path) }}" alt=""></td>
                    <td>{{ $doc->status }}</td>
                    <td>@mdo</td>
                  </tr>

                  @php
                  $serialNumber++; // Increment the serial number for the next record
                    @endphp
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
    
</x-layout>
    

