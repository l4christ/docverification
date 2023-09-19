
    
    <div class="container">
        <form wire:submit.prevent="submit">
            @csrf
            <div class="form-group">
                <label for="name">Full name</label>
                <input type="text" wire:model="name" value="{{ old('name') }}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @error('name')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" wire:model="email" value="{{ old('email') }}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              @error('email')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" wire:model="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              @error('password')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" wire:model="password_confirmation" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
                @error('password_confirmation')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
              </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    
 
        
    
        
    
