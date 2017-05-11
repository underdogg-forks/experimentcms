<footer>
    <div class="dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    (column)
                </div>
                <div class="col-lg-6">
                    (column)
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bottom-footer">
                <ul class="list-unstyled bottom-list">
                    <li class="pull-right"><a href="#top">Back to top</a></li>
                    <li class="pull-right"><a href="https://github.com/nWidart/portfolio" target="_blank">Source code on Github</a></li>
                    <li>&copy; {{ date('Y') }} Nicolas Widart</li>
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('homepage') }}">Home</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('page', ['about']) }}">About</a></li>
                    <li class="{{ Request::is('blog*') ? 'active' : '' }}"><a href="#">Blog</a></li>
                    <li class="{{ Request::is('projects') ? 'active' : '' }}"><a href="#">Projects</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
