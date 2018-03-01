$(document).ready(function(){
   status();
      var vinterval = setInterval(function  (){
      status();
   }, 10000);
});
   
   /*var vinterval = setInterval(function  (){
      status();
   }, 5000);*/

function status(){
   $.ajax({
   	method: "POST",
      url:'classes/init.php',
      success: function(data){
         $('tbody').remove();
         var da = JSON.parse(data);
         var cabeca = '<tr><th class="pr"><button onclick="sts()">Status</button></th><th><button onclick="nome()">Nome</button></th><th><button onclick="lojas()">Loja</button></th><th><button onclick="pedido()">Pedido</button></th><th class="pd"><button>Detalhes</button></th></tr>';
         $('table').append(cabeca);
         for(var i = 0; i < data.length; i++){
          var dados = "<tr> <td> <img src='../img/"+da[i].status+"' width='30px'></td><td>"+da[i].nome+"</td><td>"+da[i].loja+"</td></td>"
          +"<td>"+da[i].pedido+"</td> <td> <a href='http://start:8090/materiais/ps-admin/Detalhes?id="+da[i].id+"'>Detalhes</a></td></tr>";

          $('tbody').append(dados);
          
       }
       data = "";
    }
 });

}


function sts(){
   $.ajax({
      method: "POST",
      url:'classes/sts.php',
      success: function(data){
         $('tbody').remove();
         var da = JSON.parse(data);
         var cabeca = '<tr><th class="pr"><button onclick="sts()">Status</button></th><th><button onclick="nome()">Nome</button></th><th><button onclick="lojas()">Loja</button></th><th><button onclick="pedido()">Pedido</button></th><th class="pd"><button>Detalhes</button></th></tr>';
         $('table').append(cabeca);
         for(var i = 0; i < data.length; i++){
          var dados = "<tr> <td> <img src='../img/"+da[i].status+"' width='30px'></td><td>"+da[i].nome+"</td><td>"+da[i].loja+"</td></td>"
          +"<td>"+da[i].pedido+"</td> <td> <a href='http://start:8090/materiais/ps-admin/Detalhes?id="+da[i].id+"'>Detalhes</a></td></tr>";

          $('tbody').append(dados);
          
       }
       data = "";
    }
 });
   
}

function nome(){
   $.ajax({
      method: "POST",
      url:'classes/nome.php',
      success: function(data){
         $('tbody').remove();
         var da = JSON.parse(data);
         var cabeca = '<tr><th class="pr"><button onclick="sts()">Status</button></th><th><button onclick="nome()">Nome</button></th><th><button onclick="lojas()">Loja</button></th><th><button onclick="pedido()">Pedido</button></th><th class="pd"><button>Detalhes</button></th></tr>';
         $('table').append(cabeca);
         for(var i = 0; i < data.length; i++){
          var dados = "<tr> <td> <img src='../img/"+da[i].status+"' width='30px'></td><td>"+da[i].nome+"</td><td>"+da[i].loja+"</td></td>"
          +"<td>"+da[i].pedido+"</td> <td> <a href='http://start:8090/materiais/ps-admin/Detalhes?id="+da[i].id+"'>Detalhes</a></td></tr>";

          $('tbody').append(dados);
         
       }
       data = "";
    }
 });
   
}


function lojas(){
  
   $.ajax({
      method: "POST",
      url:'classes/loja.php',
      success: function(data){
         $('tbody').remove();
         var da = JSON.parse(data);
         var cabeca = '<tr><th class="pr"><button onclick="sts()">Status</button></th><th><button onclick="nome()">Nome</button></th> <th><button onclick="lojas()">Loja</button></th> <th><button onclick="pedido()">Pedido</button></th><th class="pd"><button>Detalhes</button></th></tr>';
         $('table').append(cabeca);
         for(var i = 0; i < data.length; i++){
          var dados = "<tr> <td> <img src='../img/"+da[i].status+"' width='30px'></td><td>"+da[i].nome+"</td><td>"+da[i].loja+"</td></td>"
          +"<td>"+da[i].pedido+"</td> <td> <a href='http://start:8090/materiais/ps-admin/Detalhes?id="+da[i].id+"'>Detalhes</a></td></tr>";

          $('tbody').append(dados);
          
       }
       data = "";
    }
 });
   
}



function pedido(){
   
   $.ajax({
      method: "POST",
      url:'classes/pedido.php',
      success: function(data){
         $('tbody').remove();
         var da = JSON.parse(data);
         var cabeca = '<tr><th class="pr"><button onclick="sts()">Status</button></th><th><button onclick="nome()">Nome</button></th> <th><button onclick="lojas()">Loja</button></th> <th><button onclick="pedido()">Pedido</button></th><th class="pd"><button>Detalhes</button></th></tr>';
         $('table').append(cabeca);
         for(var i = 0; i < data.length; i++){
          var dados = "<tr> <td> <img src='../img/"+da[i].status+"' width='30px'></td><td>"+da[i].nome+"</td><td>"+da[i].loja+"</td></td>"
          +"<td>"+da[i].pedido+"</td> <td> <a href='http://start:8090/materiais/ps-admin/Detalhes?id="+da[i].id+"'>Detalhes</a></td></tr>";

          $('tbody').append(dados);

       }
       data = "";
    }
 });
   
}
