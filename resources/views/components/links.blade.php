@props(["cond"=>"/"])

<a
    class="{{request()->is($cond) ? "bg-gray-900 " : "hover:bg-gray-700" }} text-white rounded-md px-3 py-2 text-sm font-medium"
    aria-current="page"
    {{$attributes}}
    >
    {{$slot}}</a>
