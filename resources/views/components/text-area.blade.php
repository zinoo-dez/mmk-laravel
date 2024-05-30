
@props(['value'])
<textarea name="" {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-10 w-full','id' =>"helo"]) !!}>
    {{$value ?? $slot}}
</textarea>

