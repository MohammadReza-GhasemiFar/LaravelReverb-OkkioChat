<div class="w-full h-svh grid lg:grid-cols-2 relative p-4 dark:bg-neutral-950">
    <section class="flex flex-col items-center justify-center gap-8">
        <header class="flex flex-col items-center justify-start gap-2 relative">
            <p class="absolute text-secondary-100 dark:text-secondary-900/80 font-black text-6xl -top-5">
                OKKIO CHAT
            </p>

            <h1 class="font-bold text-secondary-600 dark:text-secondary-300 text-lg z-10">
                اوکیو - لذت گفت‌وگوی ناشناس
            </h1>
            <p class="text-sm text-secondary-600 dark:text-secondary-400">
                جهت حفظ حریم خصوصی؛ شما به عنوان یک کاربر ناشناس وارد خواهید شد
            </p>
        </header>

        <main class="w-full max-w-sm">
            <form wire:submit.prevent="submit" class="flex flex-col gap-4 w-full">
                <div class="flex flex-col gap-2 w-full">
                    <div class="w-full flex items-center justify-between">
                        <label for="input-okkio-name" class="w-full text-secondary-700 dark:text-secondary-300">
                            نام نمایشی
                            <span class="text-rose-500">*</span>
                        </label>

                        <div x-data="{ show: false }" @mouseEnter="show = true" @mouseLeave="show = false" class="cursor-pointer relative flex items-center justify-center">
                            <svg
                                class="w-4 h-4 hover:text-primary-600 transition-all duration-500"
                                :class="show ? 'text-primary-600' : 'text-secondary-400'"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                            </svg>
                            <div x-cloak x-show="show" x-transition class="absolute -top-20 text-sm w-64 px-4 text-justify text-white max-w-sm bg-red-500 rounded-md py-2 z-20">
                                از اشتراک گذاری اطلاعات حساس مانند شماره موبایل در این قسمت جدا خودداری نمایید.
                            </div>
                        </div>
                    </div>
                    <input
                        wire:model="display_name"
                        id="input-okkio-name"
                        type="text"
                        placeholder="برنامه نویس بی حوصله"
                        class="w-full rounded px-4 py-2 outline-none ring-1 ring-secondary-100 focus:ring-primary-500
                        transition-all duration-500 dark:bg-secondary-900 dark:ring-secondary-800
                        dark:placeholder:text-secondary-500 dark:text-secondary-300"
                    >
                    @error('display_name')
                    <p class="text-sm text-rose-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-primary-600 w-full px-4 py-2 rounded-md text-white
                    hover:bg-primary-500 transition-all duration-500 dark:bg-primary-700 dark:hover:bg-primary-600">
                        ورود به تالار گفت‌وگو
                    </button>
                </div>
            </form>
        </main>

        <footer>
            <p class="text-sm text-secondary-500 dark:text-secondary-400">
                با
                <span class="animate-pulse">
                    ❤️
                </span>
                در 1402/12/29
            </p>
        </footer>

    </section>

    <aside class="hidden lg:flex overflow-hidden relative items-center justify-center">
        <div class="w-full h-full overflow-hidden rounded-lg">
            <img
                class="w-full h-full object-center object-cover"
                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/covers/okkio.jpg') }}"
                alt=""
            >
        </div>
        <div class="absolute inset-0 rounded-md bg-black bg-opacity-50"></div>
    </aside>
</div>
