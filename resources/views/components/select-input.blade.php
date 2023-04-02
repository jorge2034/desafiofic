@props(['values'])
@php
    array_unshift($values,$placeholder);
@endphp
<select {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!} required>
    @foreach ($values as $key => $item)
    @if ($key == 0)
        <option selected>{{$item}}</option>
    @else
        <option value="{{$item['id']}}">{{$item['name']}}</option>
    @endif
    @endforeach
</select>
