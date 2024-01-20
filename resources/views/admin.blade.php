<x-header />
<h1> Заявки: </h1> 
@foreach ($app as $item)
<div class="card" style="width: 18rem; margin: 20px 40px">
  <div class="card-header">
  Номер машины: {{ $item->auto_number}}
  </div>
       <ul class="list-group list-group-flush">
    <li class="list-group-item">Описание: {{$item->description}}</li>
    <li class="list-group-item">Автор: {{$item->author_app->name}}</li>
    <li class="list-group-item">Статус: {{$item->status_app->status}}</li>
    @if ($item->status == '1')
       <a  href="/aplication/{{ $item->id }}/change_two" class="btn btn-primary">Принять</a>
    
      <a  href="/aplication/{{ $item->id }}/change_three"  class="btn btn-secondary">Отклонить</a> 
    @else
        
    @endif
    
  </ul>
</div>  
@endforeach