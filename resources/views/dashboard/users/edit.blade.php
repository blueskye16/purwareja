<x-dashboard.layout>
    <h1 class="text-2xl border-b-2 mb-8">Edit User</h1>

    <form action="/dashboard/users/{{ $user->id }}" method="POST" class="max-w-3xl">
        @method('PUT')
        @csrf

        <div class="mb-5">
            <div class="mb-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" autofocus
                    class="@error('name')
                        bg-red-50 border border-red-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500
                    @enderror _primary-input">
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            {{-- email --}}
            <div class="mb-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" id="email" name="email" value="{{ old('email', $user->email) }}"
                    class="@error('email')
                        bg-red-50 border border-red-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500
                    @enderror _primary-input">
                @error('email')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            {{-- password --}}
            <div class="mb-2">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Password
                    <button data-popover-target="popover-description" data-popover-placement="bottom-start"
                        type="button">
                        <i data-feather="info" class="w-4 text-blue-800 font-bold"></i>
                        <span class="sr-only">Show information</span>
                    </button>
                </label>

                <div data-popover id="popover-description" role="tooltip"
                    class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                    <div class="p-3 space-y-2">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                        <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should
                            have a growing trend, as stagnating chart signifies a significant decrease of community
                            activity.</p>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                        <p>For each date bucket, the all-time volume of activities is calculated. This means that
                            activities in period n contain all activities up to period n, plus the activities generated
                            by your community in period.</p>
                        <a href="#"
                            class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read
                            more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg></a>
                    </div>
                    <div data-popper-arrow></div>
                </div>

                <div class="relative">
                    <input type="password" name="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type admin password">
                    <button type="button" class="absolute right-3 top-3"
                        onclick="window.mixin.togglePasswordVisibility()">
                        <i data-feather="eye-off" id="eye-icon" class="text-gray-600"></i>
                    </button>
                </div>
            </div>

            {{-- retype password -> 
            bisa dibikin cuma kalo input passwordnya lg ngetik, animation gitu --}}
            <div class="mt-8 retype-password-container opacity-0 translate-y-[-20px] transition duration-300 hidden">
                <label for="retype-password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                    Password</label>
                <div class="relative">
                    <input type="password" name="retype-password" id="retypePassword"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Retype admin password">
                    <button type="button" class="absolute right-3 top-3"
                        onclick="window.mixin.toggleRetypePasswordVisibility()">
                        <i data-feather="eye-off" id="eye-icon" class="text-gray-600"></i>
                    </button>
                </div>
            </div>

            {{-- role --}}
            <div class="mb-2">
                <p>Choose role for admin</p>
                <div class="flex">
                    <label for="role_1"
                        class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700 w-[50%] m-2 ml-0 cursor-pointer">
                        <input id="role_1" type="radio" value="1" name="is_admin"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{ old('is_admin', $selectedRole) == 1 ? 'checked' : '' }}>
                            {{-- {{ old('is_admin', $selectedRole) == '1' ? 'checked' : '' }} --}}
                        <span class="ml-2">Super Admin</span>
                    </label>
                    <label for="role_0"
                        class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700 w-[50%] m-2 mr-0 cursor-pointer">
                        <input id="role_0" type="radio" value="0" name="is_admin"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{ old('is_admin', $selectedRole) == 0 ? 'checked' : '' }}>
                        <span class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Admin</span>
                    </label>
                </div>
            </div>

        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
        </button>
    </form>

    <script>
        const passwordInput = document.getElementById("password");
        const retypePasswordInput = document.getElementById("retypePassword");
        const retypePasswordContainer = document.querySelector(".retype-password-container");

        passwordInput.addEventListener("change", function() {
            retypePasswordContainer.classList.remove("hidden");
            retypePasswordContainer.classList.add("opacity-100", "translate-y-0");
        });

        passwordInput.addEventListener("blur", function() {
            if (passwordInput.value === "") {
                retypePasswordContainer.classList.remove("opacity-100", "translate-y-0");
                retypePasswordContainer.classList.add("hidden");
                retypePasswordContainer.value = "";
            }
        });

        passwordInput.addEventListener('input', () => {
            if (passwordInput.value === '') {
                retypePasswordInput.value = '';
            }
        });
    </script>
</x-dashboard.layout>
