<!-- Paso 1: Configuración del Modelo
Laravel utiliza el modelo User por defecto para la autenticación. Dado que en tu base de datos la tabla se llama usuarios_sistema, debemos crear un modelo personalizado que apunte a esta tabla.

Crear el Modelo:

Ejecuta el siguiente comando en la terminal:

bash
Copiar
Editar
php artisan make:model Usuario
Configurar el Modelo:

Abre el archivo app/Models/Usuario.php y configúralo de la siguiente manera:

php
Copiar
Editar
<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios_sistema';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    protected $fillable = [
        'login',
        'contraseña',
    ];

    protected $hidden = [
        'contraseña',
    ];

    public function getAuthPassword()
    {
        return $this->contraseña;
    }
}
Este modelo indica que la tabla usuarios_sistema será utilizada para la autenticación y define el campo contraseña como el utilizado para la autenticación.

🔧 Paso 2: Configuración del Proveedor de Autenticación
Laravel utiliza un proveedor de autenticación para determinar cómo se autentican los usuarios. Debemos configurar Laravel para usar el modelo Usuario en lugar del modelo User por defecto.

Configurar el Proveedor:

Abre el archivo config/auth.php y modifica la sección providers para que apunte a nuestro modelo Usuario:

php
Copiar
Editar
'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\Usuario::class,
    ],
],
🔧 Paso 3: Creación del Controlador de Autenticación
Necesitamos un controlador que maneje el inicio de sesión. Podemos crear uno personalizado o extender el controlador Auth\LoginController de Laravel.
documentacionlaravel.com
+1
isaiismael.github.io
+1

Crear el Controlador:

Ejecuta el siguiente comando en la terminal:

bash
Copiar
Editar
php artisan make:controller Auth/LoginController
Configurar el Controlador:

Abre el archivo app/Http/Controllers/Auth/LoginController.php y configúralo de la siguiente manera:

php
Copiar
Editar
<?php

namespace App\Http\Controllers\Auth;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'contraseña' => 'required',
        ]);

        $usuario = Usuario::where('login', $request->login)->first();

        if ($usuario && $usuario->contraseña == $request->contraseña) {
            Auth::login($usuario);
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'login' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
Este controlador maneja la visualización del formulario de inicio de sesión, la autenticación del usuario y el cierre de sesión.

🔧 Paso 4: Creación de las Rutas
Debemos definir las rutas que manejarán el inicio de sesión y el cierre de sesión.

Definir las Rutas:

Abre el archivo routes/web.php y agrega las siguientes rutas:

php
Copiar
Editar
use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
🔧 Paso 5: Creación de la Vista de Login
Necesitamos una vista que contenga el formulario de inicio de sesión.

Crear la Vista:

Crea un archivo llamado login.blade.php en la carpeta resources/views/auth con el siguiente contenido:

html
Copiar
Editar
<form method="POST" action="{{ url('login') }}">
    @csrf
    <div>
        <label for="login">Login</label>
        <input type="text" name="login" id="login" value="{{ old('login') }}" required>
        @error('login')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" required>
        @error('contraseña')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Iniciar sesión</button>
</form>
✅ Resumen
Modelo: Creamos un modelo Usuario que apunte a la tabla usuarios_sistema y defina el campo contraseña como el utilizado para la autenticación.

Proveedor de Autenticación: Configuramos Laravel para usar el modelo Usuario en lugar del modelo User por defecto.

Controlador: Creamos un controlador LoginController que maneje el inicio de sesión y el cierre de sesión.

Rutas: Definimos las rutas necesarias para el inicio de sesión y el cierre de sesión.

Vista: Creamos una vista login.blade.php que contenga el formulario de inicio de sesión.

Con esta estructura, tendrás un sistema de inicio de sesión funcional en Laravel utilizando la tabla usuarios_sistema de tu base de datos sportzone. -->