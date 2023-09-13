<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="max-h-screen">
    <section class="bg-gradient-to-b from-green-200 to-green-500 min-h-screen flex items-center justify-center">
        <div class="columns-1">

        </div>
        <div class="bg-red-100 backdrop-filter backdrop-blur-sm bg-opacity-30 border border-gray-100 p-5 flex rounded-2xl shadow-lg max-w-5xl">
            <div class="w-1/2 md:block hidden ">
                <img src="/assets/img/profile_img.png"
                    class="rounded-2xl" alt="page img">
            </div>

            <div class="md:w-1/2 px-5 ml-16 mr-16 flex flex-col items-center justify-center">
                <h2 class="text-5xl mr-auto font-bold font-Poppins text-[#245953]">Profile</h2>
                <form class="mt-6 w-full" action="#" method="POST">
                    <div>
                        <label class="block font-bold text-[#3D3737]">Nama</label>
                        <input type="text" name="" id="" placeholder="nama"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 text-[#64748B] border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required>
                    </div>

                    <div>
                        <label class="block font-bold text-[#3D3737]">Email</label>
                        <input type="email" name="" id="" placeholder="e.g doe@gmail.com"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 text-[#64748B] border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required>
                    </div>

                    <button type="submit"
                        class="w-24 ml-auto block bg-[#399386] hover:bg-[#4ABBAB] focus:bg-[#4ABBAB] text-white font-bold rounded-lg
                        px-4 py-3 mt-6">simpan</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
