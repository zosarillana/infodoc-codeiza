<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="flex-grow flex">
            <div class="flex-grow card bg-base-200 rounded-box place-items-center place-content-center pb-20">
                <div>
                    <div class="flex pb-5 place-items-center">
                        <div class="w-[170px] pr-1">
                            <img src="{{ asset('images/l1.png') }}" alt="Example Image" class="w-full h-auto">
                        </div>
                        <div class="w-[170px] pl-1">
                            <img src="{{ asset('images/l2.png') }}" alt="Example Image" class="w-full h-auto">
                        </div>
                    </div>
                    <h1 class="uppercase font-semibold text-[30px] text-gray-100 text-center">infodoc system</h1>
                </div>


            </div>

            <section class="flex-grow card bg-base-300 rounded-box place-items-center">
                <div class="w-full h-full flex flex-col justify-center items-center">
                    <div class="w-full max-w-md">

                        <div
                            class=" bg-gray-50 rounded-md shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                                <h1
                                    class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                    Create an Account
                                </h1>
                                <form class="space-y-4 md:space-y-6" action="#">
                                    <div>
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                            Email</label>
                                        <input type="email" name="email" id="email"
                                            class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="name@company.com" required="">
                                    </div>
                                    <div>
                                        <label for="password"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                        <input type="password" name="password" id="password" placeholder="••••••••"
                                            class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required="">
                                    </div>
                                    <div>
                                        <label for="confirm-password"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                            Password</label>
                                        <input type="password" name="confirm-password" id="confirm-password"
                                            placeholder="••••••••"
                                            class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required="">
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="terms" aria-describedby="terms" type="checkbox"
                                                class="w-4 h-4 border border-gray-300 rounded bg-white focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                                required="">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I
                                                accept the <a
                                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                                                    href="#">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create
                                        an Account</button>
                                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                        Already have an account? <a href="#"
                                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                                            Here</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
    </div>
</body>

</html>