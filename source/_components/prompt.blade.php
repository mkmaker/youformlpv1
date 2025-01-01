{{-- inputType can be "text" or "textarea" --}}
<x-dialog 
    x-data="{
        show: false, 
        shiftPressed: false,
        prompt_id: '',
        title: '',
        promptText: '',
        inputType: '',
        inputSubtype: 'text',
        promptBtnText: '',
        promptBtnColor: 'gray',
        placeholder: '',
    }"
    @keydown.escape.window="show = false"
    @keydown.enter.window="
        if(this.inputType == 'text' || shiftPressed) {
            setTimeout(() => {show = false;}, 100)
            $dispatch('prompt-close', {
                prompt_id: prompt_id,
                prompt_text: promptText
            });
        }
    "
    @keydown.shift="shiftPressed = true"
    @keyup.shift="shiftPressed = false"
    x-show="show"  
    @prompt-show.window="
        show = true;
        prompt_id = $event.detail.prompt_id;
        title = $event.detail.title;
        promptText = $event.detail.prompt_text;
        inputType = $event.detail.input_type;
        inputSubtype = $event.detail.input_subtype ? $event.detail.input_subtype : 'text';
        promptBtnText = $event.detail.prompt_btn_text ? $event.detail.prompt_btn_text : 'Ok';
        promptBtnColor = $event.detail.danger ? 'bg-red-600 hover:bg-red-700' : 'bg-gray-700 hover:bg-gray-800';
        placeholder = $event.detail.placeholder ? $event.detail.placeholder : '';

        setTimeout(() => {
            if(inputType == 'text') $refs.text.focus();
            else $refs.textarea.focus();
        }, 100);
    "
    style="display: none"
    >

    {{-- <x-slot name="type">
        @php $type = 'question'; @endphp
    </x-slot> --}}

    <x-slot name="title">
        <span x-text="title"></span>
    </x-slot>

    <x-slot name="body">
        <template x-if="inputType == 'text' && inputSubtype == 'text'">
            <input 
                name="prompt-text" 
                @keydown.enter="
                    $dispatch('prompt-close', {
                        prompt_id: prompt_id,
                        prompt_text: promptText
                    });
                    show = false;
                " 
                :placeholder="placeholder" 
                x-ref="text" type="text" x-model="promptText" class="block w-full mt-3 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
        </template>

        <template x-if="inputType == 'text' && inputSubtype == 'password'">
            <input 
                @keydown.enter="
                    $dispatch('prompt-close', {
                        prompt_id: prompt_id,
                        prompt_text: promptText
                    });
                    show = false;
                " 
                x-ref="text" type="password" x-model="promptText" 
                :placeholder="placeholder" 
                class="block w-full mt-3 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
        </template>

        <template x-if="inputType == 'textarea'">
            <textarea 
                rows="3"
                x-ref="textarea" 
                x-model="promptText"
                class="block w-full mt-3 border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
            </textarea>
        </template>
    </x-slot>

    <x-slot name="footer">
        <button
            @click="
                $dispatch('prompt-close', {
                    prompt_id: prompt_id,
                    prompt_text: promptText
                });
                show = false;
            " 
            type="button" :class="promptBtnColor" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm"
            x-text="promptBtnText"
            >
        </button>
        <button 
            @click="
                $dispatch('prompt-close', {
                    prompt_id: prompt_id,
                    prompt_text: null
                });
                show = false;
            " 
            type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            {{$cancelText ?? 'Cancel'}}
        </button>
    </x-slot>
</x-dialog>