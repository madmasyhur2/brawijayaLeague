@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <form action="/admin/news/form/insert" class="w-full grid grid-cols-2 gap-2" method="post" enctype="multipart/form-data">
            @csrf
            <p>Judul</p>
            <input type="text" id="judul" name="judul" placeholder="Judul" required class="border rounded p-1 w-full">
            <p>Gambar</p>
            <input type="file" id="gambar" name="gambar" accept="image/*" max="2097152" required class="border rounded p-1 w-full" onchange="previewLogo(event)" />
            <p>Isi</p>
            <textarea type="text" id="isi" name="isi" placeholder="Isi" required class="border rounded p-1 w-full"></textarea>
            <input type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10">
        </form>
        <img class="my-4 w-80 mx-auto hidden" id="logo-preview" src="" alt="Logo Preview" />
    </div>
</div>
<script>
    function previewLogo(event) {
        var input = event.target;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var logoPreview = document.getElementById('logo-preview');
                logoPreview.src = e.target.result;
                logoPreview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>