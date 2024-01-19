<x-header />
<h1> Личный кабинет: </h1> 
<div class="card" style="width: 18rem; margin: 20px 40px">
  <div class="card-header">
    Мои данные
  </div>
  {{-- @foreach ($user_info as $item)
       <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$item->login}}</li>
    <li class="list-group-item">{{$item->email}}</li>
    <li class="list-group-item">{{$item->surname}}</li>
    <li class="list-group-item">{{$item->name}}</li>
    <li class="list-group-item">{{$item->patronymic}}</li>
  </ul>
  @endforeach --}}
       <ul class="list-group list-group-flush">
    <li class="list-group-item">Имя: {{ Auth::user()->name }}</li>
    <li class="list-group-item">Фамилия:    {{ Auth::user()->surname }}</li>
    <li class="list-group-item">Отчество:  {{ Auth::user()->patronymic }}</li>
    <li class="list-group-item">почта:  {{ Auth::user()->email }}</li>
    <li class="list-group-item">логин: {{ Auth::user()->login }}</li>
  </ul>
</div> 
 
<h1> Мои заявки: </h1> 
<div class="d-flex" style="gap:20px; margin-left:40px;">
  <a href="{{ route('getApp', ['sort' => 'asc']) }}">Сперва новые заявки</a>
  <a href="{{ route('getApp', ['sort' => 'desc']) }}">Сперва старые заявки</a>
</div>
@foreach ($app as $item)
<div class="card" style="width: 18rem; margin: 20px 40px">
  <div class="card-header">
  Номер машины: {{ $item->auto_number}}
  </div>

       <ul class="list-group list-group-flush">
    <li class="list-group-item">Описание: {{$item->description}}</li>
    <li class="list-group-item">Автор: {{$item->author_app->name}}</li>
    <li class="list-group-item">Статус: {{$item->status_app->status}}</li>

  </ul>
</div>  
@endforeach
{{ $app->withQueryString()->links('pagination::bootstrap-5') }}