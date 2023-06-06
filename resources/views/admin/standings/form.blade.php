@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <form action="/admin/standings/form/insert" class="w-full grid grid-cols-2 gap-2" method="post" enctype="multipart/form-data">
            @csrf
            <p>Logo Tim</p>
            <input type="file" id="logo" name="logo" accept="image/*" max="2097152" required class="border rounded p-1 w-full" onchange="previewLogo(event)" />
            <p>Nama Tim</p>
            <input type="text" id="nama" name="nama" placeholder="Nama Tim" required class="border rounded p-1 w-full">
            <p>Menang</p>
            <input type="number" id="Menang" name="menang" placeholder="Menang" required class="border rounded p-1 w-full">
            <p>Seri</p>
            <input type="number" id="seri" name="seri" placeholder="Seri" required class="border rounded p-1 w-full">
            <p>Kalah</p>
            <input type="number" id="Kalah" name="Kalah" placeholder="Kalah" required class="border rounded p-1 w-full">
            <p>Gol</p>
            <input type="number" id="gol" name="gol" placeholder="Gol" required class="border rounded p-1 w-full">
            <p>Kebobolan</p>
            <input type="number" id="Kebobolan" name="Kebobolan" placeholder="Kebobolan" required class="border rounded p-1 w-full">
            <input type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10">
        </form>
        <img class="my-4 w-32 mx-auto hidden" id="logo-preview" src="" alt="Logo Preview" />
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






