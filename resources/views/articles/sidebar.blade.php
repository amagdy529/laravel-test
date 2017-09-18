
<div class="sidebar-module">

    <h3>Archives</h3>

    <ol class="list-unstyled">
    
        @foreach ($archives as $stas)

            <li> <a href="/?month={{ $stas['month'] }}&year={{ $stas['year'] }}">
            {{ $stas ['month'] . ' ' . $stas ['year'] }} </a> 
            </li>

        @endforeach    
    
    </ol>

</div>

<div class="sidebar-module">

    <h3>Tags</h3>

    <ol class="list-unstyled">
    
        @foreach ($tags as $tag)

            <li> <a href="articles/tags/{{ $tag }}">
            {{ $tag }} </a> 
            </li>

        @endforeach    
    
    </ol>

</div>
