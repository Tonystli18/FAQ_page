<template>
    <div class="mb-8 flex">
        <div class="mr-4">
            <span
            class="border border-solid border-gray-700 rounded-full w-6 h-6 flex items-center justify-center text-xs text-gray-700 font-bold leading-none cursor-pointer"
            @click="toggle"
            >
                <template v-if="isOpen">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="12"
                    height="16"
                    viewBox="0 0 12 16"
                    class="fill-current"
                    >
                    <path
                        d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"
                    />
                    </svg>
                </template>
                <template v-else="isOpen">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="12"
                    height="16"
                    viewBox="0 0 12 16"
                    class="fill-current"
                    >
                    <path
                        d="M12 9H7v5H5V9H0V7h5V2h2v5h5z"
                    />
                    </svg>
                </template>
            </span>
        </div>
        <div class="leading-loose">
            <h3
            v-text="item.question"
            class="font-bold text-2xl mb-3 text-black leading-none cursor-pointer"
            @click="toggle"
            ></h3>

            <div v-html="item.answer" v-show="isOpen"></div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['item', 'isOpen'],

    methods: {
        toggle() {
            this.$emit('toggled', this.$vnode.key);
        }
    }
}
</script>