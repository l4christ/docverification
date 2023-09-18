<x-layout>
    
<div class="container">
    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('name')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          @error('email')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          @error('password')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
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

</x-layout>
    

    
