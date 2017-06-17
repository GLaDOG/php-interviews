## 1. file:TaskController.php
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
## 2. file:RouteServiceProvider.php
This
<pre><code>
public function boot(Router $router)
{
    $router->model('task', Task::class);
}
</code></pre>
Not
<pre><code>
public function boot(Router $router)
{
    $router->model('task', 'Task');
}
</code></pre>

