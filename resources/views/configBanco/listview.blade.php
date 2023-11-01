<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
            
                <table id="dataTable" class="table table-stripped">
                    <thead>
                    <tr>
                        <th>Alterar</th>
                        <th>Excluir</th>
                        <th>Servidor</th>
                        <th>Banco</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lista as $obj)
                    
                    <input type="hidden" id="i{{$obj->Id}}" value="{{$obj->Id}}">
                    <tr>
                        <td width="1%">
                            <a href="/configBanco.edit.{{$obj->Id}}"><img src="/img/Edit24.png" /></a>
                        </td>
                        <td width="1%">
                            <a href="javascript:deleteConfigBanco('i{{$obj->Id}}');"><img src ="/img/Delete_24.png" /></a>
                        </td>
                        <td>
                            {{$obj->Servidor}}
                        </td>
                        <td>
                            {{$obj->Banco}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @include('pagination')            
        </div>
        <!-- /.card -->
    </div>
</div>

