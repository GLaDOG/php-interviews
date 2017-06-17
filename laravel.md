## 1. file TaskController.php
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
