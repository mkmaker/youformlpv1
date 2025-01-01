<x-dialog 
    x-data="{
        show: false, 
        confirm_id: '',
        title: '',
        body: '',
        confirmBtnText: '',
        confirmBtnColor: 'red',
        cancelBtnText: 'Cancel',
    }"
    @keydown.escape.window="show = false"
    @keydown.enter.window="
        setTimeout(() => {show = false;}, 100)
        $dispatch('confirm-close', {
            confirm_id: confirm_id,
            confirm: true
        });
    "
    x-show="show"
    @confirm-show.window="
        show = true;
        confirm_id = $event.detail.confirm_id;
        title = $event.detail.title;
        body = $event.detail.body;
        confirmBtnText = $event.detail.confirm_text ? $event.detail.confirm_text : 'Ok';
        confirmBtnColor = $event.detail.danger ? 'bg-red-600 hover:bg-red-700' : 'bg-blue-600 hover:bg-blue-700';
        cancelBtnText = $event.detail.cancel_text ? $event.detail.cancel_text : 'Cancel';
    "
    style="display: none"
    >
    <x-slot name="title">
        <span x-text="title"></span>
    </x-slot>

    <x-slot name="body">
        <span x-text="body"></span>
    </x-slot>

    <x-slot name="footer">
        <button
            @click="
                $dispatch('confirm-close', {
                    confirm_id: confirm_id,
                    confirm: true
                });
                show = false;
            " 
            type="button" :class="confirmBtnColor" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
            x-text="confirmBtnText"
            >
        </button>
        <button 
            @click="
                $dispatch('confirm-close', {
                    confirm_id: confirm_id,
                    confirm: false
                });
                show = false;
            " 
            type="button" 
            x-text="cancelBtnText" 
            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
        </button>
    </x-slot>
</x-dialog>