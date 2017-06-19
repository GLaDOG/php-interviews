## 1. Argument 2 passed to Illuminate\Routing\ControllerDispatcher::methodExcludedByOptions() must be of the type array, string given
file: app/Http/Controllers/TaskController.php
This
<pre><code>
public function __construct()
{
    $this->middleware('auth');
}
</code></pre>
Not
<pre><code>
public function __construct()
{
    $this->middleware = ['auth'];
}
</code></pre>
## 2. Class Task does not exist
file: app/Providers/RouteServiceProvider.php
This
<pre><code>
public function boot(Router $router)
{
    $router->model('task', 'App\Task');
    /**
     * or This
     * use App\Task;
     * $router->model('task', Task::class);
     */
}
</code></pre>
Not
<pre><code>
use App\Task;
public function boot(Router $router)
{
    $router->model('task', 'Task');
}
</code></pre>
## 3. Call to a member function create() on null
file: app/Http/Controllers/TaskController.php
This
<pre><code>
public function store(Request $request)
{
    $request->user()->tasks()->create([
        'name' => $request->name,
    ]);
}
</code></pre>
Not
<pre><code>
public function store(Request $request)
{
    $request->user->tasks()->create([
        'name' => $request->name,
    ]);
}
</code></pre>

