<x-header />
<div class="d-flex container">
    <form action="/reg" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Введите почту</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    @error('email')
            <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Введите логин</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="login">
      </div>
      @error('login')
            <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Введите фамилию</label>
        <input type="text" class="form-control" pattern="[а-яА-ЯЁё-]+\s[а-яА-ЯЁё-]+" id="exampleInputEmail1" name="surname">
      </div>
      @error('surname')
            <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Введите имя</label>
        <input type="text" class="form-control" id="exampleInputEmail1" pattern="[а-яА-ЯЁё-]+\s[а-яА-ЯЁё-]+" name="name">
      </div>
      @error('name')
            <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Введите отчество</label>
        <input type="text" class="form-control" id="exampleInputEmail1" pattern="[а-яА-ЯЁё-]+\s[а-яА-ЯЁё-]+" name="patronymic">
      </div>
      @error('patronymic')
            <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Введите телефон</label>
        <input type="tel" class="form-control" id="exampleInputEmail1" name="telephone">
      </div>
      @error('telephone')
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
