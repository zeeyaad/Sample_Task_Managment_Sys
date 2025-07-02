@props(['highlight' => false
    // False is Defalut Value for Props
])

<div  @class(['highlight'=> $highlight, 'card'])>
    {{$slot}}
    <a {{$attributes}} class="btn">View Details</a>
</div>