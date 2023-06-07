@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div id="content" class="m-8 ml-[20%] mt-56 text-7xl font-bold text-Text-color text-center">
    </div>
</div>
<script>
    const textElement = document.getElementById('content');
    const text = "Welcome to Page Admin";
    let index = 0;

    function type() {
        textElement.textContent += text.charAt(index);
        index++;
        if (index < text.length) {
            setTimeout(type, 100);
        }
    }
    type();
</script>