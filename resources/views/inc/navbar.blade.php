


<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        <div class="container">
            
            <ul class="navbar-nav mr-auto ">
                
                <li nav-item">
                    <a class="nav-link" href="/">Acme <span class="sr-only">(current)</span></a>
                </li>

                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="{{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="/about">About</a>
                </li>

                <li class="{{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                
                
            </ul>
        </div>
        
        
    </div>
</nav>