<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()      /* metodo que tiene como unica funcion apuntar a la pagina de logueo */
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()      /* metodo que tiene como unica funcion apuntar a la pagina de registro */
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)      /* metodo que valida el acceso al proyecto */
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');      /* valida correo y clave */
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')            /* redirige a la pagina 'dashboard' */
                        ->withSuccess('Seleccione unas de las opciones del menu');
        }
        /* si no son correctos los datos redirige nuevamente a login */
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)      /* metodo que registra los datos del usuario */
    {  
        $request->validate([                                /* validacion de los datos */
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);                     /* se llama al metodo para registrar los datos */
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()               /* metodo que tiene como funcion apuntar a la pagina de dashboard */
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)      /* metodo que registra el usuario en BD */
    {
      return User::create([                  /* la tabla se llama User */
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {              /* metodo para salir del proyecto */
        //Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}