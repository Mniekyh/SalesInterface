<h1>This is super duper header</h1>

<ul>
    <li>
        <a href="/" class = "{{ request()->is('/' ? 'active' : '') }}"> Main Page</a>                
    </li>

    <li>
        <a href="/about"  class = "{{ request()->is('about' ? 'active' : '') }}"> About</a>                
    </li>
</ul>