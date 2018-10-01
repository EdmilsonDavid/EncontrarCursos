<div class="row">
   <div class="col-md-12">
     <h1>Crud com laravel, registar estudante</h1>
   </div>
</div>


<div class="row">
      <div class="table table-responsive">
      <table class="table table-bordered"  id="table"></table>
           <tr>
             <th width="150px">No</th>
             <th>Nome</th>
             <th>Morada</th>
             <th>create at</th>
             <th class="text-center" width="150px">
             <a href="#" class="create-model btn btn-success btn-sm">
                <i class="glyphicon glyphicon-plus"></i>
             </a>
             </th>
           </tr>
            {{csrf_field()}}
            <?php $no=1;?>
           @foreach($estudante as $key ->$value)
             <tr>
             <tr class="estudante{{$value->id}}">
               <td>{{$no++}}</td>
               <td>{{$value->nome}}</td>
               <td>{{$value->morada}}</td>
               <td>{{$value->email}}</td>

               <td>
               <a href="#" class="show-modal btn btn-info-sm" data-id="{{$value->id}}" data-nome="{{$value->nome}}"  data-email="{{$value->email}}"></a>
               </td>
             </tr>

             </tr>

           @endforeach
      </div>
</div>
