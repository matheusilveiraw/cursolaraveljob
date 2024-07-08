<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('admin.cliente');
});

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