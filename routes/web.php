<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController; //tem que usar o namespace 
use App\Http\Controllers\ProdutoController2;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//aula 59 - rota do login
Route::view('/login',  'login.form')->name('login.form'); 
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth'); 

//aula 55 - atualizar carrinho
Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('site.atualizacarrinho'); 

//AULA 54 - delete carrinho 

Route::post('/remover', [CarrinhoController::class, 'removeCarrinho'])->name('site.removecarrinho'); 

//Aula 51 - post do carrinho (adc o carrinho)
Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('site.addcarrinho'); 

//Aula 50 - rota do carrinho, para pegar os dados dele
Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho'); 

//Aula 48 - essa é para filtrar os produtos por categoria
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria'); 


//Aula 45 - essa é para quando abrir o produto, mostrar mais detalhes dele
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details'); 

// Aula 44 - essa rota é para mostrar tudo no index

Route::get('/', [SiteController::class, 'index'])->name('site.index'); 

//Aula 16

Route::resource('produtos', ProdutoController2::class);

// Aula 15

// Route::get('/', [ProdutoController::class, 'index'])->name('produto.index'); //pelo controller é assim

// Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');

// Route::get('/', function () {
//     // return view('welcome');
//     return redirect()->route('admin.cliente');
// });

Route::group([ //basicamente assim fica menos verboso 
    'prefix' => 'admin',
    'as' => 'admin.' //as substitui o name
], function() { 
    Route::get('/dashboard', function() { 
        return "dashboard";
    }); 
    
    Route::get('/users', function() { 
        return "users";  
    });
    
    Route::get('/cliente', function() { 
        return "cliente";
    }); //BASICAMENTE ESCREVE admin. antes do cliente, originalmente seria admin.cliente se não ter a primeira função
});



//COMENTADO NA AULA 13
//ALTERA NO NOME DADO NO METODO NOME
// Route::name('admin.')->group(function() {
//     Route::get('admin/dashboard', function() { 
//         return "dashboard";
//     })->name('dashboard'); 
    
//     Route::get('admin/users', function() { 
//         return "users";
//     })->name('users');
    
//     Route::get('/cliente', function() { 
//         return "cliente";
//     })->name('cliente'); //BASICAMENTE ESCREVE admin. antes do cliente, originalmente seria admin.cliente se não ter a primeira função
// });

//O PREFIX VALE PARA USAR NO ROUTE::GET
// Route::prefix('admin')->group(function() {
//     Route::get('dashboard', function() { //basicamente é como se estivesse escrito admin/dashboard 
//         return "dashboard";
//     }); 
    
//     Route::get('users', function() { 
//         return "users";
//     })->name('admin.users');
    
//     Route::get('cliente', function() { 
//         return "cliente";
//     });
// });

/* TUDO COMENTADO A PARTIR DA AULA 13 PARA MOSTRAR OS GRUPOS DE ROTAS

// Route::get('/empresa', function() { 
//     return view ('site/empresa');    
// });

Route::any('/any', function() { 
    return 'rotas any permite todos os tipos de acesso http (put, delete, get e post)';
});

Route::match(['get', 'post'], '/match', function() { 
    return 'permite apenas acessos definidos, o primeiro parametro diz quais são permitidos, nesse caso get e post';
});

Route::get('/produto/{id}/{cat?}', function($id, $cat = "") { 
    //ponto de interrgação no categoria para poder deixar ele vazio 
    //o cat igual a nada para definiri o valor dele como uma string vazia
    return "o id do produto é: ".$id. "<br>" . "a categoria é: ".$cat;
});

// Route::get('/sobre', function () { 
//     return redirect('/empresa');
// });

Route::redirect('/sobre', '/empresa'); //versão mais curta do código de cima 

Route::view('/empresa', 'site/empresa'); //versão mais curta do código comentado na linha 20-22

Route::get('/news', function() { 
    return view('news');
})->name('noticias');

Route::get('/novidades', function() { 
    return redirect()->route('noticias');
}); //redireciona usando o atributo name 

*/