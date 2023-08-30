<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registarasi</title>
</head>

<body>

    <div class="bg-white-100 flex max-h-screen items-center ">

        <div class="relative w-1/2 md:block hidden bg-yellow-100">
            <img src="/assets/img/registrasi_img.png" class="w-full object-cover filter brightness-75 max-h-screen"
                alt="page img">
            <img src="/assets/img/logo.png" class="absolute top-0 left-0 w-24 h-45 m-5" alt="">
        </div>

        <div class="md:w-1/2 px-5 ml-16 mr-16">
            <h2 class="text-5xl font-bold font-Poppins text-[#245953]">Daftar</h2>
            <p class="text-lg  font-semibold mt-4 text-[#399386]">Selamat datang di Food Comparator <br>Buat akun barumu
                disini</p>
            <form class="mt-6" action="#" method="POST">
                <div>
                    <label class="block font-bold text-[#3D3737]">Nama</label>
                    <input type="email" name="" id="" placeholder="Nama"
                        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 text-[#64748B] border focus:border-blue-500 focus:bg-white focus:outline-none"
                        autofocus autocomplete required>
                </div>
                <div>
                    <label class="block font-bold text-[#3D3737]">Email</label>
                    <input type="email" name="" id="" placeholder="e.g doe@gmail.com"
                        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 text-[#64748B] border focus:border-blue-500 focus:bg-white focus:outline-none"
                        autofocus autocomplete required>
                </div>

                <div class="mt-4">
                    <label class="block font-bold text-[#3D3737]">Password</label>
                    <input type="password" name="" id="" placeholder="********" minlength="6"
                        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                      focus:bg-white focus:outline-none"
                        required>

                </div>

                <button type="submit"
                    class="w-full block bg-[#399386] hover:bg-[#4ABBAB] focus:bg-[#4ABBAB] text-white font-bold rounded-lg
                    px-4 py-3 mt-6">Daftar</button>
            </form>

            <div class="mt-3 text-gray-500">
                <p class="text-center text-sm">Sudah punya akun? <a href="#"
                        class="text-black font-bold">Masuk</a> sini</p>
            </div>
        </div>
</body>

</html>
