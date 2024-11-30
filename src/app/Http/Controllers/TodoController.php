namespace App\Http\Controllers;

use App\Todo;

//use Illuminate\Http\Request;

class TodoController extends Controller
{
    phppublic function index()
    {
       
        $todo = new Todo();
        $todos = $todo->all();
  
        return view('todo.index');
    }
}
