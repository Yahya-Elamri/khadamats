<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Log in</title>
</head>
<body>
    <header class="container mx-auto w-full flex items-center justify-between h-[70px] px-5">
        <a href="/"><img class="w-[196px]" src="assets/khadamats.png" alt=""></a>
        <h1 class="poppins-regular text-[#44baae]"><a href="/signup">Sign up</a></h1>
    </header>
    <div class="container mx-auto w-full flex-col flex justify-center items-center px-5 h-[70vh]">
        <h1 class="text-3xl poppins-medium h-[15vh] text-center flex items-center underline">se connecter ici</h1>
        <Form class="w-[90%] lg:w-[50%] flex flex-col gap-5 justify-between items-start" action="/login" method="POST">
            @csrf
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-medium" for="username">Username Or Email</label>
                <input class="border border-[#d5e0d5] px-6 py-1 rounded-xl" type="text" name="username" id="username" required/>
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-medium" for="password">Mot de Passe</label>
                <input class="border border-[#d5e0d5] px-6 py-1 rounded-xl" type="password" name="password" id="password" required/>
            </div>
            <div class="w-full flex items-start gap-2 py-4">
                <input class="border border-[#d5e0d5] rounded-xl mt-[6px]" type="checkbox" name="conditions" id="conditions"/>
                <label for="conditions" class="poppins-medium">rester connecté</label>
            </div>
            <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-full text-white hover:bg-[#286d66]" type="submit">Se connecter</button>
        </Form>
    </div>
</body>
</html>