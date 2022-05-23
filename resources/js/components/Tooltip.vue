<template>
    <div class="cursor-pointer">
        <button class="group" @click="show = ! show" @mouseover="show = true" @mouseleave="show = false">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <title>Tooltip</title>
                <desc>Blue circle with a blue border and a letter i in the center</desc>
                <path d="M14.9 8.92452C14.8052 12.4655 11.8793 15.2584 8.36515 15.1629C4.85092 15.0673 2.07888 12.1194 2.17375 8.57846C2.26862 5.03751 5.19448 2.24459 8.7087 2.34015C12.2229 2.43571 14.9949 5.38357 14.9 8.92452Z" stroke="#86A5D9"/>
                <path d="M14.1777 8.75691C14.1763 11.9032 11.6439 14.4539 8.52122 14.4539C5.39853 14.4539 2.86812 11.9032 2.86939 8.75691C2.87066 5.61055 5.40314 3.05994 8.52583 3.05994C11.6485 3.05994 14.179 5.61055 14.1777 8.75691Z" fill="#86A5D9" stroke="#F4F4F4"/>
                <path d="M7.80697 7.70189H9.20697V12.0719H7.80697V7.70189ZM7.77698 6.15189C7.77698 5.94523 7.85698 5.77523 8.01698 5.64189C8.18362 5.50856 8.36033 5.44189 8.54697 5.44189C8.73362 5.44189 8.90362 5.50856 9.05698 5.64189C9.21698 5.77523 9.29698 5.94523 9.29698 6.15189C9.29698 6.35855 9.21698 6.52855 9.05698 6.66189C8.90362 6.78855 8.73362 6.85189 8.54697 6.85189C8.36033 6.85189 8.18362 6.78855 8.01698 6.66189C7.85698 6.52855 7.77698 6.35855 7.77698 6.15189Z" fill="#1F4481"/>
            </svg>
        </button>
        <transition name="tooltip">
            <div v-show="show" class="z-10 absolute w-[300px] right-1 border border-[3px] border-[#86A5D9] bg-white">
                <p class="p-4 text-center">
                    <slot></slot>
                </p>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    data() {
        return {
            show: false,
        }
    },
}
</script>
