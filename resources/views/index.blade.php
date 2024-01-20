<x-header />

<div class="d-flex container">
  @if(session("error"))
  <div id="message" class="message">
    {{session("error")}}
  </div>
  @endif
    <form action="/log" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Введите логин</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="login">
      </div>
      @error('login')
            <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    @error('password')
    <div class="alert alert-danger" role="alert">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
