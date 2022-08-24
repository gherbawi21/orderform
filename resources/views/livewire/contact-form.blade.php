<div>

    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto"
                     src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="Workflow">
                <h2 class="mt-6 text-center text-3xl tracking-tight font-bold text-gray-900">Make an Order</h2>
            </div>
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" wire:model='name' type="text" autocomplete="name" required
                               class="mb-3 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Name">
                    </div>

                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" wire:model='email' type="email" autocomplete="email" required
                               class="mb-3 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Email address">
                    </div>

                    <div>
                        <label for="phone" class="sr-only">Phone</label>
                        <input id="phone" wire:model='phone' type="text" autocomplete="phone" required
                               class="mt-3 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Phone Number">
                    </div>

                </div>

                <div>
                    <button wire:click='store'
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Order
                    </button>
                </div>
        </div>
    </div>
</div>
